<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;

class Hotelcheckout extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Checkout'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUser('fronts/user/Hotel-checkout', null, 'footernav', $data);
    }
}
