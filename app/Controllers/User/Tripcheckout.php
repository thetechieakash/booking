<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;

class Tripcheckout extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Checkout'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUser('fronts/user/Trip-checkout', null, 'footernav', $data);
    }
}
