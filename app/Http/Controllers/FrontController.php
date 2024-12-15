<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use\App\Models\Pembeli;
use App\Models\Produk;
use App\Models\category;
use App\Models\DetailPesanan;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $data['cart'] = DetailPesanan::get();
        return view('cart', $data);
    }
    public function checkout()
    {
        $userId = Auth::user()->id; // Ambil ID user yang sedang login

        $data['cart'] = DetailPesanan::where('user_id', $userId)
            ->where('status_checkout', '0') // Tambahkan kondisi status_checkout jika diperlukan
            ->join('produk', 'detail_pesanans.id_produk', '=', 'produk.id')
            ->select('detail_pesanans.*', 'produk.nama_produk', 'produk.harga as harga_produk')
            ->get();
        // dd($data['cart']);
        return view('checkout', $data);
    }
    public function login()
    {
        return view('index');
    }
    public function checkout_store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            // 'produk_id' => 'required|exists:produk,id',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'no_hp' => 'required|string|max:255',
            // 'qty' => 'required|numeric',
            // 'total' => 'required|string|max:255',
            // 'subtotal' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            // 'tgl_pemesanan' => 'required|date',
            // 'bayar_st' => 'required|string|max:255',
        ]);
        // Buat pesanan baru
        $pesanan = Pesanan::create([
            'user_id' => $validated['user_id'],
            'kelurahan' => $validated['kelurahan'],
            'kecamatan' => $validated['kecamatan'],
            'provinsi' => $validated['provinsi'],
            'kabupaten' => $validated['kabupaten'],
            'catatan' => $validated['catatan'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
            'tgl_pemesanan' => date('Y-m-d'),
            'bayar_st' => '0', // Set nilai default 0 jika tidak tersedia
        ]);

        // Update detail pesanan terkait dengan user_id dan status_checkout 0
        DetailPesanan::where('user_id', $validated['user_id'])
            ->where('status_checkout', '0')
            ->update([
                'pesanan_id' => $pesanan->id,
                'status_checkout' => '1',
            ]);
        $totalQty = DetailPesanan::where('pesanan_id', $pesanan->id)
            ->sum('qty');
        $totalHarga = DetailPesanan::where('pesanan_id', $pesanan->id)
            ->join('produk', 'produk.id', '=', 'detail_pesanans.id_produk')
            ->sum(DB::raw('produk.harga * detail_pesanans.qty'));

        // Update pesanan dengan total qty dan total harga
        $pesanan->update([
            'qty' => $totalQty,
            'total' => $totalHarga,
        ]);
        return redirect()->back();
    }

    function ajax_statement($type = null, Request $request)
    {
        if ($type == 'tambah_cart') {
            $id_produk = $request->get('id_produk');
            $user_id = Auth()->User()->id;

            $detailPesanan = DetailPesanan::where('id_produk', $id_produk)
                ->where('user_id', $user_id)
                ->where('status_checkout', '0')
                ->first();
            if (!$detailPesanan) {
                $detailPesanan = DetailPesanan::create([
                    'id_produk' => $id_produk,
                    'user_id' => $user_id,
                    'qty' => 1, // Set qty awal menjadi 1
                    'status_checkout' => '0', // Status checkout default
                ]);
            } else {
                // Jika ditemukan, update qty dengan menambahkan 1
                $detailPesanan->update([
                    'qty' => $detailPesanan->qty + 1
                ]);
            }

            return response()->json([
                'status' => 'success',
                'data' => $detailPesanan
            ]);
        }
        if ($type == 'update-qty') {
            $id = $request->get('id');
            $qty = $request->get('qty');

            $detailPesanan = DetailPesanan::find($id);

            if (!$detailPesanan) {
                return response()->json(['status' => 'error', 'message' => 'Detail pesanan tidak ditemukan.']);
            }

            $detailPesanan->qty = $qty;
            $detailPesanan->save();

            return response()->json(['status' => 'success', 'message' => 'Qty berhasil diperbarui.', 'data' => $detailPesanan]);
        }
        if ($type == 'remove-product-cart') {
            $id = $request->get('id');
            $res =  DetailPesanan::find($id)->delete();

            return response()->json(['status' => 'success', 'message' => 'Berhasil menghapus.', 'data' => $res]);
        }
    }
}
