<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function home()
    {
        return $this->renderViewAdmin('fronts/admin/admin-home');
    }
    public function addProperty()
    {
        return $this->renderViewAdmin('fronts/admin/add-property');
    }
    public function addRoom()
    {
        return $this->renderViewAdmin('fronts/admin/add-room');
    }
    public function members()
    {
        return $this->renderViewAdmin('fronts/admin/members');
    }
    private function renderViewAdmin(string $contentView)
    {
        return view('fronts/admin/templates/layout') .
            view('fronts/admin/templates/vertical-nav') .
            view('fronts/admin/templates/top-nav') .
            view('fronts/admin/templates/page-js') .
            view($contentView) .
            view('fronts/admin/templates/footer') .
            view('fronts/admin/templates/jsmain');
    }
}
