<?php

namespace App\Controllers;

use App\Models\Profil_Model;

class Profil extends BaseController
{
    protected $mprofil;

    public function __construct()
    {
        $this->mprofil = new Profil_Model();
    }

    public function index()
    {
        $getprofil = $this->mprofil->getProfil();
        $profi = [
            'DataProfil' => $getprofil,
        ];

        return view('backendadmin/profil_view', $profi);
    }

    public function tambah()
    {
        // Tangkap data dari form
        $data = [
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
            'tgl_dibuat' => date('Y-m-d H:i:s'), // Tanggal dibuat saat ini
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        // Panggil fungsi tambahProfil dari model
        $this->mprofil->tambahProfil($data);

        // Redirect ke halaman utama setelah selesai
        return redirect()->to(base_url('profil'));
    }

    public function edit($id)
    {
        // Tangkap data dari form
        $data = [
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        // Panggil fungsi updateProfil dari model
        $this->mprofil->updateProfil($id, $data);

        // Redirect ke halaman utama setelah selesai
        return redirect()->to(base_url('profil'));
    }

    public function hapus($id)
    {
        // Panggil fungsi hapusProfil dari model
        $this->mprofil->hapusProfil($id);

        // Redirect ke halaman utama setelah selesai
        return redirect()->to(base_url('profil'));
    }
}
