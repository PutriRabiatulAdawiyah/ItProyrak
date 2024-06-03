<?php

namespace App\Controllers;

class HomeAdmin extends BaseController
{
    public function index(): string
    {
        return view('backendadmin/homeadmin');
    }
}