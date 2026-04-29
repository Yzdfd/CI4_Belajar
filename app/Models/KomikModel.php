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

    
}