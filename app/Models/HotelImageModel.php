<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelImageModel extends Model
{
    protected $table            = 'hotel_images';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false; // Images typically hard deleted or managed differently

    protected $allowedFields = [
        'hotel_id',
        'image_path',
        'alt_text',
        'is_primary',
        'sort_order',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // No deletedField as useSoftDeletes is false

    // Validation
    protected $validationRules = [
        'hotel_id'   => 'required|integer|is_natural_no_zero',
        'image_path' => 'required|max_length[255]',
        'alt_text'   => 'permit_empty|max_length[255]',
        'is_primary' => 'permit_empty|in_list[0,1]',
        'sort_order' => 'permit_empty|integer|is_natural',
    ];
    protected $validationMessages = [
        'hotel_id' => [
            'required' => 'The hotel ID is required for the image.',
            'integer'  => 'The hotel ID must be an integer.',
            'is_natural_no_zero' => 'The hotel ID must be a positive number.'
        ],
        'image_path' => [
            'required'   => 'The image path is required.',
            'max_length' => 'The image path cannot exceed {param} characters.'
        ],
        'alt_text' => [
            'max_length' => 'Alt text cannot exceed {param} characters.'
        ],
        'is_primary' => [
            'in_list' => 'Is primary must be 0 or 1.'
        ],
        'sort_order' => [
            'integer'   => 'Sort order must be an integer.',
            'is_natural' => 'Sort order must be a non-negative number.'
        ],
    ];
    protected $skipValidation     = false;
    protected $cleanValidationRules = true;
}
