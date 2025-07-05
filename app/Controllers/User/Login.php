<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Libraries\Hash;
use App\Libraries\CiUser;

class Login extends BaseController
{
    protected $helpers = ['url', 'form', 'cookie'];
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Login'
        ];
        return view('fronts/templates/Layout', $data) .
            view('fronts/user-auth/Login') .
            view('fronts/admin/templates/Jsmain');
    }

    public function loginHandeler()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost();
            // Validate email format
            $email = filter_var($data['email'] ?? '', FILTER_VALIDATE_EMAIL);
            $password = $data['password'] ?? '';
            $rememberMe = $data['rememberMe'] ?? null;
            if (!$email) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'email',
                    'msg'  => 'Please enter a valid email address.'
                ]);
            }
            if (empty($password)) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'password',
                    'msg'  => 'Password is required.'
                ]);
            }
            $userModel = new UserModel();
            $user = $userModel->where('email', $email)->first();
            if (!$user || !password_verify($password, $user['password_hash'])) {
                return $this->response->setJSON([
                    'err' => true,
                    'type' => 'general',
                    'msg'  => 'Invalid email or password.'
                ]);
            }
            CiUser::setCIUser($user);
            if ($rememberMe) {
                $token = bin2hex(random_bytes(32));
                $userModel->update($user['id'], ['remember_token' => $token]);
                setcookie('remember_token', $token, [
                    'expires' => time() + (86400 * 30),
                    'path' => '/',
                    'secure' => isset($_SERVER['HTTPS']),
                    'httponly' => true,
                    'samesite' => 'Lax'
                ]);
            }

            return $this->response->setJSON([
                'success' => true,
                'msg'     => 'Welcome back, ' . $user['full_name'] . '!',
                'redirect' => route_to('home')
            ]);
        } else {
            // Fallback if accessed normally (non-AJAX)
            return $this->response->setJSON([
                'err' => true,
                'msg' => 'Invalid request type.'
            ]);
        }
    }
}
