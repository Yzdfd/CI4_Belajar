<?php

namespace App\Models;

use CodeIgniter\Model;

// Nama kelas sesuai nama file
class KomikModel extends Model
{
    // buat ngasih tau nama table pada model ini apa
    protected $table = 'komik';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    // Buat ngasih tau field apa aja yang boleh diisi, biar aman
    protected $allowedFields = ['judul_komik', 'slug', 'penulis', 'penerbit', 'sampul'];


    // buat ambil data berdasarkan slug nya, slug bisa diganti id
    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    
}