<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perlengkapan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_perlengkapan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama_perlengkapan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'keterangan' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id_perlengkapan', true);
        $this->forge->createTable('t_perlengkapan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('t_perlengkapan');

    }
}
