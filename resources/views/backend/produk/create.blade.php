@extends('backend.template.main')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table style="width: 100%; height: 100vh; text-align: center;">
    <tr>
        <td>
            <div style="display: inline-block; text-align: left; border: 1px solid #ccc; border-radius: 8px; padding: 20px; background-color: #f9f9f9;">
                <h2 style="text-align: center;">Tambah Data Produk</h2>
                <form action="{{url('/backend/produk/store')}}" method="post" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    <div style="margin-bottom: 15px;">
                        <label for="product-name">Nama Produk:</label><br>
                        <input type="text" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk.." required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="product-price">Harga:</label><br>
                        <input type="number" id="harga" name="harga" placeholder="Masukkan Harga.." required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="product-price">Category:</label><br>
                        <select class="form-control" name="id_category">
                            @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="product-description">Deskripsi:</label><br>
                        <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Produk.." rows="4" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;"></textarea>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="product-image">Gambar Produk:</label><br>
                        <input type="file" id="img" name="img" enctype="multipart/form-data" accept=".jpg,.jpeg,.png" required style="padding: 5px;">
                        <span style="font-size: small;">Silakan unggah gambar produk (format .jpg, .jpeg, .png)</span><br><br>
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
                        <button type="reset" style="background-color: #dc3545; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Reset</button>
                    </div>
                </form>
            </div>
        </td>
    </tr>
</table>

@endsection