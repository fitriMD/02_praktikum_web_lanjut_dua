<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }
    public function about() {
        return "1941720016 - Fitri Mutiara Devi";
    }
    public function artikel($id) {
        return 'Halaman Artikel ' .$id;
    }
}
