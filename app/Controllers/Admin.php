<?php

namespace App\Controllers;

use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $helpers = ['url', 'form'];
    public function home()
    {
        $data = [
            'pageTitle' => 'Home'
        ];
        return $this->renderViewAdmin('fronts/admin/admin-home', $data);
    }
    public function addProperty()
    {
        $data = [
            'pageTitle' => 'add-property'
        ];
        return $this->renderViewAdmin('fronts/admin/add-property', $data);
    }
    public function addRoom()
    {
        $data = [
            'pageTitle' => 'add-room'
        ];
        return $this->renderViewAdmin('fronts/admin/add-room', $data);
    }
    public function members()
    {
        $data = [
            'pageTitle' => 'members',
        ];
        return $this->renderViewAdmin('fronts/admin/members', $data);
    }
    public function login()
    {
        $data = [
            'pageTitle' => 'LogIn',
            'validation' => null
        ];

        return $this->renderViewAdminAuth('fronts/admin-auth/login', $data);
    }
    public function register()
    {
        $data = [
            'pageTitle' => 'SignUp',
        ];
        return $this->renderViewAdminAuth('fronts/admin-auth/register', $data);
    }
    public function loginHandler()
    {
        $fieldType = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // echo $fieldType;
        if ($fieldType === 'email') {
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
            return $this->renderViewAdminAuth('fronts/admin-auth/login', [
                'pageTitle' => 'LogIn',
                'validation' => $this->validator,
            ]);
        } else {
            $admin = new AdminModel();
            $adminInfo = $admin->where($fieldType, $this->request->getVar('login_id'))->first();
            $checkPassword = Hash::check($this->request->getVar('password'), $adminInfo['password']);
            if (!$checkPassword) {
                return redirect()->route('admin.login')->with('fail', 'Wrong password!')->withInput();
            } else {
                CIAuth::setCIAuth($adminInfo);
                $successMsg = 'Welcome Back ' . $adminInfo['full_name'] . '!';
                return redirect()->route('admin.home')->with('success', $successMsg)->withInput();
            }
        }
    }
    public function logoutHandler()
    {
        // echo 'logout';
        CIAuth::forget();
        return redirect()->route('admin.login')->with('success', 'You are logged out!')->withInput();
    }
    private function renderViewAdmin($contentView, $data = [])
    {
        return view('fronts/admin/templates/layout', $data) .
            view('fronts/admin/templates/vertical-nav') .
            view('fronts/admin/templates/top-nav') .
            view('fronts/admin/templates/page-js') .
            view($contentView) .
            view('fronts/admin/templates/footer') .
            view('fronts/admin/templates/jsmain');
    }

    private function renderViewAdminAuth($contentView, $data = [])
    {
        return view('fronts/admin/templates/layout', $data) .
            view($contentView) .
            view('fronts/admin/templates/jsmain');
    }
}
