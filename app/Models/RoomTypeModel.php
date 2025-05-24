<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomTypeModel extends Model
{
    protected $table            = 'room_types';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
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
        'name'        => 'required|min_length[3]|max_length[100]|is_unique[room_types.name,id,{id}]',
        'description' => 'permit_empty',
    ];
    protected $validationMessages   = [
        'name' => [
            'required'   => 'The room type name is required.',
            'min_length' => 'The room type name must be at least {param} characters long.',
            'max_length' => 'The room type name cannot exceed {param} characters.',
            'is_unique'  => 'This room type name already exists.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
