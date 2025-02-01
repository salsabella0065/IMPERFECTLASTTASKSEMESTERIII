<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sewalapangan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sewalp' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'tipe' => [
                'type'       => 'ENUM',
                'constraint' => ['booking', 'walk-in'],
                'default'    => 'booking',
            ],
            'id_member' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'nama_penyewa' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_lapangan' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'lama_sewa' => [
                'type'       => 'INT',
                'constraint' => 3,
            ],
            'harga_main' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'dp' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true,
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'confirmed', 'completed', 'cancelled'],
                'default'    => 'pending',
            ],
            'bukti_bayar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id_sewalp', true);
        $this->forge->createTable('t_sewa_lapangan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('t_sewa_lapangan');
    }
}
