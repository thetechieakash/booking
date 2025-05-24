<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;
use App\Models\UserModel;

class Login extends BaseController
{
    protected $helpers = ['url', 'form', 'cookie'];
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Login'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUserAuth('fronts/user-auth/Login', $data);
    }

    public function loginHandeler()
    {
        $session = session();

        $data = $this->request->getPost();

        // Validate required fields
        if (empty($data['email']) || empty($data['password'])) {
            return redirect()->to('user/login')->with('error', 'Email and password are required.');
        }

        // Sanitize and fetch email
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            return redirect()->to('user/login')->with('error', 'Invalid email format.');
        }

        // Load model
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        // Check if user exists
        if (!$user) {
            return redirect()->to('user/login')->with('error', 'Invalid email or password.');
        }

        // Verify password
        if (!password_verify($data['password'], $user['password_hash'])) {
            return redirect()->to('user/login')->with('error', 'Invalid email or password.');
        }

        // Store session data
        $sessionData = [
            'user_id'    => $user['id'],
            'user_name'  => $user['full_name'],
            'user_email' => $user['email'],
            'isLoggedIn' => true,
        ];
        $session->set($sessionData);
        // Redirect to intended URL or home
        $redirectUrl = $session->get('redirect_url') ?? route_to('home');
        $session->remove('redirect_url');
        // Handle remember me (optional, basic cookie logic)
        if (isset($data['remember']) && $data['remember'] === '1') {
            // Example logic: store encrypted token or use native session remember mechanism
            // Here we just set a cookie (for demo purposes, not secure for production use)
            setcookie('remember_me', $user['email'], time() + (86400 * 30), "/"); // 30 days
        }

        return redirect()->to($redirectUrl)->with('success', 'Welcome back, ' . $user['full_name'] . '!');
    }
}
