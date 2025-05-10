<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function home(): string
    {
        return view('fronts/auth/templates/layout') .
            view('fronts/auth/templates/vertical-nav') .
            view('fronts/auth/templates/top-nav') .
            view('fronts/auth/templates/page-js') .
            view('fronts/auth/admin-home') .
            view('fronts/auth/templates/footer') .
            view('fronts/auth/templates/jsmain');
    }
    public function members(): string
    {
        return view('fronts/auth/templates/layout') .
            view('fronts/auth/templates/vertical-nav') .
            view('fronts/auth/templates/top-nav') .
            view('fronts/auth/templates/page-js') .
            view('fronts/auth/members') .
            view('fronts/auth/templates/footer') .
            view('fronts/auth/templates/jsmain');
    }
}
