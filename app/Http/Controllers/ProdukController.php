<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Produk;
Use App\Models\category;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $reques)
    {
        $produk = Produk::with('category')->get(); // Memuat produk beserta kategorinya
        return view('backend.produk.index', compact('produk'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = category::get();
        return view('backend.produk.create', $data);
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
    $request->validate([
        'img' => 'required|image|mimes:jpeg,png,jpg,gif', // Menghapus batasan ukuran
        'nama_produk' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        'id_category' => 'required|numeric',
    ]);

    // Membuat instance Produk baru
    $produk = new Produk;

    // Mengisi data lainnya
    $produk->nama_produk = $request->input('nama_produk');
    $produk->deskripsi = $request->input('deskripsi');
    $produk->harga = $request->input('harga');
    $produk->id_category = $request->input('id_category');

    // Menyimpan gambar
    if ($request->hasFile('img')) {
        $img = $request->file('img');
        $imgName = time() . '.' . $img->getClientOriginalExtension(); // Menghasilkan nama file unik
        $img->move(public_path('backend/assets/storage'), $imgName); // Menyimpan gambar di folder public/backend/assets/storage/produk

        // Menyimpan nama gambar ke database
        $produk->img = $imgName; // Pastikan ada kolom 'img' di tabel produk
    }

    // Menyimpan data produk ke database
    $produk->save();

    return redirect('/backend/produk')->with('success', 'Produk berhasil disimpan!');
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
        // Retrieve the product by ID
        $category = Category::all();
        $produk = produk::findOrFail($id);
        
        // Render the edit view with the produk data
        return view('backend.produk.edit', compact('produk','category'));
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
        // Validate the incoming request data
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,jpg,png', // Optional image validation
            'id_category' => 'required|numeric',
        ]);

        // Find the product by ID
        $produk = produk::findOrFail($id);

        // Check if a new image is uploaded
        if ($request->hasFile('img')) {
        $img = $request->file('img');
        $imgName = time() . '.' . $img->getClientOriginalExtension(); // Menghasilkan nama file unik
        $img->move(public_path('backend/assets/storage'), $imgName); // Menyimpan gambar di folder public/img

        // Menyimpan nama gambar ke database
        $produk->img = $imgName; // Pastikan ada kolom 'img' di tabel produk
         }

        // Update produk details
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
    $produk->id_category = $request->input('id_category');

        // Save the updated produk
        $produk->save();

     return redirect('/backend/produk')->with('success', 'Data produk berhasil diperbarui!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::find($id)->delete();
        return redirect('/backend/produk');
    }
}
