<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\CiAdmin;
use App\Models\AdminModel;
use App\Libraries\Hash;
use Config\Services;

class Addadmin extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index()
    {
        $admindata = CiAdmin::admin();
        $data = [
            'pageTitle' => 'members',
            'admindata' => $admindata,
        ];
        return view('fronts/admin/templates/Layout', $data)
            . view('fronts/admin/templates/Vertical-nav')
            . view('fronts/admin/templates/Top-nav')
            . view('fronts/admin/templates/Page-js')
            . view('fronts/admin/Add-admin')
            . view('fronts/admin/templates/Footer')
            . view('fronts/admin/templates/Jsmain');
    }

    public function registerHandler()
    {
        $data = $this->request->getPost();
        $model = new AdminModel();

        $validation = Services::validation();
        $rules = [
            'full_name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|is_unique[admins.email]',
            'role' => 'required|in_list[superadmin,admin,editor]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]',
        ];

        if (!$validation->setRules($rules)->run($data)) {
            return redirect()->route('admin.addadmin')->with('errors', $validation->getErrors());
        }
        $data['email'] = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        $dbEmail = $model->where('email', $data['email'])->first();
        if ($dbEmail) {
            return redirect()->to('admin/add_admin')->with('errors', 'Email already exist!');
        }
        if (!$data['password'] === $data['confirm_password']) {
            return redirect()->to('admin/add_admin')->with('errors', 'Password should be matched!');
        }
        $hashedPassword = Hash::make($data['password']);
        $baseUsername = strtolower(preg_replace('/\s+/', '', $data['full_name']));
        $username = $baseUsername . '_' . bin2hex(random_bytes(2));

        // Ensure uniqueness
        while ($model->where('username', $username)->first()) {
            $username = $baseUsername . '_' . bin2hex(random_bytes(2));
        }

        $insertableData = [
            'full_name' => $data['full_name'],
            'username' => $username,
            'email' => $data['email'],
            'password' => $hashedPassword,
            'role' => $data['role'],
            'created_at' => date('Y-m-d H:i:s'),
        ];
        if (!$model->insert($insertableData)) {
            return redirect()->route('admin.addadmin')->with('errors', 'Admin register failed!');
        }
        return redirect()->route('admin.addadmin')->with('success', 'Admin registered successfully. Username: ' . esc($username));
    }
}
