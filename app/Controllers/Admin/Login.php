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
        // echo $fieldType;
        /*if ($fieldType === 'email') {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|valid_email|is_not_unique[admins.email]',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Email not valid',
                        'is_not_unique' => 'Email not exists',
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[6]|max_length[45]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Minimum Password 6 characters',
                        'max_length' => 'Maximum Password 45 characters',
                    ]
                ],
            ]);
        } else {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|is_not_unique[admins.username]',
                    'errors' => [
                        'required' => 'Username is required',
                        'is_not_unique' => 'Username not exists',
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[6]|max_length[45]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Minimum Password 6 characters',
                        'max_length' => 'Maximum Password 45 characters',
                    ]
                ],
            ]);
        }
        if (!$isValid) {
            $render = new RenderAdminViewController();
            return $render->renderViewAdminAuth('fronts/admin-auth/login', [
                'pageTitle' => 'LogIn',
                'validation' => $this->validator,
            ]);
        } else {
            $admin = new AdminModel();
            $adminInfo = $admin->where($fieldType, $this->request->getVar('login_id'))->first();
            $checkPassword = Hash::check($this->request->getVar('password'), $adminInfo['password']);
            $data = $this->request->getPost();

            if (!$checkPassword) {
                return redirect()->route('admin.login')->with('fail', 'Wrong password!')->withInput();
            } else {
                CIAuth::setCIAuth($adminInfo);

                // 🔐 Set "Remember Me" cookie (optional)
                if ($this->request->getVar('rememberMe')) {
                    $token = bin2hex(random_bytes(32)); // random token
                    $cookie = [
                        'name'   => 'remember_token',
                        'value'  => $token,
                        'expire' => 60 * 60 * 24 * 30, // 30 days
                        'httponly' => true
                    ];
                    setcookie($cookie['name'], $cookie['value'], time() + $cookie['expire'], "/");
                    // Save the token to DB (add 'remember_token' field to your admins table)
                    $admin->update($adminInfo['id'], ['remember_token' => $token]);
                }

                $successMsg = 'Welcome Back ' . $adminInfo['full_name'] . '!';
                if ($data['refer'] == "none") {
                    return redirect()->to(base_url('admin'))->with("succ", $successMsg);
                } else {
                    return redirect()->to($data['refer'])->with("succ", $successMsg);
                }

                // return redirect()->to($data['refer'])->with('success', $successMsg)->withInput();

                // if (password_verify($data['password'], $getUser->password)) {
                // } 
            }
        }*/
    }
}
