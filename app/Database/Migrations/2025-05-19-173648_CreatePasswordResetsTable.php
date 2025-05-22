<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasswordResetsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'otp' => [
                'type' => 'VARCHAR',
                'constraint' => '6',
                'null' => false,
            ],
            'created_at'  => [
                'type' => 'DATETIME',
                'null' => false
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('password_resets');
    }

    public function down()
    {
        $this->forge->dropTable('password_resets');
    }
}
