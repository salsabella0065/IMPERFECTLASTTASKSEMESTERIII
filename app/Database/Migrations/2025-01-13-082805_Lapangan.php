<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lapangan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_lapangan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama_lapangan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga_per_jam' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'harga_member' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);

        $this->forge->addKey('id_lapangan', true);
        $this->forge->createTable('t_lapangan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('t_lapangan');
    }
}
