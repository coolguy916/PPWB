<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

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
        $produk = produk::all();
        $data = array('title' => 'Produk Kami');
        return view('homepage.produk', compact('produk'),$data);
    }

<<<<<<< HEAD
    public function show() {
        $data = array('title' => 'show');
        return view('homepage.show', $data);
    }

    public function keranjang() {
        $data = array('title' => 'keranjang');
        return view('homepage.keranjang', $data);
    }

}
=======
    public function kategori() {
        $produk = produk::all();
        $data = array('title' => 'Kategori');
        return view('homepage.kategori', $data, compact('produk'));
    }

    public function item() {
        $data = array('title' => 'item');
        return view('item.index', $data);
    }

    public function item_content() {
        $data = array('title' => 'item');
        return view('item.content', $data);
    }
}
>>>>>>> 19d6b05f6c1cb6c1f44d5fa6f0d56b76b4380e73
