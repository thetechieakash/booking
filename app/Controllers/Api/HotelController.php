<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\HotelModel;

class HotelController extends BaseController
{
    public function allHotels($limit = null)
    {
        $hotelModel = new HotelModel();
        $hotels = $hotelModel->getHotelFullListing($limit);
        if ($hotels) {
            return $this->response->setJSON([
                'success' => true,
                'data'    => $hotels
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Hotels not found'
            ])->setStatusCode(404);
        }
    }
    public function singleHotel($id)
    {
        $hotelModel = new HotelModel();
        $hotel = $hotelModel->getSingleHotel($id);

        if ($hotel) {
            return $this->response->setJSON([
                'success' => true,
                'data'    => $hotel
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Hotel not found'
            ])->setStatusCode(404);
        }
    }
}
