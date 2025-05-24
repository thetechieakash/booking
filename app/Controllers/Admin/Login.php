<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;
use App\Models\AdminModel;
use App\Libraries\Hash;
use App\Libraries\CIAuth;

class Login extends BaseController
{
    protected $helpers = ['url', 'form', 'cookie'];
    public function index()
    {
        $refer = $this->request->getGet('refer') ?? 'none';

        $render = new RenderAdminViewController();
        return $render->renderViewAdminAuth('fronts/admin-auth/Login', [
            'pageTitle' => 'LogIn',
            'validation' => null,
            'refer' => $refer,
        ]);
    }
    public function loginHandler()
    {
        $loginID = $this->request->getVar('login_id');
        $password = $this->request->getVar('password');
        $refer = $this->request->getVar('refer') ?? 'none';

        // 📌 Detect field type (email or username)
        $fieldType = filter_var($loginID, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // ✅ Validation rules
        $rules = [
            'login_id' => [
                'rules' => 'required|' . ($fieldType === 'email' ? 'valid_email|is_not_unique[admins.email]' : 'is_not_unique[admins.username]'),
                'errors' => [
                    'required' => ucfirst($fieldType) . ' is required',
                    'valid_email' => 'Email not valid',
                    'is_not_unique' => ucfirst($fieldType) . ' does not exist',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[45]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Minimum 6 characters',
                    'max_length' => 'Maximum 45 characters',
                ]
            ],
        ];
        // ❌ Failed validation
        if (!$this->validate($rules)) {
            $render = new RenderAdminViewController();
            return $render->renderViewAdminAuth('fronts/admin-auth/Login', [
                'pageTitle' => 'LogIn',
                'validation' => $this->validator,
                'refer' => $refer,
            ]);
        }

        // ✅ Attempt login
        $adminModel = new AdminModel();
        $adminInfo = $adminModel->where($fieldType, $loginID)->first();

        if (!$adminInfo || !Hash::check($password, $adminInfo['password'])) {
            return redirect()->route('admin.login')->with('fail', 'Wrong password!')->withInput();
        }

        // ✅ Store session data
        CIAuth::setCIAuth($adminInfo);

        // 🔐 Handle "Remember Me" option
        if ($this->request->getVar('rememberMe')) {
            $token = bin2hex(random_bytes(32));

            // Optionally: hash token before saving (recommended)
            $adminModel->update($adminInfo['id'], ['remember_token' => $token]);

            // Secure cookie options
            setcookie('remember_token', $token, [
                'expires' => time() + (60 * 60 * 24 * 30), // 30 days
                'path' => '/',
                'secure' => isset($_SERVER['HTTPS']), // true if using HTTPS
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
        }

        // ✅ Redirect to previous or dashboard
        $successMsg = 'Welcome back, ' . $adminInfo['full_name'] . '!';
        return redirect()->to($refer === 'none' ? base_url('admin') : $refer)->with('succ', $successMsg);
    }
}
