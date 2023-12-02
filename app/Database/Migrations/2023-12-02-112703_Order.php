<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
                'key' => true, // Define as a key
            ],
            'bioskop_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'film_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'jadwal_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'jumlah_tiket' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'payment_method' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('order_id', true); // Set 'order_id' as the primary key
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
