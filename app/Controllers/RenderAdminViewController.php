<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RenderAdminViewController extends BaseController
{
    // Reuseable functions 
    public function renderViewAdmin($contentView, $data = [])
    {
        return view('fronts/admin/templates/Layout', $data)
            . view('fronts/admin/templates/Vertical-nav')
            . view('fronts/admin/templates/Top-nav')
            . view('fronts/admin/templates/Page-js')
            . view($contentView)
            . view('fronts/admin/templates/Footer')
            . view('fronts/admin/templates/Jsmain');
    }

    public function renderViewAdminAuth($contentView, $data = [])
    {
        return view('fronts/admin/templates/Layout', $data)
            . view($contentView)
            . view('fronts/admin/templates/Jsmain');
    }
}
