<?php
namespace App\Controllers;

use App\Models\Profil_Model;
use CodeIgniter\Controller;

class Profil extends BaseController
{
    protected $profilModel;

    // public function __construct()
    // {
    //     $this->profilModel = new Profil_Model();
    // }

    public function index()
    {
        $model = new Profil_Model();
        return view('backendadmin/profil_view', ["profil"=> $model->findAll()]);
    }

    public function tambah()
    {
        $model = new Profil_Model();
        
        // $foto = $this->request->getFile("foto_property");

        // $namaGambar = $foto->getRandomName();
        // $foto->move(FCPATH . "/gambar", $namaGambar);

        $data = [   
            "judul" => $this->request->getVar("judul"), 
            "keterangan" => $this->request->getVar("keterangan"),
            "deskripsi" => $this->request->getVar("deskripsi"),
            "tgl_dibuat" => $this->request->getVar("tgl_dibuat"),
        ];

        $model->insert($data);
        return redirect()->to("/profil");
    }

    public function edit($id_profil)
    {
        $model = new ModelProperty()
        $idprofil = $this->request->getVar("id_profil");

        $data[
            "judul" => $this->request->getVar("judul"), 
            "keterangan" => $this->request->getVar("keterangan"),
            "deskripsi" => $this->request->getVar("deskripsi"),
        ];
        $model->update($idprofil, $data);
        return redirect()->to("/profil")
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
