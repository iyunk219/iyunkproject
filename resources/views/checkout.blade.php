@extends('template.layout')
@section('content')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Pembayaran</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
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
            <!-- Detail Penagihan -->
            <div class='col-md-6'>
                <!-- Header Detail Penagihan -->
                <h3 class='text-black h4 text-uppercase'>Detail Penagihan</h3>

                <!-- Form Detail Penagihan -->
                <!-- Misalnya: Nama, Alamat, Email, dll. -->
                <!-- Contoh Form -->
                <form action="{{ url('/submit-billing') }}" method='post'>
                    @csrf
                    <!-- Input untuk Nama -->
                    <div class='form-group'>
                        <label for='name'>Nama Lengkap</label>
                        <input type='text' id='nama_pembeli' name='nama_pembeli' required class='form-control'>
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
                <a href="{{ url('/checkout') }}" class='btn btn-black btn-lg py-3 btn-block'>Lanjutkan ke Pembayaran</a>

            </div> <!-- End of Pesanan Anda -->

        </div> <!-- End of row for billing and order details -->

    </div> <!-- End of container -->
</div> <!-- End of untree_co-section before-footer-section -->
@endsection
