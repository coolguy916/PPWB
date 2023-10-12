<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\negara;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about()
    {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak()
    {
        $data = array('title' => 'Kontak Kami');
        return view('homepage.kontak', $data);
    }

    public function produk()
    {
        $produk = produk::all();
        $data = array('title' => 'Produk Kami');
        return view('homepage.produk', compact('produk'), $data);
    }

    public function kategori()
    {
        // Get the ID of the country "Indonesia"
        $indonesiaId = negara::where('negara_name', 'Indonesia')->pluck('id')->first();
        $amerikaId = negara::where('negara_name', 'USA')->pluck('id')->first();

        // Fetch products specific to the country "Indonesia"
        $produk_indonesia = produk::where('negara_id', $indonesiaId)->paginate(8);
        $america_product = produk::where('negara_id', $amerikaId)->paginate(8);
        $data = array('title' => 'Kategori');

        // Pass the data to the view
        return view('homepage.kategori', compact('produk_indonesia', 'america_product','data'));
    }

    public function item()
    {
        $data = array('title' => 'item');
        return view('item.index', $data);
    }

    public function item_content()
    {
        $data = array('title' => 'item');
        return view('item.content', $data);
    }
    public function keranjang() {
        $data = array('title' => 'keranjang');
        return view('homepage.keranjang', $data);
    }

}
