<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;

class Hoteldetails extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Details'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUser('fronts/user/Hotel-details', null, 'footerfull', $data);
    }
}
