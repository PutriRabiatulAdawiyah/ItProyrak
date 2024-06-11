<?php
namespace App\Controllers;

use App\Models\Profil_Model;
use CodeIgniter\Controller;

class Profil extends BaseController
{
    protected $profilModel;

    public function index()
    {
        $model = new Profil_Model();
        return view('backendadmin/profil', ["profil"=> $model->findAll()]);
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
}
