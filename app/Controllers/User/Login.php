<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Login'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUserAuth('fronts/user-auth/Login', $data);
    }
}
