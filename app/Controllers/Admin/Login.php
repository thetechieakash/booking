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
        $request = $this->request;
        $loginID = $request->getVar('login_id');
        $password = $request->getVar('password');
        $refer = $request->getVar('refer') ?? 'none';

        $fieldType = filter_var($loginID, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Validation rules
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
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            return (new RenderAdminViewController())->renderViewAdminAuth('fronts/admin-auth/Login', [
                'pageTitle' => 'LogIn',
                'validation' => $this->validator,
                'refer' => $refer,
            ]);
        }

        // Fetch admin
        $adminModel = new AdminModel();
        $admin = $adminModel->where($fieldType, $loginID)->first();

        if (!$admin || !Hash::check($password, $admin['password'])) {
            return redirect()->route('admin.login')->with('fail', 'Wrong password!')->withInput();
        }

        // Store session
        CIAuth::setCIAuth($admin);

        // Handle Remember Me
        if ($request->getVar('rememberMe')) {
            $token = bin2hex(random_bytes(32));
            $adminModel->update($admin['id'], ['remember_token' => $token]);

            setcookie('remember_token', $token, [
                'expires' => time() + 60 * 60 * 24 * 30, // 30 days
                'path' => '/',
                'secure' => isset($_SERVER['HTTPS']),
                'httponly' => true,
                'samesite' => 'Lax',
            ]);
        }

        // Redirect back
        $redirectUrl = session('redirect_url') ?? route_to('admin.home');
        return redirect()->to($redirectUrl)->with('success', 'Welcome back, ' . $admin['full_name'] . '!');
    }
}
