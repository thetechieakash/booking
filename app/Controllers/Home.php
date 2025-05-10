<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/templates/groupheader') .
            view('fronts/home') .
            view('fronts/templates/footernav').
            view('fronts/templates/footer').
            view('fronts/templates/jsmain');
    }
    public function hotelDetails(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/hotel-details') .
            view('fronts/templates/footernav').
            view('fronts/templates/footer').
            view('fronts/templates/jsmain');
    }
    public function hotelCheckOut(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/hotel-checkout') .
            view('fronts/templates/footernav').
            view('fronts/templates/footer').
            view('fronts/templates/jsmain');
    }
}
