<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInquiriesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 160],
            'email' => ['type' => 'VARCHAR', 'constraint' => 160],
            'phone' => ['type' => 'VARCHAR', 'constraint' => 80, 'null' => true],
            'company' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'subject' => ['type' => 'VARCHAR', 'constraint' => 220, 'null' => true],
            'message' => ['type' => 'TEXT'],
            'preferred_lang' => ['type' => 'VARCHAR', 'constraint' => 10, 'default' => 'id'],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'new'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey(['status', 'created_at']);
        $this->forge->createTable('inquiries', true);
    }

    public function down()
    {
        $this->forge->dropTable('inquiries', true);
    }
}
