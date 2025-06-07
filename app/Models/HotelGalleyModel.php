<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelGalleyModel extends Model
{
    protected $table            = 'hotel_galley';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array'; 

    protected $allowedFields = [
        "hotel_id",
        "photos"
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
