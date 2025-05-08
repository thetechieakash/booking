<?php

namespace App\Controllers;

class Trip extends BaseController
{
    public function trip(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/templates/headersec') .
            view('fronts/templates/groupheader') .
            view('fronts/trip') .
            view('fronts/templates/footerfull') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
}
