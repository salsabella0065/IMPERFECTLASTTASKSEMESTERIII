<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $sesi = session();
        // $sesi->userdata('user');
        $data = [
            'title' => 'Dasboard',
            'page' => 'Dasboard',
            'content' => 'admin/v_dashboard',
            'sesi' => $sesi->get('username'),
            'idrole' => $sesi->get('idrole'),
        ];
        echo view('admin/v_dashboard', $data);
    }
}

