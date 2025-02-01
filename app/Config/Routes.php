<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman Utama
$routes->get('/', 'Home::index');

//dashboard
$routes->get('dashboard', 'Home::index');

// Registrasi
$routes->get('register', 'Register::index'); // Form registrasi
$routes->post('register/store', 'Register::store'); // Proses registrasi

// Login dan Logout
$routes->get('login', 'Login::index'); // Halaman login
$routes->post('login/cek_login', 'Login::cek_login'); // Proses login
$routes->get('logout', 'Login::logout'); // Proses logout

$routes->post('/dashboard_alogin/cek_login', 'Lapangan::index');


// Cek Jadwal
$routes->get('jadwal', 'Jadwal::cekJadwal'); // Halaman jadwal
$routes->post('jadwal/cek', 'Jadwal::cek'); // Proses cek jadwal

// Booking
$routes->get('booking', 'Booking::index'); // Form booking
$routes->post('booking/input', 'Booking::input'); // Proses input booking
$routes->get('booking/member', 'Booking::cekMember'); // Cek booking member
$routes->get('booking/nonmember', 'Booking::cekNonMember'); // Cek booking non-member

// Input Data
$routes->get('input/pelanggan', 'Pelanggan::index'); // Form input pelanggan
$routes->post('input/pelanggan', 'Pelanggan::proses'); // Proses input pelanggan
$routes->get('input/lapangan', 'Lapangan::index'); // Form input lapangan
$routes->post('input/lapangan', 'Lapangan::proses'); // Proses input lapangan
$routes->get('input/sewa', 'Sewa::index'); // Form input sewa
$routes->post('input/sewa', 'Sewa::proses'); // Proses input sewa
$routes->get('input/perlengkapan', 'Perlengkapan::index'); // Form input sewa perlengkapan
$routes->post('input/perlengkapan', 'Perlengkapan::proses'); // Proses input perlengkapan

// Cetak Laporan
$routes->get('laporan', 'Laporan::index'); // Halaman cetak laporan
$routes->post('laporan/cetak', 'Laporan::cetak'); // Proses cetak laporan

// Admin dan Pimpinan
$routes->get('admin', 'Admin::index'); // Dashboard admin
$routes->get('pimpinan', 'Pimpinan::index'); // Dashboard pimpinan

// CRUD Kategori (Contoh CRUD)
$routes->get('kategori', 'Kategori::index'); // List kategori
$routes->post('inputkategori', 'Kategori::inputkategori'); // Input kategori
$routes->get('kategori/edit/(:any)', 'Kategori::edit/$1'); // Edit kategori
$routes->post('kategoriupdate', 'Kategori::update'); // Update kategori
$routes->get('kategori/hapus/(:any)', 'Kategori::hapus/$1'); // Hapus kategori