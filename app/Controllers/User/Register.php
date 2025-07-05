<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Libraries\Hash;

class Register extends BaseController
{
    protected $helpers = ['url', 'form', 'cookie'];
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Register'
        ];
        return view('fronts/templates/Layout', $data) .
            view('fronts/user-auth/Register') .
            view('fronts/admin/templates/Jsmain');
    }

    public function registerHandeler()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();

            if (!isset($data['full_name'])) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'fname',
                    'msg' => 'Invalid full name!',
                ]);
            }
            // Validate email format
            $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
            if (!$email) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'email',
                    'msg' => 'Invalid email address!',
                ]);
            }
            if (strlen($data['confirm_password']) <= 5) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'pass',
                    'msg' => 'Password must be at least 6 characters long!',
                ]);
            }
            // Password match check
            if ($data['password'] !== $data['confirm_password']) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'pass',
                    'msg' => 'Password not matched!',
                ]);
            }

            if (!isset($data['terms']) || $data['terms'] != 1) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'terms',
                    'msg' => 'You must agree to the Terms and Privacy Policy!',
                ]);
            }
            $userModel = new UserModel();
            $getUserEmailDb = $userModel->where("email", $email)->first();
            // Check if email already exists
            if ($getUserEmailDb) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'exist',
                    'msg' => 'Email already exists',
                ]);
            }
            // Hash password
            $hashedPassword = Hash::make($data['password']);

            // Prepare data to insert
            $insertableData = [
                'full_name'      => htmlspecialchars($data['full_name']),
                'email'          => $email,
                'phone'          => $data['phone'],
                'password_hash'  => $hashedPassword,
            ];
            // Insert user
            if ($userModel->insert($insertableData)) {
                return $this->response->setJSON([
                    'success' => true,
                    'msg'     => 'Registration successful!',
                    'redirect' => base_url('user/login')
                ]);
            } else {
                // Get detailed validation errors
                $errors = $userModel->errors();
                return redirect()->to('user/register')->with("error", implode(' ', $errors));
            }
        } else {
            // Fallback if accessed normally (non-AJAX)
            return $this->response->setJSON([
                'err' => true,
                'msg' => 'invalid request!',
            ]);
        }
    }
}
