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
                <h2 style="text-align: center;">Form Pesanan</h2>
                <form action="{{url('/pesanan/store')}}" method="post">
                    {{ csrf_field() }}
                    <div style="margin-bottom: 15px;">
                        <label for="bayar-st">Bayar ST</label><br>
                        <input type="text" id="bayar-st" name="bayar_st" placeholder="Masukkan Bayar ST" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="kelurahan">Kelurahan</label><br>
                        <input type="text" id="kelurahan" name="kelurahan" placeholder="Masukkan Kelurahan" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="kecamatan">Kecamatan</label><br>
                        <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukkan Kecamatan" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="provinsi">Provinsi</label><br>
                        <select id="provinsi" name="provinsi" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                            <option value='' disabled selected>Pilih Provinsi</option>
                        <option value='Aceh'>Aceh</option>
                        <option value='Bali'>Bali</option>
                        <option value='Banten'>Banten</option>
                        <option value='Bengkulu'>Bengkulu</option>
                        <option value='Gorontalo'>Gorontalo</option>
                        <option value='Jakarta'>DKI Jakarta</option>
                        <option value='Jambi'>Jambi</option>
                        <option value='Jawa Barat'>Jawa Barat</option>
                        <option value='Jawa Tengah'>Jawa Tengah</option>
                        <option value='Jawa Timur'>Jawa Timur</option>
                        <option value='Kalimantan Barat'>Kalimantan Barat</option>
                        <option value='Kalimantan Selatan'>Kalimantan Selatan</option>
                        <option value='Kalimantan Tengah'>Kalimantan Tengah</option>
                        <option value='Kalimantan Timur'>Kalimantan Timur</option>
                        <option value='Kepulauan Bangka Belitung'>Kepulauan Bangka Belitung</option>
                        <option value='Kepulauan Riau'>Kepulauan Riau</option>
                        <option value='Lampung'>Lampung</option>
                        <option value='Maluku'>Maluku</option>
                        <option value='Maluku Utara'>Maluku Utara</option>
                        <option value='Nusa Tenggara Barat'>Nusa Tenggara Barat</option>
                        <option value='Nusa Tenggara Timur'>Nusa Tenggara Timur</option>
                        <option value='Papua'>Papua</option>
                        <option value='Papua Barat'>Papua Barat</option>
                        <option value='Riau'>Riau</option>
                        <option value='Sulawesi Barat'>Sulawesi Barat</option>
                        <option value='Sulawesi Selatan'>Sulawesi Selatan</option>
                        <option value='Sulawesi Tengah'>Sulawesi Tengah</option>
                        <option value='Sulawesi Utara'>Sulawesi Utara</option>
                        <option value='Sumatera Barat'>Sumatera Barat</option>
                        <option value='Sumatera Selatan'>Sumatera Selatan</option>
                        <option value='Sumatera Utara'>Sumatera Utara</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="kabupaten">Kabupaten/Kota</label><br>
                        <input type="text" id="kabupaten" name="kabupaten" placeholder="Masukkan Kabupaten/Kota" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="catatan">Catatan</label><br>
                        <textarea id="catatan" name="catatan" placeholder="Masukkan Catatan (opsional)" rows="4" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;"></textarea>
                    </div>
                    <div style="margin-bottom: 15px;">
                        @foreach($user as $data)
                        <label for="user_id">Nama Pengguna</label><br>
                        <input type="text" id="user_id" name="user_id" value="{{ $user->name }}" readonly style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        @endforeach
                    </div>
<div style="margin-bottom: 15px;">
    <label for="email">Email Pengguna</label><br>
    @if ($user) <!-- Pastikan $user tidak null -->
        <input type="email" id="email" name="email" value="{{ $user->email }}" readonly style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    @else
        <input type="email" id="email" name="email" value="" readonly style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    @endif
</div>
                    <div style="margin-bottom: 15px;">
                        @foreach($produk as $data)
                        <label for="produk_id">Nama Produk</label><br>
                        <input type="text" id="produk_id" name="produk_id" value="{{ $produk->nama_produk }}" readonly style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        @endforeach
                    </div>
                    <div style="margin-bottom: 15px;">
                        @foreach($produk as $data)
                        <label for="harga">Harga Produk</label><br>
                        <input type="text" id="harga" name="harga" value="{{ $produk->harga }}" readonly style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        @endforeach
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="no_hp">No HP</label><br>
                        <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan No HP" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" style="background-color: #007bff; color:white;padding :10 px ;15 px;border:none;border-radius :4 px ;cursor:pointer;">Submit</button>
                        <button type='reset' style='background-color:#dc3545;color:white;padding :10 px ;15 px;border:none;border-radius :4 px ;cursor:pointer;'>Reset</button>
                    </div>
                </form>
            </div>
        </td>
    </tr>
</table>

@endsection