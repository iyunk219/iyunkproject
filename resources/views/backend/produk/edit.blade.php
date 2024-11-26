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
                <h2 style="text-align: center;">Edit Data Produk</h2>
                <form action="{{url('/backend/produk/update/'.$produk->id)}}" method="POST" enctype="multipart/form-data">
                {{@csrf_field()}}
                @method('PUT')
                    <div style="margin-bottom: 15px;">
                        <label for="produk-name">Nama Produk:</label><br>
                        <input type="text" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" placeholder="Masukkan Nama Produk.." required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="produk-price">Harga:</label><br>
                        <input type="number" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" placeholder="Masukkan Harga.." required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="product-price">Category:</label><br>
                        <select class="form-control" name="id_category">
                            @foreach($category as $row)
                                <option value="{{$row->id}}" {{ $row->id == $produk->id_category ? 'selected' : '' }}>{{$row->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="produk-description">Deskripsi:</label><br>
                        <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Produk.." rows="4" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    </div>
                     <div style="margin-bottom: 15px;">
                        <label for="produk-image">Gambar Produk:</label><br>
                        @if($produk->img)
                            <img src="{{ asset('storage/' . $produk->img) }}" value="{{ $produk->img }}" style="max-width: 150px; margin-bottom: 10px;">
                            <p>Gambar saat ini:</p>
                        @else
                            <p>Tidak ada gambar saat ini.</p>
                        @endif
                        <input type="file" id="img" name="img" accept=".jpg,.jpeg,.png" style="padding: 5px;">
                        <span style="font-size: small;">Silakan unggah gambar produk baru (format .jpg, .jpeg, .png). Biarkan kosong jika tidak ingin mengubah gambar.</span><br><br>
                    </div>

                    <div style="text-align: right;">
                        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Update</button>
                        <a href="{{ url('/produk') }}" style="background-color: #dc3545; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px;">Batal</a>
                    </div>
                </form>
            </div>
        </td>
    </tr>
</table>

@endsection