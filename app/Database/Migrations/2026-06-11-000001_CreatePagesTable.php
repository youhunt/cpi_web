<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 150],
            'template' => ['type' => 'VARCHAR', 'constraint' => 80, 'default' => 'default'],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 255],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 255],
            'excerpt_id' => ['type' => 'TEXT', 'null' => true],
            'excerpt_en' => ['type' => 'TEXT', 'null' => true],
            'content_id' => ['type' => 'LONGTEXT', 'null' => true],
            'content_en' => ['type' => 'LONGTEXT', 'null' => true],
            'meta_title_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'meta_title_en' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'meta_description_id' => ['type' => 'TEXT', 'null' => true],
            'meta_description_en' => ['type' => 'TEXT', 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'draft'],
            'sort_order' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'published_at' => ['type' => 'DATETIME', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->addKey('status');
        $this->forge->createTable('pages', true);
    }

    public function down()
    {
        $this->forge->dropTable('pages', true);
    }
}
