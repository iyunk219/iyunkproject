<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    // use\App\Models\Pembeli;
    use App\Models\Produk;
    // use\App\Models\Pemesanan;

class FrontController extends Controller
{

    public function produk()
    {
       $data['produk'] = produk::all(); // Mengambil semua data produk
    return view('produk', $data); // Mengirim data ke view
    }
        public function blog()
    {
       
        return view('blog');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function login()
    {
        return view('index');
    }
}
