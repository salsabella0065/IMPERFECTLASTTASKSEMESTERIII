<?php

namespace App\Controllers;

class LaporanController extends BaseController
{
    public function cetakLaporan()
    {
        $data = [
            'title' => 'Cetak Laporan',
            'page' => 'Laporan',
            'content' => 'v_cetak_laporan'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
