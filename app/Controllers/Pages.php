<?php

// Route untuk menangani page statis
namespace App\Controllers;

// ini class
class Pages extends BaseController
{
    // Ini Method
    public function index()
    {
        // Diletakkan dalam folder Views/pages/home.php, agar lebih rapih. Biasanya nama folder sama dengan controllernya
        // Array untuk menyimpan data yang akan digunakan di view
        $data = [
            'tittle' => 'Home | Ea',
            'tes' => ["satu", "dua", "tiga"]
        ];
        // Tambahkan $data disini untuk mengirimkan datanya
        echo view('pages/home', $data);
    }
    public function about()
    {
        // Salah satu cara layouting dengan menggunakan echo
        $data = [
            'tittle' => 'About | Ea'
        ];
        echo view('pages/about', $data);

    }

    public function contact()
    {
        $data=[
            'tittle' => 'Contact | Ea',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'jalan' => 'Jl. Raya No. 123',
                    'kota' => 'Jakarta',
                    'negara' => 'Indonesia'
                ],
                [
                    'tipe' => 'Kantor',
                    'jalan' => 'Jl. Merdeka No. 456',
                    'kota' => 'Bandung',
                    'negara' => 'Indonesia'
                ]

            ]
        ];
        return view('pages/contact', $data);
    }

}