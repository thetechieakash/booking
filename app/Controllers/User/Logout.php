<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\CiUser;
use App\Models\UserModel;

class Logout extends BaseController
{
    public function logoutHandler()
    {
        // Remove remember me cookie
        if (isset($_COOKIE['remember_token'])) {
            setcookie('remember_token', '', time() - 3600, '/'); // delete cookie
        }

        // Remove token from DB
        $user = CiUser::user();
        if ($user) {
            $userModel = new UserModel();
            $userModel->update($user['id'], ['remember_token' => null]);
        }
        // echo 'logout';
        CiUser::forget();
        return redirect()->route('user.login')->with('success', 'You are logged out!');
    }
}
