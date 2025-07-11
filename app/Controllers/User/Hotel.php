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
    public function searchHotel()
    {
        $keyword = $this->request->getGet('keyword');

        if (!$keyword || strlen($keyword) < 3) {
            return $this->response->setJSON([]);
        }

        $hotelModel = new HotelModel();

        $hotels = $hotelModel
            ->like('property_name', $keyword)
            ->select() // Adjust fields as per your table
            ->findAll(10); // Limit results

        return $this->response->setJSON([
            'keyword' => $keyword,
            'hotels' => $hotels
        ]);
    }
}
