<?php

namespace App\Controllers;

class Jadwal extends BaseController
{
    public function cekJadwal()
    {
        $data = [
            'title' => 'Cek Jadwal',
            'page' => 'Jadwal',
            'content' => 'admin/v_Jadwal'
        ];   
    }
    public function inputjadwal()
    {
        $model = new ModelsJadwal;
        $data = array(
            // 'id' => $this->request->getPost('id'),
            'nama_jadwal' => $this->request->getPost('namaJadwal'),
        );
        $model->simpanjadwal($data);

        $data = [
            'title' => 'Daftar Jadwal',
            'page' => 'Jadwal',
            'content' => 'admin/v_jadwal',
            'jadwal' => $model->getjadwal(),
            'sesi' => session()->get('username'),
            'idrole' => session()->get('idrole'),
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function edit($id)
    {
        $model = new ModelsJadwal();
        $jadwaledit = $model->getJadwal($id)->getRow();

        if (isset($jadwaledit)) {
            $data = [
                'title' => 'Edit Jadwal',
                'page' => 'Jadwal',
                'content' => 'admin/v_jadwal/',
                'jadwaledit' => $jadwaledit,
                'sesi' => session()->get('username'),
                'idrole' => session()->get('idrole'),
            ];
            echo view('layout/v_wrapper', $data);
        } else {
            $data = [
                'title' => 'Daftar Jadwal',
                'page' => 'Jadwal',
                'content' => 'admin/v_jadwal',
                'jadwaledit' => $jadwaledit,
                'sesi' => session()->get('username'),
            ];
            echo view('layout/v_wrapper', $data);
        }
    }

    public function update()
    {
        $model = new ModelsJadwal();
        $id = $this->request->getPost('idjadwal');
        $data = array(
            'nama_jadwal' => $this->request->getPost('namajadwal'),
        );
        $model->editjadwal($data, $id);
        echo '<script>
                alert("Sukses Edit Data Jadwal");
                window.location="' . base_url('jadwal') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new ModelsJadwal();
        $getjadwal = $model->getJadwal($id)->getRow();
        if (isset($getjadwal)) {
            $model->hapusjadwal($id);
            echo '<script>
                    alert("Hapus Data Jadwal Sukses");
                    window.location="' . base_url('jadwal') . '"
                </script>';
        } else {
            echo '<script>
                    alert("Hapus Gagal !, ID jadwal ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('jadwal') . '"
                </script>';
        }
    }
}


