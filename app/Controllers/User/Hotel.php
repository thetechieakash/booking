<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;
use App\Models\HotelModel;

class Hotel extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Home'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUser('fronts/user/Hotel', 'groupheader', 'footerfull', $data);
    }
}
