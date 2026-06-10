<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 150],
            'category' => ['type' => 'VARCHAR', 'constraint' => 120, 'null' => true],
            'location' => ['type' => 'VARCHAR', 'constraint' => 180, 'null' => true],
            'project_year' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'title_id' => ['type' => 'VARCHAR', 'constraint' => 255],
            'title_en' => ['type' => 'VARCHAR', 'constraint' => 255],
            'summary_id' => ['type' => 'TEXT', 'null' => true],
            'summary_en' => ['type' => 'TEXT', 'null' => true],
            'description_id' => ['type' => 'LONGTEXT', 'null' => true],
            'description_en' => ['type' => 'LONGTEXT', 'null' => true],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'is_featured' => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 0],
            'status' => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'draft'],
            'sort_order' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->addKey(['category', 'status']);
        $this->forge->createTable('projects', true);
    }

    public function down()
    {
        $this->forge->dropTable('projects', true);
    }
}
