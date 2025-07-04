<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'full_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email'           => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'unique'     => true,
            ],
            'phone'           => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'unique'     => true,
            ],
            'password_hash'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'remember_token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at'      => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at'      => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
