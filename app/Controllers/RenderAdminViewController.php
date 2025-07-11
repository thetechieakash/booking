<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CiAdmin;

class RenderAdminViewController extends BaseController
{
    // Reuseable functions 
    public function renderViewAdmin($contentView, $data = [])
    {
        $admindata = CiAdmin::admin();
        $totaldata = array_merge($data, ['admindata' => $admindata]);
        return view('fronts/admin/templates/Layout', $totaldata)
            . view('fronts/admin/templates/Vertical-nav')
            . view('fronts/admin/templates/Top-nav')
            . view('fronts/admin/templates/Page-js')
            . view($contentView)
            . view('fronts/admin/templates/Footer')
            . view('fronts/admin/templates/Jsmain');
    }
}
