<?php

namespace App\Models;

use CodeIgniter\Model;

class LapanganModel extends Model
{
    protected $table = 't_lapangan';  // Table name in the database
    protected $primaryKey = 'id_lapangan';  // Primary key field

    protected $allowedFields = ['nama_lapangan', 'harga_per_jam', 'harga_member'];

    // Get all lapangan or a specific lapangan by id
    public function getLapangan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_lapangan' => $id]);
        }
    }

    // Insert new lapangan
    public function simpanLapangan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    // Update lapangan data
    public function editLapangan($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_lapangan', $id);
        return $builder->update($data);
    }

    // Delete lapangan
    public function hapusLapangan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_lapangan' => $id]);
    }
}

// Model for 't_member' table
class MemberModel extends Model
{
    protected $table = 't_member';
    protected $primaryKey = 'id_member';

    protected $allowedFields = ['id_user', 'tanggal_mulai', 'status', 'bukti_bayar'];

    public function getMember($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_member' => $id]);
        }
    }

    public function simpanMember($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editMember($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_member', $id);
        return $builder->update($data);
    }

    public function hapusMember($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_member' => $id]);
    }
}

// Model for 't_sewa_lapangan' table
class SewaLapanganModel extends Model
{
    protected $table = 't_sewa_lapangan';
    protected $primaryKey = 'id_sewalp';

    protected $allowedFields = ['id_lapangan', 'id_member', 'tanggal', 'lama_sewa', 'harga_main', 'dp'];

    public function getSewaLapangan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_sewalp' => $id]);
        }
    }

    public function simpanSewaLapangan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editSewaLapangan($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_sewalp', $id);
        return $builder->update($data);
    }

    public function hapusSewaLapangan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_sewalp' => $id]);
    }
}
