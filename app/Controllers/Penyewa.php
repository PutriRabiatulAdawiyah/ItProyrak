<?php

namespace App\Controllers;
use App\Models\Modelpenyewa;

class Penyewa extends BaseController
{
    public function index(): string
    {
        $model = new Modelpenyewa();
        return view('backendadmin/penyewa', ["penyewa" => $model->join("property", "penyewa.id_property=property.id_property")-> findAll()]);
    }

    public function hapus()
    {
        $idpenyewa = $this->request->getVar("id_penyewa");
        $model = new Modelpenyewa();
        $model->delete($idpenyewa);
        return redirect()->back();
    }
    public function edit()
    {
        $model = new Modelpenyewa();
        $idpenyewa = $this->request->getVar("id_penyewa");

        $data= [
            "nama_penyewa" => $this->request->getvar("nama_penyewa"),
            // "nama_property" => $this->request->getvar("nama_property"),
            "batas_sewa" => $this->request->getvar("batas_sewa"),
        ];
        $model->update($idpenyewa, $data);
        return redirect()->back();
    }
}