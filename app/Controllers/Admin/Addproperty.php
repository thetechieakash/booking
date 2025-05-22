<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;

class Addproperty extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'add-property'
        ];
        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin/add-property', $data);
    }
}
