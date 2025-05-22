<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Controllers\RenderUserViewController;

class Trip extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'Home'
        ];
        $render = new RenderUserViewController;
        return $render->renderViewUser('fronts/user/Trip', 'groupheader', 'footerfull', $data);
    }
}
