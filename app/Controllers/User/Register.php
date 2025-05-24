<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;
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
        $render = new RenderUserViewController;
        return $render->renderViewUserAuth('fronts/user-auth/Register', $data);
    }
    
    public function registerHandeler()
    {
        $data = $this->request->getPost();

        if (!isset($data['terms']) || $data['terms'] != '1') {
            return redirect()->to('user/register')->with("error", "You must agree to the Terms and Privacy Policy.");
        }
        // Validate email format
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            return redirect()->to('user/register')->with("error", "Invalid email address");
        }
        

        $userModel = new UserModel();
        $getUserEmailDb = $userModel->where("email", $email)->first();

        // Password match check
        if ($data['password'] !== $data['confirm_password']) {
            return redirect()->to('user/register')->with("error", "Password not matched");
        }

        // Check if email already exists
        if ($getUserEmailDb) {
            return redirect()->to('user/register')->with("error", "Email already exists");
        }

        // Hash password
        $hashedPassword = Hash::make($data['password']);

        // Prepare data to insert
        $insertableData = [
            'full_name'      => $data['full_name'],
            'email'          => $email,
            'phone'          => $data['phone'],
            'password_hash'  => $hashedPassword,
        ];

        // print_r($data) ;
        // Insert user
        if ($userModel->insert($insertableData)) {
            return redirect()->to('user/login')->with("success", "Registered successfully");
        } else {
            // Get detailed validation errors
            $errors = $userModel->errors();
            return redirect()->to('user/register')->with("error", implode(' ', $errors));
        }
        
    }
}
