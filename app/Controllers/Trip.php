<?php

namespace App\Controllers;

class Trip extends BaseController
{
    public function trip(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/templates/groupheader') .
            view('fronts/user/trip') .
            view('fronts/templates/footerfull') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function tripDetails(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/user/trip-details') .
            view('fronts/templates/footerfull') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function tripCheckOut(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/user/trip-checkout') .
            view('fronts/templates/footernav') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
}
