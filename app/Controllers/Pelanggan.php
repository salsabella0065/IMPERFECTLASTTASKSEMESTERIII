<?php

namespace App\Controllers;

class PelangganController extends BaseController
{
    public function inputPelanggan()
    {
        $data = [
            'title' => 'Input Pelanggan',
            'page' => 'Pelanggan',
            'content' => 'pelanggan/v_input_pelanggan'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
