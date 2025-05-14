<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'full_name' => 'Super Admin',
            'username' => 'SAdmin',
            'email' => 'sadmin@bgb.com',
            'password' => password_hash('123456', PASSWORD_BCRYPT),
            'role' => 'superadmin'
        ];
        $this->db->table('admins')->insert($data);
    }
}
