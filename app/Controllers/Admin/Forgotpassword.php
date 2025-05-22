<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;
use App\Models\AdminModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\PasswordResetOtpModel;

class Forgotpassword extends BaseController
{
    protected $helpers = ['url', 'form', 'CIMail'];

    public function index()
    {
        $data = [
            'pageTitle' => 'Forgot Password',
            'step' => 'email',
            'validation' => null,
        ];
        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin/Forgot-password', $data);
    }
    public function forgotPasswordHandler()
    {
        $step = $this->request->getVar('step');
        $model = new PasswordResetOtpModel();

        if ($step === 'email') {
            $email = filter_var($this->request->getVar('email'), FILTER_VALIDATE_EMAIL);

            $isValid = $this->validate([
                'email' => [
                    'rules' => 'required|valid_email|is_not_unique[admins.email]',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Email not valid',
                        'is_not_unique' => 'Email does not exist',
                    ]
                ]
            ]);
            // return route_to('admin/forgot_password')
            if (!$isValid) {
                $render = new RenderAdminViewController();
                return $render->renderViewAdmin('fronts/admin/forgot-password', [
                    'step' => 'email',
                    'validation' => $this->validator
                ]);
            }

            $otp = rand(100000, 999999);

            $model->where('email', $email)->delete();
            date_default_timezone_set('Asia/Kolkata');
            $model->insert([
                'email' => $email,
                'otp' => $otp,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            // Send OTP
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = getenv('EMAIL_HOST');
                $mail->SMTPAuth = true;
                $mail->Username = getenv('EMAIL_USERNAME');
                $mail->Password = getenv('EMAIL_PASSWORD');
                $mail->SMTPSecure = strtolower(getenv('EMAIL_ENCRYPTION')) === 'tls' ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = getenv('EMAIL_PORT');

                $mail->setFrom(getenv('EMAIL_FROM_ADDRESS'), getenv('EMAIL_FROM_NAME'));
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Your OTP for Password Reset';
                $mail->Body = "<h3>Your OTP is: <b>$otp</b></h3><p>It is valid for 10 minutes.</p>";

                $mail->send();
            } catch (Exception $e) {
                $render = new RenderAdminViewController();
                return $render->renderViewAdmin('fronts/admin/forgot-password', [
                    'step' => 'email',
                    'error' => 'Failed to send OTP. Please try again.',
                ]);
            }

            session()->set('reset_email', $email);

            $render = new RenderAdminViewController();
            return $render->renderViewAdmin('fronts/admin/forgot-password', ['step' => 'otp', 'email' => $email]);
        }

        if ($step === 'otp') {
            $otp = $this->request->getVar('otp');
            $email = session()->get('reset_email');

            $record = $model->where('email', $email)->where('otp', $otp)->first();
            if (!$record) {
                $render = new RenderAdminViewController();
                return $render->renderViewAdmin('fronts/admin/forgot-password', ['step' => 'otp', 'error' => 'Invalid OTP', 'email' => $email]);
            }

            if (time() - strtotime($record['created_at']) > 600) {
                $render = new RenderAdminViewController();
                return $render->renderViewAdmin('fronts/admin/forgot-password', ['step' => 'otp', 'error' => 'OTP expired', 'email' => $email]);
            }

            return view('admin/forgot-password', ['step' => 'password', 'email' => $email]);
        }

        if ($step === 'password') {
            $password = $this->request->getVar('password');
            $confirm = $this->request->getVar('confirm_password');
            $email = session()->get('reset_email');

            if ($password !== $confirm || strlen($password) < 6) {
                return view('admin/forgot-password', [
                    'step' => 'password',
                    'email' => $email,
                    'error' => 'Passwords must match and be at least 6 characters.'
                ]);
            }

            $hashed = password_hash($password, PASSWORD_DEFAULT);
            (new AdminModel())->where('email', $email)->set(['password' => $hashed])->update();
            $model->where('email', $email)->delete();
            session()->remove('reset_email');

            return redirect()->to(base_url('admin/login'))->with('success', 'Password updated successfully.');
        }
    }
}
