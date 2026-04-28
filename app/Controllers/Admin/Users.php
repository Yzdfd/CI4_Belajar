<?php
// Arahin ke bagian admin/namespace (folder) admin
namespace App\Controllers\Admin;

// agar inheritance tetap berjalan, panggil base controller
use App\Controllers\BaseController;
class Users extends BaseController
{
    public function index()
    {
        echo "Controller punya etmin";
    }



}