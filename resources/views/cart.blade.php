@extends('template.layout')
@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Keranjang</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- Akhir Bagian Hero -->
<style>
        .product-item {
            cursor: pointer;
        }
    </style>

<div class="untree_co-section before-footer-section">
    <div class="container">
        <h2 class="text-center mb-4">Keranjang Belanja</h2>

        <div class='row mb-5'>
            <form class='col-md-12' method='post'>
                @csrf <!-- Token CSRF untuk keamanan -->
                <div class='site-blocks-table'>
                    <table class='table' id='cart-table'>
                        <thead>
                            <tr>
                                <th class='product-thumbnail'>Gambar</th>
                                <th class='product-name'>Nama Produk</th>
                                <th class='product-price'>Harga</th>
                                <th class='product-quantity'>Kuantitas</th>
                                <th class='product-total'>Total</th>
                                <th class='product-remove'>Hapus</th>
                            </tr>
                        </thead>
                        <tbody id='cart-body'>
                            <!-- Contoh Produk 1 -->
                            <tr data-id="1">
                                <td class='product-thumbnail'>
                                    <img src='images/32.jpeg' alt='Gambar' class='img-fluid'>
                                </td>
                                <td class='product-name'>
                                    <h2 class='h5 text-black'>Produk 1</h2>
                                </td>
                                <td class='product-price'>Rp 2.000.000</td>
                                <td>
                                    <div class='input-group mb-3 d-flex align-items-center quantity-container' style='max-width: 120px;'>
                                        <div class='input-group-prepend'>
                                            <button class='btn btn-outline-black decrease' type='button' onclick='updateTotal(this, -1)'>−</button>
                                        </div>
                                        <input type='number' class='form-control text-center quantity-amount' value='1' min='1' onchange='updateTotal(this)'>
                                        <div class='input-group-append'>
                                            <button class='btn btn-outline-black increase' type='button' onclick='updateTotal(this, 1)'>+</button>
                                        </div>
                                    </div>
                                </td>
                                <td class='product-total'>Rp 2.000.000</td>
                                <td><a href='#' class='btn btn-black btn-sm' onclick='removeProduct(this)'>X</a></td> 
                            </tr>

                            <!-- Contoh Produk 2 -->
                            <tr data-id="2">
                                <td class='product-thumbnail'>
                                    <img src='images/19.jpeg' alt='Gambar' class='img-fluid'>
                                </td>
                                <td class='product-name'>
                                    <h2 class='h5 text-black'>Produk 2</h2>
                                </td>
                                <td class='product-price'>Rp 2.000.000</td>
                                <td>
                                    <div class='input-group mb-3 d-flex align-items-center quantity-container' style='max-width: 120px;'>
                                        <div class='input-group-prepend'>
                                            <button class='btn btn-outline-black decrease' type='button' onclick='updateTotal(this, -1)'>−</button>
                                        </div>
                                        <input type='number' class='form-control text-center quantity-amount' value='1' min='1' onchange='updateTotal(this)'>
                                        <div class='input-group-append'>
                                            <button class='btn btn-outline-black increase' type='button' onclick='updateTotal(this, 1)'>+</button>
                                        </div>
                                    </div>
                                </td>
                                <td class='product-total'>Rp 2.000.000</td>
                                <td><a href='#' class='btn btn-black btn-sm' onclick='removeProduct(this)'>X</a></td> 
                            </tr>

                        </tbody>
                    </table>

                    <!-- Tombol Perbarui dan Lanjutkan Belanja -->
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <!-- Tombol Perbarui Keranjang -->
                            <button type="button" id="update-cart" class="btn btn-black btn-sm btn-block" onclick="updateCart()">Perbarui Keranjang</button> 
                        </div> 
                        <div class="col-md-6">
                            <!-- Tombol Lanjutkan Belanja -->
                            <button type="button" id="continue-shopping" class="btn btn-outline-black btn-sm btn-block">Lanjutkan Belanja</button> 
                        </div> 
                    </div> <!-- End of button row -->

                </div> <!-- End of site-blocks-table -->
            </form> <!-- End of form -->
        </div>

        <!-- Total Keranjang -->
        <div class="row">
            <div class="col-md-6 pl-5">
                <!-- Header Total Keranjang -->
                <h3 class="text-black h4 text-uppercase">Total Keranjang</h3>

                <!-- Subtotal dan Total -->
                <div id="total-section">
                    <!-- Subtotal -->
                    <div class="row mb-3">
                        <div class="col-md-6">Subtotal</div> 
                        <!-- Total -->
                        <div id="subtotal" class="col-md-6 text-right">Rp 4.000.000</div> 
                    </div>

                    <!-- Total Keranjang -->
                    <div id="final-total" class="row mb-5">
                        <div class="col-md-6">Total</div> 
                        <!-- Total Akhir -->
                        <div id="total" class="col-md-6 text-right">Rp 4.000.000</div> 
                    </div>

                    <!-- Tombol Lanjutkan ke Pembayaran -->
                    <a href="{{ url('/checkout') }}" id="checkout-button" class="btn btn-black btn-lg py-3 btn-block">Lanjutkan ke Pembayaran</a>

                </div> <!-- End of total-section -->
            </div> <!-- End of col-md-6 -->
        </div> <!-- End of row for buttons and totals -->

    </div> <!-- End of Container -->
</div> <!-- End of Section -->

<script>
// Fungsi untuk menghitung subtotal dan total keseluruhan
function updateCart() {
    const rows = document.querySelectorAll('#cart-body tr');
    let subtotal = 0;

    rows.forEach(row => {
        const priceElement = row.querySelector('.product-price');
        const quantityElement = row.querySelector('.quantity-amount');
        const totalElement = row.querySelector('.product-total');

        // Ambil harga produk
        const price = parseFloat(priceElement.innerText.replace('Rp ', '').replace('.', '').replace(',', '.'));
        
        // Ambil kuantitas
        const quantity = parseInt(quantityElement.value);

        // Hitung total untuk produk ini
        const total = price * quantity;
        totalElement.innerText = 'Rp ' + total.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });

        // Tambahkan ke subtotal
        subtotal += total;
    });

    // Update subtotal dan total akhir
    document.getElementById('subtotal').innerText = 'Rp ' + subtotal.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
    document.getElementById('total').innerText = 'Rp ' + subtotal.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
}

// Fungsi untuk mengupdate total berdasarkan kuantitas
function updateTotal(element, change = 0) {
    const row = element.closest('tr');
    const quantityElement = row.querySelector('.quantity-amount');

    // Update kuantitas
    let quantity = parseInt(quantityElement.value);
    if (change !== 0) {
        quantity += change;
        if (quantity <= 0) {
            quantity = 1; // Minimum kuantitas adalah 1
        }
        quantityElement.value = quantity;
    }

    // Update cart setelah perubahan kuantitas
    updateCart();
}

// Fungsi untuk menghapus produk dari keranjang
function removeProduct(button) {
    const row = button.closest('tr');
    row.remove();
    
    // Update cart setelah penghapusan
    updateCart();
}
</script>

<!-- Bootstrap JS (Optional for dropdown and other components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection