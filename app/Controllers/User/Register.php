<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;

class Register extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Register'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUserAuth('fronts/user-auth/Register', $data);
    }
}
