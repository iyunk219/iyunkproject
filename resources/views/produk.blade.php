@extends('template.layout')

@section('title', 'Shop')

@section('content')
    

    <style>
            .hero {
                background-color: #3b5d50; /* Ganti sesuai kebutuhan */
                padding: 50px 0;
                color: white;
            }
            .product-section {
                padding: 40px 0;
                background-color: #f9f9f9; /* Latar belakang abu-abu muda */
            }
            .product-item {
                margin-bottom: 30px;
                transition: transform 0.3s;
            }
            .product-item:hover {
                transform: scale(1.05); /* Efek zoom saat hover */
            }
            .product-title {
                font-size: 18px;
                color: #333;
                font-weight: bold;
            }
            .product-price {
                font-size: 16px;
                color: #007bff; /* Warna biru untuk harga */
            }
            .product-description {
                font-size: 14px;
                color: #555; /* Warna deskripsi */
            }
        </style>
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1 style="font-size: 3rem; font-weight: bold;">Katalog Produk</h1>
                    <p class="mb-4">Temukan berbagai pilihan furnitur berkualitas tinggi di Jayamahe Furnitur. 
                        Katalog kami menawarkan desain modern dan fungsional untuk memenuhi kebutuhan rumah Anda. 
                        Setiap produk dirancang untuk memberikan kenyamanan dan keindahan di setiap sudut rumah Anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <h2 class="text-center mb-4">Katalog Produk</h2>
        
        <!-- Dropdown untuk memilih kategori produk -->
        <div class="mb-4 text-center">
            <label for="product-category" class="form-label">Pilih Kategori:</label>
            <select id="product-category" class="form-select" onchange="filterProducts(this.value)">
                <!-- Dropdown akan diisi secara dinamis -->
            </select>
        </div>

      <div class="row" id="product-list">
          @foreach($produk as $data)
          <div class="col-12 col-md-4 col-lg-3 mb-5 product-item {{ strtolower(trim($data->kategori)) }}" onclick="addToCart('{{ $data->id }}', '{{ $data->nama_produk }}', '{{ number_format($data->harga, 2, ',', '.') }}', '{{ asset('backend/assets/storage/produk/' . $data->img) }}')">
              <a href="#">
                  <img src="{{ asset('backend/assets/storage/' . $data->img) }}" alt="{{ $data->nama_produk }}" class="img-fluid product-thumbnail" style ="width:100%; height:250px; object-fit:cover;">
                  <h3 class="product-title">{{ $data->nama_produk }}</h3> <!-- Menggunakan nama_produk dari database -->
                  <strong class="product-price">Harga: {{ number_format($data->harga, 2, ',', '.') }}</strong> <!-- Menggunakan harga dari database -->
                  <p class="product-description">{{ $data->deskripsi }}</p> <!-- Menggunakan deskripsi dari database -->
                  <span class="icon-cross">
                      <img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="">
                  </span>
              </a>
          </div>
          @endforeach
      </div>

    </div>
</div>

<script>
// Master Kategori
const categories = [
    { id: 'all', name: 'Semua Produk' },
    { id: 'kursi', name: 'Kursi' },
    { id: 'lemari', name: 'Lemari' },
    { id: 'meja', name: 'Meja' },
    { id: 'ayunan', name: 'Ayunan' },
    { id: 'dipan', name: 'Dipan' },
    { id: 'bale-bale', name: 'Bale Bale' },
    { id: 'buffet', name: 'Buffet TV' },
    { id: 'gazebo', name: 'Gazebo' }
];

// Mengisi dropdown kategori
const categorySelect = document.getElementById('product-category');
categories.forEach(category => {
    const option = document.createElement('option');
    option.value = category.id;
    option.textContent = category.name;
    categorySelect.appendChild(option);
});

// Fungsi untuk memfilter produk berdasarkan kategori
function filterProducts(selectedCategory) {
    const products = document.querySelectorAll('.product-item');
    
    products.forEach(product => {
        if (selectedCategory === 'all' || product.classList.contains(selectedCategory)) {
            product.style.display = ''; // Tampilkan produk
        } else {
            product.style.display = 'none'; // Sembunyikan produk
        }
    });
}

// Fungsi untuk menambahkan produk ke keranjang
function addToCart(id, name, price, imageUrl) {
    // Dapatkan elemen tbody dari tabel keranjang
    const cartBody = document.getElementById('cart-body');

    // Buat baris baru untuk produk yang ditambahkan
    const newRow = document.createElement('tr');

    // Tambahkan konten ke dalam baris
    newRow.innerHTML = `
        <td class='product-thumbnail'>
            <img src='${imageUrl}' alt='${name}' class='img-fluid'>
        </td>
        <td class='product-name'>
            <h2 class='h5 text-black'>${name}</h2>
        </td>
        <td class='product-price'>${price}</td>
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
        <td class='product-total'>${price}</td>
        <td><a href='#' class='btn btn-black btn-sm' onclick='removeProduct(this)'>X</a></td>`;

    // Tambahkan baris baru ke dalam tabel keranjang
    cartBody.appendChild(newRow);

    // Update subtotal dan total setelah menambahkan produk
    updateCart();
}

// Fungsi untuk menghitung subtotal dan total keseluruhan
function updateCart() {
    const rows = document.querySelectorAll('#cart-body tr');
    let subtotal = 0;

    rows.forEach(row => {
        const totalElement = row.querySelector('.product-total');
        const totalValue = parseFloat(totalElement.innerText.replace('Rp ', '').replace('.', '').replace(',', '.'));
        subtotal += totalValue;
    });

    // Update subtotal dan total akhir
    document.getElementById('subtotal').innerText = 'Rp ' + subtotal.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
    document.getElementById('total').innerText = 'Rp ' + subtotal.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Then include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
@endsection