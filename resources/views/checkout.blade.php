@extends('template.layout')
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
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Pembayaran</h1>
                    <p>Dengan melakukan pembayaran, Anda akan segera mendapatkan konfirmasi dan pesanan Anda akan diproses.</p>
                        <a href="#" class="btn btn-secondary me-2">Belanja Sekarang</a>
                        <a href="#" class="btn btn-white-outline">Jelajahi</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap" style="text-align: right;">
                    <img src="images/222.jpg" alt="Background Image" style="width: 85%; height: auto; object-fit: cover;  margin-left: auto; display: block;">
                </div>
            </div>  
        </div>
    </div>
</div>
	<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Gambar</th>
                                <th class="product-name">Nama Produk</th>
                                <th class="product-price">Harga</th>
                                <th class="product-quantity">Kuantitas</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Produk 1 -->
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="images/32.jpeg" alt="Gambar" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">Produk 1</h2>
                                </td>
                                <td>Rp 2.000.000</td>
                                <td>
                                    <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                        </div>
                                        <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Contoh teks dengan addon tombol" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp 2.000.000</td>
                                <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                            </tr>

                            <!-- Produk 2 -->
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="images/19.jpeg" alt="Gambar" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">Produk 2</h2>
                                </td>
                                <td>Rp 2.000.000</td>
                                <td>
                                    <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                        </div>
                                        <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Contoh teks dengan addon tombol" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp 2.000.000</td>
                                <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                            </tr>

                        </tbody>
                    </table>

                    <!-- Tombol Perbarui dan Lanjutkan Belanja -->
                    <div class='row mb-3'>
                        <div class='col-md-6'>
                            <button class='btn btn-black btn-sm btn-block'>Perbarui Keranjang</button>
                        </div>
                        <div class='col-md-6'>
                            <button class='btn btn-outline-black btn-sm btn-block'>Lanjutkan Belanja</button>
                        </div> 
                    </div> <!-- End of button row -->

                </div> <!-- End of site-blocks-table -->
            </form> <!-- End of form -->
        </div>

        <!-- Detail Penagihan dan Pesanan Anda -->
        <div class='row'>
            <div class='col-md-6'>
                <h3 class='text-black h4 text-uppercase'>Detail Penagihan</h3>
                <form action="{{url('/submit')}}" method="post" >
                    {{@csrf_field()}}
                    <!-- Input untuk Nama -->
                    <div class='form-group'>
                        <label for='name'>Nama Lengkap</label>
                        <input type='text' id='name' name='name' required class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='no_hp'>No Hp</label>
                        <input type='no_hp' id='no_hp' name='no_hp' required class='form-control'>
                    </div>
                    <!-- Input untuk Alamat -->
                    <div class='form-group'>
                        <label for='alamat'>Alamat</label>
                        <textarea id='alamat' name='alamat' required rows='3' class='form-control'></textarea>
                    </div>
                    <div class='form-group'>
                        <label for='kelurahan'>Kelurahan</label>
                        <textarea id='kelurahan' name='kelurahan' required rows='3' class='form-control'></textarea>
                    </div>
                    <div class='form-group'>
                        <label for='kecamatan'>Kecamatan</label>
                        <textarea id='kecamatan' name='kecamatan' required rows='3' class='form-control'></textarea>
                    </div>
                    <div class='form-group'>
                        <label for='kabupaten'>Kota / Kabupaten</label>
                        <textarea id='kabupaten' name='kabupaten' required rows='3' class='form-control'></textarea>
                    </div>
                     <div class='form-group'>
                    <label for='provinsi'>Provinsi</label>
                    <select id='provinsi' name='provinsi' required class='form-control'>
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
                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <textarea id='email' name='email' required rows='3' class='form-control'></textarea>
                    </div>
                    <div class='form-group'>
                        <label for='catatan'>Catatan Pesanan (Opsional)</label>
                        <textarea id='catatan' name='catatan' rows='2' class='form-control'></textarea>
                    </div>

                    <!-- Tombol Kirim -->
                    <button type='submit' class='btn btn-black btn-lg py-3'>Kirim Detail Penagihan</button>

                </form> 
            </div> <!-- End of Detail Penagihan -->

            <!-- Pesanan Anda -->
            <div class='col-md-6'>
                <!-- Header Pesanan Anda -->
                <h3 class='text-black h4 text-uppercase'>Pesanan Anda</h3>

                <!-- Total Keranjang -->
                <!-- Subtotal dan Total -->
                <div class='row mb-3'>
                    <div class='col-md-6'>
                        Subtotal
                    </div> 
                    <!-- Total -->
                    <div class='col-md-6 text-right'>
                        Rp 4.000.000
                    </div> 
                </div>

                <!-- Total Keranjang -->
                <div class='row mb-5'>
                    <div class='col-md-6'>
                        Total
                    </div> 
                    <!-- Total Akhir -->
                    <div class='col-md-6 text-right'>
                        Rp 4.000.000
                    </div> 
                </div>

                <!-- Tombol Lanjutkan ke Pembayaran -->
                <a href="" class='btn btn-black btn-lg py-3 btn-block'>Bayar</a>

            </div> <!-- End of Pesanan Anda -->

        </div> <!-- End of row for billing and order details -->

    </div> <!-- End of container -->
</div> <!-- End of untree_co-section before-footer-section -->
@endsection
