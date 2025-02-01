<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sewaperlengkapan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sewap' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'penyewa_perlengkapan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga_sewa' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'id_perlengkapan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'perlengkapan' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'returned'],
                'default'    => 'pending',
            ],
            'lama_pakai' => [
                'type'       => 'INT',
                'constraint' => 3,
            ],
        ]);

        $this->forge->addKey('id_sewap', true);
        $this->forge->createTable('t_sewa_perlengkapan');

    }

    public function down()
    {
        //
        $this->forge->dropTable('t_sewa_perlengkapan');

    }
}
