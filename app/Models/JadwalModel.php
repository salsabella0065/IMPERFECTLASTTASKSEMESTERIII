<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 't_lapangan'; // Nama tabel sesuai dengan yang ada di database Anda
    protected $primaryKey = 'id_lapangan'; // Gantilah sesuai dengan primary key tabel Anda

    protected $allowedFields = ['nama_lapangan', 'tanggal', 'waktu', 'status']; // Kolom yang bisa diisi

    // Method untuk mengambil data jadwal
    public function getJadwal($id = false)
    {
        if ($id === false) {
            return $this->findAll(); // Ambil semua data jika id tidak diberikan
        } else {
            return $this->getWhere(['id_lapangan' => $id]); // Ambil data berdasarkan id jika diberikan
        }
    }

    // Method untuk menyimpan data jadwal
    public function simpanJadwal($data)
    {
        return $this->insert($data); // Menyimpan data ke dalam tabel jadwal
    }

    // Method untuk mengupdate data jadwal
    public function updateJadwal($data, $id)
    {
        return $this->update($id, $data); // Mengupdate data berdasarkan id
    }

    // Method untuk menghapus data jadwal
    public function hapusJadwal($id)
    {
        return $this->delete($id); // Menghapus data berdasarkan id
    }
}
