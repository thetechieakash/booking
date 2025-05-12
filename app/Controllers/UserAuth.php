<?php

namespace App\Controllers;

class UserAuth extends BaseController
{
    public function login()
    {
        return $this->renderViewUserAuth('fronts/user-auth/login');
    }
    public function register()
    {
        return $this->renderViewUserAuth('fronts/user-auth/register');
    }
    private function renderViewUserAuth(string $contentView)
    {
        return view('fronts/templates/layout') .
            view($contentView) .
            view('fronts/admin/templates/jsmain');
    }
}
