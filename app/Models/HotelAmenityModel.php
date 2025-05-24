<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelAmenityModel extends Model
{
    protected $table            = 'hotel_amenities';
    protected $primaryKey       = ['hotel_id', 'amenity_id']; // Composite primary key
    protected $useAutoIncrement = false; // No auto-increment for pivot table
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false; // Pivot table usually doesn't need soft deletes

    protected $allowedFields = [
        'hotel_id',
        'amenity_id',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'hotel_id'   => 'required|integer|is_natural_no_zero',
        'amenity_id' => 'required|integer|is_natural_no_zero',
    ];
    protected $validationMessages   = [
        'hotel_id' => [
            'required'           => 'The hotel ID is required for linking an amenity.',
            'integer'            => 'The hotel ID must be an integer.',
            'is_natural_no_zero' => 'The hotel ID must be a positive number.'
        ],
        'amenity_id' => [
            'required'           => 'The amenity ID is required for linking an amenity.',
            'integer'            => 'The amenity ID must be an integer.',
            'is_natural_no_zero' => 'The amenity ID must be a positive number.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
