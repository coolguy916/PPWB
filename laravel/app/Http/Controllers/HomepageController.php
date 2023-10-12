<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak() {
        $data = array('title' => 'Kontak Kami');
        return view('homepage.kontak', $data);
    }

    public function produk() {
        $data = array('title' => 'Produk Kami');
        return view('homepage.produk', $data);
    }

    public function show() {
        $data = array('title' => 'show');
        return view('homepage.show', $data);
    }

    public function keranjang() {
        $data = array('title' => 'keranjang');
        return view('homepage.keranjang', $data);
    }

}