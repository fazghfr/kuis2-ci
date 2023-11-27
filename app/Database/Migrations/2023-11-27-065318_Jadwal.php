<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'     => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'tanggal-jam'   => ['type' => 'DATETIME'],
            'film_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('film_id', 'film', 'id');
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
