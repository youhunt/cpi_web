<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNetworkLocationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 180],
            'type' => ['type' => 'VARCHAR', 'constraint' => 80, 'default' => 'office'],
            'province' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'city' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'address' => ['type' => 'TEXT', 'null' => true],
            'latitude' => ['type' => 'DECIMAL', 'constraint' => '10,7', 'null' => true],
            'longitude' => ['type' => 'DECIMAL', 'constraint' => '10,7', 'null' => true],
            'description_id' => ['type' => 'TEXT', 'null' => true],
            'description_en' => ['type' => 'TEXT', 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'active'],
            'sort_order' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey(['type', 'status']);
        $this->forge->createTable('network_locations', true);
    }

    public function down()
    {
        $this->forge->dropTable('network_locations', true);
    }
}
