<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pemesanan;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $bulan = $request->input('bulan'); // Mengambil bulan dari query string
        $pemesanan = Pemesanan::whereMonth('tgl_pemesanan', $bulan)->get(); // Mengambil pemesanan berdasarkan bulan

        return view('backend.laporan.index', compact('pemesanan', 'bulan')); 
    }
    
    public function cetak(Request $request)
{
    $bulan = $request->query('bulan');

    // Mengambil pemesanan berdasarkan bulan
    $pemesanan = Pemesanan::whereMonth('tgl_pemesanan', $bulan)->get();

    // Menghitung total
    $totalHarga = $pemesanan->sum('harga');
    $totalDibayar = $pemesanan->sum('dibayar');

    // Menghitung total belum dibayar dengan memfilter nilai numerik
    $totalBelumDibayar = $pemesanan->filter(function($item) {
        return is_numeric($item->belum_dibayar);
    })->sum(function($item) {
        return (float)$item->belum_dibayar; // Konversi ke float untuk presisi
    });

    $totalOngkir = $pemesanan->sum('ongkir');
    $totalHargaDikurangiOngkir = $totalHarga - $totalOngkir;

    // Kirim ke view
    return view('backend.laporan.cetak', compact('pemesanan', 'totalHarga', 'totalDibayar', 'totalBelumDibayar', 'totalOngkir', 'totalHargaDikurangiOngkir'));
}
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
