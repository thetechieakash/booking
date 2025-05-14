<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {   
        $data =[
            'pageTitle'=>'home'
        ];
        return $this->renderView('fronts/user/trip', 'groupheader', 'footerfull', $data);
    }

    public function hotelDetails(): string
    {
        $data = [
            'pageTitle' => 'Details'
        ];
        return $this->renderView('fronts/user/trip-details', null, 'footerfull', $data);
    }

    public function hotelCheckOut(): string
    {
        return $this->renderView('fronts/user/trip-checkout', null, 'footernav');
    }

    /**
     * Reusable layout loader for Trip pages
     */
    private function renderView($contentView,  $optionalHeader = null,  $footerType = 'footerfull', $data = []): string
    {
        $output = view('fronts/templates/layout', $data);
        $output .= view('fronts/templates/header');

        if ($optionalHeader === 'groupheader') {
            $output .= view('fronts/templates/groupheader');
        }

        $output .= view($contentView);

        if ($footerType === 'footernav') {
            $output .= view('fronts/templates/footernav');
        } elseif ($footerType === 'footerfull') {
            $output .= view('fronts/templates/footerfull');
        }

        $output .= view('fronts/templates/footer');
        $output .= view('fronts/templates/jsmain');

        return $output;
    }
}
