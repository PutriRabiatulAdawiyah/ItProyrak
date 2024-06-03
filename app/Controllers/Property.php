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
        return redirect()->back();
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
        return redirect()->back();
    }


}