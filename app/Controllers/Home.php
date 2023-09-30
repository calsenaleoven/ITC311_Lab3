<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construc()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function index()
    {
        return view('login');
    }
}
