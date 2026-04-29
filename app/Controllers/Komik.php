<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Daftar Komik | Ea'
        ];
        return view('komik/index', $data);
    }

}