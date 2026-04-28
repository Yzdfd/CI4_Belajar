<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // echo "Nama Saya Adalah: $this->nama";
    }

    // public function coba()
    // {
    //     echo "Hello World";
    // }
}