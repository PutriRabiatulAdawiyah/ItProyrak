<?php

namespace App\Models;

use CodeIgniter\Model;

class Profil_Model extends Model
{
    protected $table = 'profil'; // Nama tabel yang sebenarnya
    protected $primaryKey = 'id_profil'; // Primary key yang sebenarnya
    protected $allowedFields = ['judul', 'keterangan', 'tgl_dibuat', 'deskripsi']; // Field yang sebenarnya

    public function getProfil()
    {
        return $this->orderBy('tgl_dibuat', 'DESC')->findAll();
    }

    public function tambahProfil($data)
    {
        return $this->tambah($data);
    }

    public function updateProfil($id_profil, $data)
    {
        return $this->edit($id_profil, $data);
    }

    public function hapusProfil($id_profil)
    {
        return $this->hapus($id_profil);
    }
}
