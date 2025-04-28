<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman utama
    public function index()
    {
        return "Selamat Datang";
    }

    // Method untuk halaman about
    public function about()
    {
        // return "Nama : Izzatir Rofiah <br> NIM : 2341760010";
        return "Nama : Izzatir Rofiah / NIM : 2341760010";

    }

    // Method untuk halaman articles dengan parameter {id}
    public function articles($id)
    {
        return "Halaman Artikel dengan ID " . $id;
    }
}
