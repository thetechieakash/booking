<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;

class Members extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'members',
        ];
        $render = new RenderAdminViewController;
        return $render->renderViewAdmin('fronts/admin/Members', $data);
    }
}
