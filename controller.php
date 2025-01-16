<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function home() {
        return "Selamat datang di lama home saya";
    }
    public function about() {
        return "Ini adalah halaman about us";
    }
}
