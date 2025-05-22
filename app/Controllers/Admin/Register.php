<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'SignUp',
        ];
        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin-auth/Register', $data);
    }
}
