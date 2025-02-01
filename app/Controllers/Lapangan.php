<?php

namespace App\Controllers;

use App\Models\LapanganModel;
use CodeIgniter\Controller;

class Lapangan extends Controller
{
    public function index()
    {
        $model = new LapanganModel();
        $data = [
            'title' => 'Daftar Lapangan',
            'page' => 'Lapangan',
            'content' => 'admin/lapangan/v_lapangan',
            'lapangan' => $model->findAll(),
            'sesi' => session()->get('username'),
            'idrole' => session()->get('idrole'),
        ];
        return view('layout/v_wrapper', $data);
    }

    public function store()
    {
        $model = new LapanganModel();
        $data = [
            'nama_lapangan' => $this->request->getPost('nama_lapangan'),
            'harga_per_jam' => $this->request->getPost('harga_per_jam'),
            'harga_member' => $this->request->getPost('harga_member'),
        ];
        $model->insert($data);

        session()->setFlashdata('success', 'Lapangan berhasil ditambahkan.');
        return redirect()->to('/lapangan');
    }

    public function edit($id)
    {
        $model = new LapanganModel();
        $lapanganEdit = $model->find($id);

        if ($lapanganEdit) {
            $data = [
                'title' => 'Edit Lapangan',
                'page' => 'Lapangan',
                'content' => 'admin/lapangan/edit_l',
                'lapanganEdit' => $lapanganEdit,
                'sesi' => session()->get('username'),
                'idrole' => session()->get('idrole'),
            ];
            return view('layout/v_wrapper', $data);
        } else {
            session()->setFlashdata('error', 'Lapangan tidak ditemukan.');
            return redirect()->to('/lapangan');
        }
    }

    public function update()
    {
        $model = new LapanganModel();
        $id = $this->request->getPost('id_lapangan');
        $data = [
            'nama_lapangan' => $this->request->getPost('nama_lapangan'),
            'harga_per_jam' => $this->request->getPost('harga_per_jam'),
            'harga_member' => $this->request->getPost('harga_member'),
        ];
        $model->update($id, $data);

        session()->setFlashdata('success', 'Lapangan berhasil diperbarui.');
        return redirect()->to('/lapangan');
    }

    public function delete($id)
    {
        $model = new LapanganModel();
        $lapangan = $model->find($id);

        if ($lapangan) {
            $model->delete($id);
            session()->setFlashdata('success', 'Lapangan berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Lapangan tidak ditemukan.');
        }

        return redirect()->to('/lapangan');
    }
}
?>

