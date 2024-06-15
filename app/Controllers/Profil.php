<?php

namespace App\Controllers;

use App\Models\Profil_Model;
use CodeIgniter\Controller;

class Profil extends BaseController
{
    protected $profilModel;

    public function __construct()
    {
        // Set memory limit di sini jika diperlukan
        ini_set('memory_limit', '1024M');
        
        // Inisialisasi model jika diperlukan
        $this->profilModel = new Profil_Model();
    }

    public function index()
    {
        $data = [
            "profil" => $this->profilModel->findAll()
        ];

        return view('backendadmin/profil', $data);
    }

    public function tambah()
    {
        $model = new Profil_Model();

        $data = [
            "judul" => $this->request->getVar("judul"),
            "keterangan" => $this->request->getVar("keterangan"),
            "deskripsi" => $this->request->getVar("deskripsi"),
            "tgl_dibuat" => $this->request->getVar("tgl_dibuat"),
        ];

        // Upload gambar jika ada
        $data['deskripsi'] = $this->handleUpload('deskripsi');

        $model->insert($data);
        return redirect()->to("/profil")->with('status', 'Profil berhasil ditambahkan');
    }

    public function edit()
    {
        $model = new Profil_Model();
        $idprofil = $this->request->getVar("id_profil");

        $data = [
            "judul" => $this->request->getVar("judul"),
            "keterangan" => $this->request->getVar("keterangan"),
            "deskripsi" => $this->request->getVar("deskripsi"),
        ];

        // Upload gambar jika ada
        $data['deskripsi'] = $this->handleUpload('edit_deskripsi');

        $model->update($idprofil, $data);
        return redirect()->to("/profil")->with('status', 'Profil berhasil diperbarui');
    }

    public function hapus()
    {
        $model = new Profil_Model();
        $idprofil = $this->request->getVar("id_profil");
        $model->delete($idprofil);
        return redirect()->to("/profil")->with('status', 'Profil berhasil dihapus');
    }

    private function handleUpload($inputName)
    {
        if (isset($_FILES[$inputName])) {
            $file = $this->request->getFile($inputName);

            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads', $newName);
                return base_url('uploads/' . $newName);
            }
        }
        return $this->request->getVar($inputName);
    }
}
