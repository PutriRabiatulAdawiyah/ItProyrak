<?php

namespace App\Controllers;

use App\Models\ModelDetailProperty;
use App\Models\ModelProperty;

class DetailProperty extends BaseController
{
    public function index(): string
    {
        $model = new ModelDetailProperty();
        return view('backendadmin/detailproperty', ["detailproperty" => $model->findAll()]);
    }

    public function hapus()
    {
        $model = new ModelDetailProperty();
        $id_detail_property = $this->request->getVar("id_detail_property");
        $model->delete($id_detail_property);
        return redirect()->to("/detailproperty");
    }

    public function edit()
    {
        $model = new ModelDetailProperty();
        $id_detail_property = $this->request->getVar("id_detail_property");

        $foto = $this->request->getFile("foto_detail_property");
        if ($foto->isValid() && !$foto->hasMoved()) {
            $namaGambar = $foto->getRandomName();
            $foto->move(FCPATH . 'gambar', $namaGambar);
            $data['foto_detail_property'] = $namaGambar;
        }

        $data = [
            "nama_detail_property" => $this->request->getVar("nama_detail_property"),
            "deskripsi_detail_property" => $this->request->getVar("deskripsi_detail_property"),
        ];

        $model->update($id_detail_property, $data);
        return redirect()->to("/detailproperty");
    }

    public function tambah()
    {
        $model = new ModelDetailProperty();

        $foto = $this->request->getFile("foto_detail_property");
        if ($foto->isValid() && !$foto->hasMoved()) {
            $namaGambar = $foto->getRandomName();
            $foto->move(FCPATH . 'gambar', $namaGambar);
        } else {
            $namaGambar = null;
        }

        $data = [
            "nama_detail_property" => $this->request->getVar("nama_detail_property"),
            "foto_detail_property" => $namaGambar,
            "id_property" => $this->request->getVar("id_property"),
            "deskripsi_detail_property" => $this->request->getVar("deskripsi_detail_property"),
        ];

        $model->insert($data);
        return redirect()->to("/detailproperty");
    }
}