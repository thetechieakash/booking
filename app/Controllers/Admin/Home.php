<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;

class Home extends BaseController
{
    protected $helpers = ['url', 'form', 'CIMail'];

    public function index()
    {
        $data = [
            'pageTitle' => 'Home'
        ];
        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin/Admin-home', $data);
    }
}
