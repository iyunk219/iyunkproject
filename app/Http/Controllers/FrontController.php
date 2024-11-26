<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use\App\Models\Pembeli;
use App\Models\Produk;
use App\Models\category;
use App\Models\pesanan;
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
    public function submit(Request $request)
{
    try {
        // Validasi input data
        $validatedData = $request->validate([
            'alamat' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'catatan' => 'nullable|string', // Catatan bisa kosong
        ]);

        // Simpan data ke tabel pesanan
        $data = new Pesanan();
        
        // Isi data dari validatedData
        $data->fill($validatedData);

        // Simpan user ID jika sudah login atau autentikasi lainnya
        if ($request->session()->has('user')) {
            $userData = $request->session()->get('user');
            $data->user_id = $userData['id']; // Pastikan user_id diisi
            $data->name = $userData['name']; 
            $data->email = $userData['email']; 
        } else {
            return response()->json(['message' => 'User not authenticated'], 403);
        }

        // Simpan no_hp dari validated data
        $data->no_hp = $validatedData['no_hp']; 

        // Save record into DB
        if (!$data->save()) {
            return response()->json(['message' => 'Failed to save data'], 500);
        }

        return response()->json(['message' => 'Success'], 200);

    } catch (\Illuminate\Validation\ValidationException $e) {
        logger()->error($e->getMessage());
        
        return response()->json(['message' => 'Failed', 'errors' => $e->errors()], 422);
    } catch (\Exception $e) {
        logger()->error($e->getMessage());
        return response()->json(['message' => 'Failed', 'error' => $e->getMessage()], 400);
    }
}
}
