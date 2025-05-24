<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table            = 'rooms';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [
        'hotel_id',
        'room_type_id',
        'room_number',
        'price_per_night',
        'capacity',
        'description',
    ];
    
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'hotel_id'        => 'required|integer|is_natural_no_zero',
        'room_type_id'    => 'required|integer|is_natural_no_zero',
        'room_number'     => 'required|max_length[50]',
        'price_per_night' => 'required|decimal|greater_than[0]',
        'capacity'        => 'required|integer|greater_than[0]',
        'description'     => 'permit_empty',
    ];
    protected $validationMessages   = [
        'hotel_id' => [
            'required'           => 'The hotel ID is required.',
            'integer'            => 'The hotel ID must be an integer.',
            'is_natural_no_zero' => 'The hotel ID must be a positive number.'
        ],
        'room_type_id' => [
            'required'           => 'The room type ID is required.',
            'integer'            => 'The room type ID must be an integer.',
            'is_natural_no_zero' => 'The room type ID must be a positive number.'
        ],
        'room_number' => [
            'required'   => 'The room number is required.',
            'max_length' => 'The room number cannot exceed {param} characters.'
        ],
        'price_per_night' => [
            'required'    => 'The price per night is required.',
            'decimal'     => 'The price per night must be a decimal number.',
            'greater_than' => 'The price per night must be greater than {param}.'
        ],
        'capacity' => [
            'required'   => 'The room capacity is required.',
            'integer'    => 'The capacity must be an integer.',
            'greater_than' => 'The capacity must be greater than {param}.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
