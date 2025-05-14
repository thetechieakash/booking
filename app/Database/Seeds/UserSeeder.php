<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'full_name' => 'SAdmin',
            'username'=> 'SAdmin',
            'email'=>'admin@bdb.com',
            'phone'=> '0123456789',
            'password'=> password_hash('123456', PASSWORD_BCRYPT),
        ];
        $this->db->table('users')->insert($data);
    }
}
