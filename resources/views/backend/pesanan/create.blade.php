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
    <style>


        .form-container {
            display: inline-block;
            text-align: left;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            background-color: #ffffff; /* White background for the form */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            width: 100%;
            max-width: 600px; /* Maximum width of the form */
        }

        h2 {
            text-align: center;
        }

        input, select, textarea {
            width: 100%; /* Full width */
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 15px; /* Space between fields */
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type='reset'] {
            background-color: #dc3545; /* Red for reset button */
        }

        button:hover {
            opacity: 0.9; /* Slightly transparent on hover */
        }
    </style>

    <div class="container">
        <div class="form-container">
            <h2>Form Pesanan</h2>
            <form action="{{url('/backend/pesanan/store')}}" method="post">
                {{@csrf_field()}}
                
            <label for="user_id">Nama Pengguna</label>
            <select id="user_id" name="user_id" required onchange="updateUserDetails(this)">
                <option value="" disabled selected>Pilih Pengguna</option>
                @foreach($user as $data)
                    <option value="{{ $data->id }}" data-email="{{ $data->email }}">
                        {{ $data->name }}
                    </option>
                @endforeach
            </select>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" disabled>

            <!-- Dropdown untuk memilih produk -->
            <label for="produk_id">Nama Produk</label>
            <select id="produk_id" name="produk_id" required onchange="updateProductDetails(this)">
                <option value="" disabled selected>Pilih Produk</option>
                @foreach($produk as $data)
                    <option value="{{ $data->id }}" data-harga="{{ $data->harga }}" data-img="{{ asset('path/to/images/' . $data->img) }}">
                        {{ $data->nama_produk }}
                    </option>
                @endforeach
            </select>
            <label for="harga">Harga</label>
            <input type="text" id="harga" name="harga" disabled>
            <label for="img">Img</label>
            <input type="text" id="img" name="img" disabled>

                <label for="tgl_pemesanan">tgl_pemesanan</label>
                <input type="date" id="tgl_pemesanan" name="tgl_pemesanan" required>

                <label for="bayar_st">Bayar ST</label>
                <input type="text" id="bayar_st" name="bayar_st" placeholder="Masukkan Bayar ST" required>

                <label for="kelurahan">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" placeholder="Masukkan Kelurahan" required>

                <label for="kecamatan">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukkan Kecamatan" required>

                <label for="kabupaten">Kabupaten/Kota</label>
                <input type="text" id="kabupaten" name="kabupaten" placeholder="Masukkan Kabupaten/Kota" required>

                <label for="provinsi">Provinsi</label>
                <select id="provinsi" name="provinsi" required>
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

                

                <label for="catatan">Catatan (opsional)</label>
                <textarea id="catatan" name="catatan" placeholder="Masukkan Catatan (opsional)" rows="4"></textarea>

                <label for="no_hp">No HP</label>
                <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan No HP" required>

                <label for="qty">qty</label>
                <input type="text" id="qty" name="qty" placeholder="Masukkan qty" required>

                <label for="total">Total</label>
                <input type="text" id="total" name="total" placeholder="Masukkan Total" required>

                <label for="subtotal">Subtotal</label>
                <input type="text" id="subtotal" name="subtotal" placeholder="Masukkan Subtotal" required>

                 <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" placeholder="Masukkan alamat" rows="4"></textarea>

                <label for="keranjang_id">keranjang </label>
                <input type="text" id="keranjang_id" name="keranjang_id"required>

                <!-- Buttons -->
                <div style="text-align: right;">
                    <button type="submit">Submit</button>&nbsp;
                    <button type='reset'>Reset</button> 
                </div> 
            </form> 
        </div> 
    </div>
<script>
    function updateUserDetails(select) {
        const selectedOption = select.options[select.selectedIndex];
        const email = selectedOption.getAttribute('data-email');

        // Update email field
        document.getElementById('email').value = email ? email : '';
    }

    function updateProductDetails(select) {
        const selectedOption = select.options[select.selectedIndex];
        const price = selectedOption.getAttribute('data-harga');
        const img = selectedOption.getAttribute('data-img');

        // Update price and image fields
        document.getElementById('harga').value = price ? 'Rp ' + price : '';
        document.getElementById('img').value = img ? img : '';

        // Optionally, you can display the image in an img tag if needed
        // document.getElementById('product-image').src = img ? img : '';
    }
</script>
@endsection