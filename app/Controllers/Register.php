<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('admin/v_register');
    }

    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'id_user' => $this->request->getPost('id_user'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'nama' => $this->request->getPost('nama'),
            'password' => $this->request->getPost('password'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_member' => $this->request->getPost('jenis_member'),
            'id_role' => $this->request->getPost('id_role')
        ];

        $userModel->insert($data);
        return redirect()->to('/register')->with('success', 'Registrasi berhasil!');
    }
}

?>