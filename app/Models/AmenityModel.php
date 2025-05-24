<?php

namespace App\Models;

use CodeIgniter\Model;

class AmenityModel extends Model
{
    protected $table            = 'amenities';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = [
        'name',
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
        'name'        => 'required|min_length[2]|max_length[100]|is_unique[amenities.name,id,{id}]',
        'description' => 'permit_empty',
    ];
    protected $validationMessages   = [
        'name' => [
            'required'   => 'The amenity name is required.',
            'min_length' => 'The amenity name must be at least {param} characters long.',
            'max_length' => 'The amenity name cannot exceed {param} characters.',
            'is_unique'  => 'This amenity name already exists.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
