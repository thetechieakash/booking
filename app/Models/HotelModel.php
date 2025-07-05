<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table            = 'hotels';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array'; 

    protected $allowedFields = [
        'property_name',
        'description',
        'rating',
        'email',
        'phone',
        'chain_name',
        'thumbnail',
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation rules (optional)
    protected $validationRules    = [];
    protected $validationMessages = [];

    protected $skipValidation     = false;
    public function getHotelFullListing($limit = null)
    {
        return $this->select('
            hotels.id, 
            hotels.property_name, 
            hotels.email, 
            hotels.phone, 
            hotels.rating, 
            hotels.chain_name,
            hotels.thumbnail,
            hotel_locations.state,
            hotel_locations.country_or_region,
            hotel_finance.cash_payment, 
            hotel_finance.card_payment, 
            hotel_finance.online_payment, 
            hotel_policies.property_registration_no,
            hotel_policies.refund_policy_type,
            hotel_amenities.amenities,
        ')
            ->join('hotel_locations', 'hotel_locations.hotel_id = hotels.id', 'left')
            ->join('hotel_finance', 'hotel_finance.hotel_id = hotels.id', 'left')
            ->join('hotel_policies', 'hotel_policies.hotel_id = hotels.id', 'left')
            ->join('hotel_amenities', 'hotel_amenities.hotel_id = hotels.id', 'left')
            ->findAll($limit);
    }
    public function getSingleHotel($hotelId)
    {
        return $this->select('
            hotels.*,
            
            hotel_locations.street_name,
            hotel_locations.city,
            hotel_locations.state,
            hotel_locations.zip_code,
            hotel_locations.country_or_region,
            hotel_locations.latitude,
            hotel_locations.longitude,

            hotel_amenities.amenities,
            hotel_gallery.photos,
            
            hotel_finance.cash_payment, 
            hotel_finance.card_payment, 
            hotel_finance.online_payment, 
            
            hotel_policies.ci_type,
            hotel_policies.ci_start_time,
            hotel_policies.ci_end_time,
            hotel_policies.refund_policy_type,
            hotel_policies.age_segments,
            hotel_policies.vat_condition,

        ')
            ->join('hotel_locations', 'hotel_locations.hotel_id = hotels.id', 'left')
            ->join('hotel_finance', 'hotel_finance.hotel_id = hotels.id', 'left')
            ->join('hotel_policies', 'hotel_policies.hotel_id = hotels.id', 'left')
            ->join('hotel_amenities', 'hotel_amenities.hotel_id = hotels.id', 'left')
            ->join('hotel_gallery', 'hotel_gallery.hotel_id = hotels.id', 'left')
            ->where('hotels.id', $hotelId)
            ->first(); // Get single row
    }
}
