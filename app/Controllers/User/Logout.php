<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;
use App\Models\UserModel;

class Logout extends BaseController
{
    public function logoutHandler()
    {
        $session = session();
        $session->destroy(); // Clear all session data

        return redirect()->to('/')->with('success', 'You have been logged out.');
    }
}
