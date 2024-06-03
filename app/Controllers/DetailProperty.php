<?php

namespace App\Controllers;

class DetailProperty extends BaseController
{
    public function index(): string
    {
        return view('backendadmin/detailproperty');
    }
}