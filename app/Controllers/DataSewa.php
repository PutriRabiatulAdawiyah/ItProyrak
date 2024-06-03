<?php

namespace App\Controllers;

class DataSewa extends BaseController
{
    public function index(): string
    {
        return view('backendadmin/datasewa');
    }
}