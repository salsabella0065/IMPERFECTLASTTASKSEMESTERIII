<?php

namespace App\Controllers;

class SewaController extends BaseController
{
    public function inputSewa()
    {
        $data = [
            'title' => 'Input Sewa Lapangan',
            'page' => 'Sewa Lapangan',
            'content' => 'sewa/v_input_sewa'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function inputSewaPerlengkapan()
    {
        $data = [
            'title' => 'Input Sewa Perlengkapan',
            'page' => 'Sewa Perlengkapan',
            'content' => 'sewa/v_input_perlengkapan'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
