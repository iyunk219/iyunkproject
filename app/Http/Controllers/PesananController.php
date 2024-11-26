<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pesanan = Pesanan::with('user', 'produk')->get();
// dd($pesanan);
        return view('backend.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = user::all(); 
        $produk = Produk::all();  

        return view('backend.pesanan.create', compact('user', 'produk')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'produk_id' => 'required|exists:produk,id',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'no_hp' => 'required|string|max:255',
            'qty' => 'required|numeric',
            'total' => 'required|string|max:255',
            'subtotal' => 'required|string|max:255',
            'keranjang_id' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'tgl_pemesanan' => 'required|date',
            'bayar_st' => 'required|string|max:255',
        ]);

        // Simpan data pesanan ke database
        Pesanan::create($validated);

        // Redirect atau return response
        return redirect('/backend/pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
