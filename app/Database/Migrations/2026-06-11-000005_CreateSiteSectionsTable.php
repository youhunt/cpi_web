<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiteSectionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'section_key' => ['type' => 'VARCHAR', 'constraint' => 150],
            'group_key' => ['type' => 'VARCHAR', 'constraint' => 80, 'default' => 'home'],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'subtitle_id' => ['type' => 'TEXT', 'null' => true],
            'subtitle_en' => ['type' => 'TEXT', 'null' => true],
            'body_id' => ['type' => 'LONGTEXT', 'null' => true],
            'body_en' => ['type' => 'LONGTEXT', 'null' => true],
            'button_label_id' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'button_label_en' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'button_url' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'active'],
            'sort_order' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('section_key');
        $this->forge->addKey(['group_key', 'status']);
        $this->forge->createTable('site_sections', true);
    }

    public function down()
    {
        $this->forge->dropTable('site_sections', true);
    }
}
