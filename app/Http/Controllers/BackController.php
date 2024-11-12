<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Pembeli;
use App\Models\Produk;
use App\Models\Pemesanan;

class BackController extends Controller
{
    public function backend_home()
    {
        $data['admin'] = admin::count();
        $data['pembeli'] = pembeli::count();
        $data['produk'] = produk::count();
        $data['pemesanan'] = pemesanan::count();
        return view('backend.index',$data);
    }
}