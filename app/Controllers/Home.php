<?php

namespace App\Controllers;
use App\Models\Profil_Model;
class Home extends BaseController
{
    public function index()
    {
        $profilModel = new Profil_Model();
        
        // Mengambil semua data dari tabel profil
        $data['profil'] = $profilModel->findAll();
        
        return view('backendfreeuser/index', $data);
    }
   
}
