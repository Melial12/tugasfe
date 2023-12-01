<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'riwayat' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => FALSE,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'constraint' => 100,
                'null' => FALSE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('User');
    }

    public function down()
    {
        $this->forge->dropTable('User');
    }
}
