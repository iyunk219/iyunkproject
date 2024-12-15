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
                        <tbody id='cart-list'>
                            @foreach($cart as $row)
                            <tr data-id="1">
                                <td class='product-thumbnail'>
                                    <img src='images/32.jpeg' alt='Gambar' class='img-fluid'>
                                </td>
                                <td class='product-name'>
                                    <h2 class='h5 text-black'>{{$row->produk->nama_produk}}</h2>
                                </td>
                                <td class='product-price'>{{$row->produk->harga}}</td>
                                <td>
                                    <div class='input-group mb-3 d-flex align-items-center quantity-container' style='max-width: 120px;'>
                                        <div class='input-group-prepend'>
                                            <button class='btn btn-outline-black decrease' type='button' onclick="updateTotal('{{$row->id}}','kurang')">-</button>
                                        </div>
                                        <input type='qty_{{$row->id}}' class='form-control text-center quantity-amount' value='{{$row->qty}}' min='1' onchange="updateTotal('{{$row->id}}')">
                                        <div class='input-group-append'> 
                                            <button class='btn btn-outline-black increase' type='button' onclick="updateTotal('{{$row->id}}','tambah')">+</button>
                                        </div>
                                    </div>
                                </td>
                                <td class='product-total' id="total_qty_{{$row->id}}">{{$row->qty}}</td>
                                <td><a href='#' class='btn btn-black btn-sm' onclick='removeProduct(this)'>X</a></td> 
                            </tr>
                            @endforeach
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
function displayCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartList = document.getElementById('cart-list');
    
    // Kosongkan daftar keranjang sebelumnya
    cartList.innerHTML = '';

    // Tampilkan setiap item dalam keranjang
    cart.forEach(item => {
        const listItem = document.createElement('div');
        listItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}" style="width:50px; height:auto;">
            <span>${item.name}</span> - ${item.price} x ${item.quantity}
            <button onclick="removeFromCart('${item.id}')">Remove</button>
        `;
        cartList.appendChild(listItem);
    });
}

// Panggil fungsi ini saat halaman keranjang dimuat
window.onload = displayCart;

function removeFromCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Filter keluar produk yang ingin dihapus
    cart = cart.filter(item => item.id !== productId);
    
    // Simpan kembali ke localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Update tampilan keranjang
    displayCart();
}
</script>
@endsection