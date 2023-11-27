<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_Bioskop extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'     => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama'   => ['type' => 'VARCHAR', 'constraint' => 255],
            'lokasi' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('bioskop');
    }

    public function down()
    {
        $this->forge->dropTable('bioskop');
    }
}
