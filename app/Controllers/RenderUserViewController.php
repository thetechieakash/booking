<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RenderUserViewController extends BaseController
{
    // Reuseable functions 
    public function renderViewUser($contentView,  $optionalHeader = null,  $footerType = 'footerfull', $data = [])
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
    public function renderViewUserAuth($contentView, $data = [])
    {
        return view('fronts/templates/Layout', $data) .
            view($contentView) .
            view('fronts/admin/templates/Jsmain');
    }
}
