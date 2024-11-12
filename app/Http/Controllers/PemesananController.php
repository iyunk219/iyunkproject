<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pembeli;
use App\Models\Produk;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pemesanan'] = Pemesanan::with(['pembeli', 'produk'])->get();
        return view('backend.pemesanan.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          $pembelis = Pembeli::all(); // Mengambil semua data pembeli
        $produks = Produk::all();   // Mengambil semua data produk

        return view('backend.pemesanan.create', compact('pembelis', 'produks')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{// Validasi input
   $request->validate([
    'tgl_pemesanan' => 'required|date',
    'nama_pembeli' => 'required|exists:pembeli,id', // Validasi ID pembeli
    'alamat' => 'required|string|max:255',
    'no_hp' => 'required|string|max:15',
    'nama_produk' => 'required|exists:produk,id', // Validasi ID produk
    'harga' => 'required|numeric',
    'ekspedisi' => 'required|string|max:100',
    'tgl_pengiriman' => 'required|date',
    'status_pengiriman' => 'required|string|max:50',
    'ongkir' => 'required|numeric',
    'ongkos_kirim' => 'required|string|max:255',
    'dibayar' => 'required|numeric',
    'belum_dibayar' => 'required||string|max:255',
    'metode_pembayaran' => 'required|string|max:50',
    'status_pembayaran' => 'required|string|max:50',
    'harga_dikurangi' => 'required|numeric',
]);

// Ambil nama pembeli dan nama produk
$pembeli = Pembeli::find($request->nama_pembeli);
$produk = Produk::find($request->nama_produk);

// Simpan data ke dalam tabel pemesanan
Pemesanan::create([
    'tgl_pemesanan' => $request->tgl_pemesanan,
    'nama_pembeli' => $pembeli->nama_pembeli, // Simpan nama pembeli
    'alamat' => $request->alamat,
    'no_hp' => $request->no_hp,
    'nama_produk' => $produk->nama_produk, // Simpan nama produk
    'harga' => $request->harga,
    'ekspedisi' => $request->ekspedisi,
    'tgl_pengiriman' => $request->tgl_pengiriman,
    'status_pengiriman' => $request->status_pengiriman,
    'ongkos_kirim' => $request->ongkos_kirim,
    'ongkir' => $request->ongkir,
    'dibayar' => $request->dibayar,
    'belum_dibayar' => $request->belum_dibayar,
    'metode_pembayaran' => $request->metode_pembayaran,
    'status_pembayaran' => $request->status_pembayaran,
    'harga_dikurangi' => $request->harga_dikurangi,
]);

return redirect('/backend/pemesanan');
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
    // Mengambil data pemesanan berdasarkan ID
    $pemesanan = Pemesanan::findOrFail($id);
    
    // Mengambil semua pembeli dan produk untuk dropdown
    $pembelis = Pembeli::all();
    $produks = Produk::all();

    // Mengirim data ke view edit
    return view('backend.pemesanan.edit', compact('pemesanan', 'pembelis', 'produks'));
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
        // Validasi input
        $request->validate([
            'tgl_pemesanan' => 'required|date',
            'nama_pembeli' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'ekspedisi' => 'required|string|max:255',
            'tgl_pengiriman' => 'required|date',
            'ongkos_kirim' => 'required|string|max:255',
            'ongkir' => 'required|numeric|min:0',
            'status_pengiriman' => 'required|string|max:50',
            'dibayar' => 'required|numeric|min:0',
            'belum_dibayar' => 'required|string|max:250',
            'metode_pembayaran' => 'required|string|max:50',
            'status_pembayaran' => 'required|string|max:50',
        ]);

        // Mengupdate data pemesanan
        try {
            // Cari pemesanan berdasarkan ID
            $pemesanan = Pemesanan::findOrFail($id);
            
            // Update fields
            $pemesanan->tgl_pemesanan = $request->tgl_pemesanan;
            $pemesanan->nama_pembeli = $request->nama_pembeli;
            $pemesanan->alamat = $request->alamat;
            $pemesanan->no_hp = $request->no_hp;
            $pemesanan->nama_produk = $request->nama_produk;
            $pemesanan->harga = $request->harga;
            $pemesanan->ekspedisi = $request->ekspedisi;
            $pemesanan->tgl_pengiriman = $request->tgl_pengiriman;
            $pemesanan->ongkos_kirim = $request->ongkos_kirim;
            $pemesanan->ongkir = $request->ongkir;
            $pemesanan->status_pengiriman = $request->status_pengiriman;
            $pemesanan->dibayar = $request->dibayar;
            $pemesanan->belum_dibayar = $request->belum_dibayar;
            $pemesanan->metode_pembayaran = $request->metode_pembayaran;
            $pemesanan->status_pembayaran = $request->status_pembayaran;

            // Simpan perubahan ke database
            if ($pemesanan->save()) {
                return redirect('/backend/pemesanan')->with('success', 'Data pemesanan berhasil diperbarui!');
            } else {
                return back()->with('error', 'Tidak ada perubahan yang dilakukan.');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return back()->with('error', 'Data pemesanan tidak ditemukan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: '.$e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = pemesanan::find($id)->delete();
        return redirect('/backend/pemesanan');
    }
}
