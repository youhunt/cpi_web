<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 150],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 255],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 255],
            'summary_id' => ['type' => 'TEXT', 'null' => true],
            'summary_en' => ['type' => 'TEXT', 'null' => true],
            'content_id' => ['type' => 'LONGTEXT', 'null' => true],
            'content_en' => ['type' => 'LONGTEXT', 'null' => true],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'draft'],
            'published_at' => ['type' => 'DATETIME', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->addKey(['status', 'published_at']);
        $this->forge->createTable('news', true);
    }

    public function down()
    {
        $this->forge->dropTable('news', true);
    }
}
