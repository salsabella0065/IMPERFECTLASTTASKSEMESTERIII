<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jamsewalapangan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_jamsewa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_sewa' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_jam' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ]
        ]);

        $this->forge->addKey('id_jamsewa', true);
        $this->forge->createTable('t_jam_sewa_lapangan');

    }

    public function down()
    {
        //
        $this->forge->dropTable('t_jam_sewa_lapangan');

    }
}
