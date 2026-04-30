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

        // Jika Komik tidak ada
        if(empty($data["komik"])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul Komik $slug tidak ditemukan");
        }

        return view('komik/detail', $data);
    }

    // Method untuk menampilkan form tambah data

    public function create()
    {
        $data = [
            'tittle' => 'Form Tambah Data Komik | Ea'
        ];
        return view('komik/create', $data);
    }


    // Berfyungsi untuk mengelola data dari method create untuk di insert kedalam tabel
    public function save()
    {
        // getvar untuk ngambil apapun, baik get ataupun post
        // dd($this->request->getVar());
        // $this->request->getVar();

        // untuk buat string jadi huruf kecil semua, spasi jadi strip, dan aman untuk url
        $slug = url_title($this->request->getVar('judul'), '-', true);
        
        // cara inserrt keddatabase pakai model
        $this->komikModel->save([
            'judul_komik' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        // Buat bikin flash data
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        // Buat balikin ke halaman komik setelah data berhasil disimpan
        return redirect()->to('/komik');
        // dd($this->request->getVar());
        // $this->komikModel->save([
        //     'judul_komik' => $this->request->getVar('judul'),
        //     'penulis' => $this->request->getVar('penulis'),
        //     'penerbit' => $this->request->getVar('penerbit'),
        //     'sampul' => $this->request->getVar('sampul')
        // ]);

        // return redirect()->to('/komik');
    }
}