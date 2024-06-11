<?php

namespace App\Controllers;

class Pemesanan extends BaseController
{
    public function index(): string
    {
        return view('backendadmin/pemesanan');
    }
}