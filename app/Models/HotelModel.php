<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table            = 'hotels';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'description',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'phone',
        'email',
        'website',
        'rating',
        'latitude',
        'longitude',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name'        => 'required|min_length[3]|max_length[255]',
        'description' => 'permit_empty',
        'address'     => 'required|max_length[255]',
        'city'        => 'required|max_length[100]',
        'state'       => 'required|max_length[100]',
        'zip_code'    => 'required|max_length[20]',
        'country'     => 'required|max_length[100]',
        'phone'       => 'required|max_length[20]',
        'email'       => 'required|valid_email|is_unique[hotels.email,id,{id}]',
        'website'     => 'permit_empty|valid_url',
        'rating'      => 'permit_empty|decimal|greater_than_equal_to[0]|less_than_equal_to[5]',
        'latitude'    => 'permit_empty|decimal',
        'longitude'   => 'permit_empty|decimal',
    ];
    protected $validationMessages   = [
        'name' => [
            'required'   => 'The hotel name is required.',
            'min_length' => 'The hotel name must be at least {param} characters long.',
            'max_length' => 'The hotel name cannot exceed {param} characters.'
        ],
        'address' => [
            'required'   => 'The hotel address is required.',
            'max_length' => 'The address cannot exceed {param} characters.'
        ],
        'city' => [
            'required'   => 'The city field is required.',
            'max_length' => 'The city name cannot exceed {param} characters.'
        ],
        'state' => [
            'required'   => 'The state field is required.',
            'max_length' => 'The state name cannot exceed {param} characters.'
        ],
        'zip_code' => [
            'required'   => 'The zip code is required.',
            'max_length' => 'The zip code cannot exceed {param} characters.'
        ],
        'country' => [
            'required'   => 'The country field is required.',
            'max_length' => 'The country name cannot exceed {param} characters.'
        ],
        'phone' => [
            'required'   => 'The hotel phone number is required.',
            'max_length' => 'The phone number cannot exceed {param} characters.'
        ],
        'email' => [
            'required'   => 'The hotel email is required.',
            'valid_email' => 'Please enter a valid email address for the hotel.',
            'is_unique'  => 'This email address is already associated with another hotel.'
        ],
        'website' => [
            'valid_url'  => 'Please enter a valid URL for the website.'
        ],
        'rating' => [
            'decimal'                => 'Rating must be a decimal number.',
            'greater_than_equal_to'  => 'Rating must be at least {param}.',
            'less_than_equal_to'     => 'Rating cannot exceed {param}.'
        ],
        'latitude' => [
            'decimal'    => 'Latitude must be a valid decimal number.'
        ],
        'longitude' => [
            'decimal'    => 'Longitude must be a valid decimal number.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
