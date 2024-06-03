<?php
namespace App\Controllers;

use App\Models\Profil_Model;
use CodeIgniter\Controller;

class Profil extends BaseController
{
    protected $profilModel;

    public function __construct()
    {
        $this->profilModel = new Profil_Model();
    }

    public function index()
    {
        $data['DataProfil'] = $this->profilModel->getProfil();
        return view('backendadmin/profil_view', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'keterangan' => $this->request->getPost('keterangan'),
                'tgl_dibuat' => date('Y-m-d H:i:s'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ];

            if ($this->profilModel->tambahProfil($data)) {
                return redirect()->to(base_url('profil'))->with('status', 'Profil berhasil ditambahkan');
            } else {
                return redirect()->to(base_url('profil'))->with('status', 'Gagal menambahkan profil');
            }
        }
    }

    public function edit($id_profil)
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'keterangan' => $this->request->getPost('keterangan'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ];

            if ($this->profilModel->updateProfil($id_profil, $data)) {
                return redirect()->to(base_url('profil'))->with('status', 'Profil berhasil diubah');
            } else {
                return redirect()->to(base_url('profil'))->with('status', 'Gagal mengubah profil');
            }
        }
    }

    public function hapus($id_profil)
    {
        if ($this->profilModel->hapusProfil($id_profil)) {
            return redirect()->to(base_url('profil'))->with('status', 'Profil berhasil dihapus');
        } else {
            return redirect()->to(base_url('profil'))->with('status', 'Gagal menghapus profil');
        }
    }
}
