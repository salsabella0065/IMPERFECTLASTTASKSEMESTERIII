<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Ensure this matches the table name in your database
    protected $primaryKey = 'id_user'; // Primary key of the table
    protected $allowedFields = ['id_user', 'username', 'nama', 'password', 'email', 'no_hp', 'alamat', 'jenis_member', 'id_role']; // Fields allowed to be inserted or updated

    // **Disable timestamps if not using created_at and updated_at columns**
    protected $useTimestamps = false;

 // Define the simpanuser method
 public function simpanuser($data)
 {
     return $this->insert($data); // Use the insert method to save the user data
 }
  // Method get_data untuk mengambil semua data pengguna
  public function get_data()
  {
      return $this->findAll(); // Mengambil semua data dari tabel 'users'
  }

}




