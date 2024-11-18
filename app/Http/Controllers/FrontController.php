<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    // use\App\Models\Pembeli;
    use App\Models\Produk;
    use App\Models\category;
    // use\App\Models\Pemesanan;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    public function produk(Request $request)
    {
        // dd($request->all());
        $kategori = $request->get('kategori');
        $cek_kategori = category::find($kategori);
        if ($cek_kategori == '') {
            $data['produk'] = produk::whereIn('id', function ($query) {
        $query->select(DB::raw('MAX(id)'))
              ->from('produk')
              ->groupBy('id_category');
    })
    ->orderBy('id', 'desc')
    ->paginate(10);

        } else {
            $data['produk'] = produk::where('id_category', '=', $kategori)
                ->paginate(10);
        }
        $data['kategori'] = $kategori;
       // $data['produk'] = produk::all(); // Mengambil semua data produk
       $data['category'] = category::all(); 
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
