<?php

namespace App\Controllers;

use App\Models\ModelProperty;

class Property extends BaseController
{
    public function index(): string
    {
        $model = new ModelProperty();
        return view('backendadmin/property', ["property" => $model->findAll()]);
    }
    public function hapus()
    {
        $model = new ModelProperty();
        $idproperty = $this->request->getVar("id_property");
        $model->delete($idproperty);
        return redirect()->to("/property");
    }

    public function edit()
    {
        $model = new ModelProperty();
        $idproperty = $this->request->getVar("id_property");
        
        $data = [   
            "nama_property" => $this->request->getVar("nama_property"),
            "harga_property" => $this->request->getVar("harga_property"),
            "status_property" => $this->request->getVar("status_property"),
        ];

        $model->update($idproperty, $data);
        return redirect()->to("/property");
    }

    public function tambah()
    {
        $model = new ModelProperty();
        
        $foto = $this->request->getFile("foto_property");

        $namaGambar = $foto->getRandomName();
        $foto->move(FCPATH . "/gambar", $namaGambar);

        $data = [   
            "nama_property" => $this->request->getVar("nama_property"), 
            "harga_property" => $this->request->getVar("harga_property"),
            "status_property" => $this->request->getVar("status_property"),
            "foto_property" => $namaGambar,
        ];

        $model->insert($data);
        return redirect()->to("/property");
    }


}