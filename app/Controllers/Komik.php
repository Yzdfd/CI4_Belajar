<?php

namespace App\Controllers;

class Komik extends BaseController
{
// biar modelnya bisa dipake di semua method
    protected $komikModel;
    public function __construct()
    {
        // inisiasi model
        $this->komikModel = new \App\Models\KomikModel();
    }
    public function index()
    {
        // $komik= $this->komikModel->findAll();
        $data = [
            'tittle' => 'Daftar Komik | Ea', 
            'komik' => $this->komikModel->getKomik()
        ];

        // Cara koneksi database tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // dd($komik);
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }
        
        // inisiasi model
        // $komikModel = new \App\Models\KomikModel();
        // dd($komik);
        
        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        // $komik = $this -> komikModel ->getKomik($slug);
        $data = [
            'tittle' => 'Detail Komik | Ea',
            'komik' => $this -> komikModel ->getKomik($slug)
        ];

        return view('komik/detail', $data);
    }

}