<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHotelAmenitiesTable extends Migration
{
    public function up()
    {
        // Table: hotel_amenities (Pivot table for Many-to-Many relationship)
        $this->forge->addField([
            'hotel_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'amenity_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey(['hotel_id', 'amenity_id'], true); // Composite primary key
        $this->forge->addForeignKey('hotel_id', 'hotels', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('amenity_id', 'amenities', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('hotel_amenities');
    }

    public function down()
    {
        $this->forge->dropTable('hotel_amenities');
    }
}
