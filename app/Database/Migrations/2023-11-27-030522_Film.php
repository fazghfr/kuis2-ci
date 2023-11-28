<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_Film extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT'],
            'rating'      => ['type' => 'FLOAT'],
            'picture_url' =>	['type' => 'VARCHAR', 'constraint' => 1024],
            'bioskop_id'  => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('bioskop_id', 'bioskop', 'id');
        $this->forge->createTable('film');
    }

    public function down()
    {
        $this->forge->dropTable('film');
    }
}
