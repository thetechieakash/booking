<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;

class Addroom extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'add-room'
        ];
        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin/Add-room', $data);
    }
}
