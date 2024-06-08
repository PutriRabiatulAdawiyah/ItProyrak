<?php

namespace App\Controllers;

use App\Models\ModelDetailProperty;
use App\Models\ModelProperty;

class DetailProperty extends BaseController
{
    public function index(): string
    {
        $model = new ModelDetailProperty();
        $modelproperty = new ModelProperty();
        return view('backendadmin/detailproperty', ["detailproperty" => $model->findAll(), "property" => $modelproperty->findAll()]);
    }
    public function hapus()
    {
        $model = new ModelDetailProperty();
        $iddetailproperty = $this->request->getVar("id_detail_property");
        $model->delete($iddetailproperty);
        return redirect()->back();
    }

    public function edit()
    {
        $model = new ModelDetailProperty();
        $idproperty = $this->request->getVar("id_detail_property");
        
        $data = [   
            "nama_detail_property" => $this->request->getVar("nama_detail_property"),
            "foto_detail_property" => $this->request->getVar("foto_detail_property"),
            "id_property" => $this->request->getVar("id_detail_property"),
            "deskripsi_detail_property" => $this->request->getVar("deskripsi_detail_property"),
        ];

        $model->update($iddetailproperty, $data);
        return redirect()->back();
    }
    public function tambah()
    {
        $model = new ModelDetailProperty();

        $foto = $this->request->getFile("foto_detail_property");

         $namaGambar =$foto->getRandomName();
         $foto->move(FCPATH . "/gambar, $namaGambar");
        
        $data = [   
            "nama_detail_property" => $this->request->getVar("nama_detail_property"),
            "foto_detail_property" => $this->request->getVar("foto_detail_property"),
            "id_property" => $this->request->getVar("id_property"),
            "deskripsi_detail_property" => $this->request->getVar("deskripsi_detail_property"),
            "foto_detail_property" => $namaGambar,
        ];

        $model->insert($data);
        return redirect()->to("/detailproperty");
    }


}