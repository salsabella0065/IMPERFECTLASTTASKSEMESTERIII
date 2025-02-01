<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('admin/v_login');
    }

    public function cek_login()
    {

        $user = new UserModel();

        $username = $this->request->getPost('inputUsername');
        $password = $this->request->getPost('inputPassword');

        $cek = $user->get_data($username, $password);

        if ((isset($cek['username']) == $username) && (isset($cek['password']) == $password)) {
            session()->set('username', $cek['username']);
            session()->set('idrole', $cek['id_role']);
            return redirect()->to(base_url('dashboard'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}

class Register extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }



    public function register()
    {
        // Validasi form register
        $validation = $this->validate([
            'username' => 'required|alpha_numeric|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'matches[password]'
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Hash password
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Simpan ke database
        $this->userModel->save([
            'username' => $this->request->getPost('username'),
            'password' => $hashedPassword
        ]);

        // Redirect ke halaman login
        return redirect()->to('/v_login')->with('success', 'Registrasi berhasil, silakan login!');
    }
}
