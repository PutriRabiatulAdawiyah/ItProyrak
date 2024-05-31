<?php

namespace App\Models;

use CodeIgniter\Model;

class Profil_Model extends Model
{
    protected $table = 'profil'; // Ganti dengan nama tabel yang sebenarnya
    protected $primaryKey = 'id_profil'; // Ganti dengan primary key yang sebenarnya
    protected $allowedFields = ['judul', 'keterangan', 'tgl_dibuat', 'deskripsi']; // Ganti dengan field yang sebenarnya

    public function getProfil()
    {
        return $this->orderBy('tgl_dibuat', 'DESC')->findAll();
    }

    public function tambahProfil($data)
    {
        return $this->insert($data);
    }

    public function updateProfil($id, $data)
    {
        return $this->update($id, $data);
    }

    public function hapusProfil($id)
    {
        return $this->delete($id);
    }
}
