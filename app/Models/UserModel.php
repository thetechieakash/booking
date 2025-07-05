<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'full_name',
        'email',
        'phone',
        'password_hash',
        'remember_token'
    ];



    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'full_name'      => 'permit_empty|alpha_space|max_length[100]',
        'email'          => 'required|valid_email|is_unique[users.email]',
        'phone'          => 'permit_empty|max_length[20]',
        'password_hash'  => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'full_name' => [
            'alpha_space' => 'First name can only contain letters and spaces.'
        ],
        'email' => [
            'required'    => 'The email field is required.',
            'valid_email' => 'Please enter a valid email address.',
            'is_unique'   => 'This email address is already registered. Please use a different one.'
        ],
        'password_hash' => [
            'required'   => 'The password field is required.',
            'min_length' => 'Your password must be at least {param} characters long.'
        ],
    ];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getUser($data)
    {
        $this->where("username", $data['username']);
        $get = $this->get()->getRow();
        if (!empty($get)) {
            return $get;
        } else {
            return [];
        }
    }
}
