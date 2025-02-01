<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jamsewa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama_jam' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'jam_awal' => [
                'type' => 'TIME',
            ],
            'jam_akhir' => [
                'type' => 'TIME',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('t_jam_sewa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('t_jam_sewa');
    }
}
