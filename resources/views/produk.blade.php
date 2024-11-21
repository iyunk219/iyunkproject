@extends('template.layout')
@section('content')

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
            <div class="col-lg-7">
                <div class="hero-img-wrap" style="text-align: right;">
                    <img src="images/222.jpg" alt="Background Image" style="width: 87%; height: auto; object-fit: cover;  margin-left: auto; display: block;">
                </div>
            </div>
        </div>
                      
    </div>
</div>
<div class="untree_co-section product-section before-footer-section" style="background-color: #f8f9fa; padding: 40px 0;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-family: Arial, sans-serif; font-size: 2.5em; color: #006400;">Katalog Produk</h2>
        <form action="" method="get">
            
<div class="mb-4 text-center">
    <label for="product-filter" class="form-label" style="font-weight: bold; color: #555;">Cari Produk:</label>
    

    <!-- Dropdown untuk kategori produk (disembunyikan) -->
    <select class="form-select" onchange="this.form.submit()" name="kategori">
        <option>-- Pilih --</option>
                            @foreach($category as $row)
                                <option value="{{$row->id}}" {{ $row->id == $kategori ? 'selected' : '' }}>{{$row->nama_kategori}}</option>
                            @endforeach
    </select>
    <!-- <button class="btn btn-primary">Cari</button> -->
</div>
        </form>

<div class="row" id="product-list">
    @foreach($produk as $data)
    <div class="col-12 col-md-4 col-lg-3 mb-5 product-item {{ strtolower(trim($data->kategori)) }}">
        <a href="#" style="text-decoration: none; color: inherit;" onclick="addToCart('{{ $data->id }}', '{{ $data->nama_produk }}', '{{ number_format($data->harga, 2, ',', '.') }}', '{{ asset('backend/assets/storage/produk/' . $data->img) }}')">
            <img src="{{ asset('backend/assets/storage/' . $data->img) }}" alt="{{ $data->nama_produk }}" class="img-fluid product-thumbnail" style ="width:100%; height:250px; object-fit:cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
            <h3 class="product-title" style="font-size: 1.5em; font-weight: bold; margin-top: 10px; color: #555555;">{{ $data->nama_produk }}</h3>
            <strong class="product-price" style="font-size: 1.2em; color: #28A745;">Harga: {{ number_format($data->harga, 2, ',', '.') }}</strong>
            <p class="product-description" style="font-size: 0.9em; color: #333333; margin-top: 5px;">{{ $data->deskripsi }}</p>
            <!-- Tombol Plus untuk menambah ke keranjang -->
            <button onclick="addToCart('{{ $data->id }}', '{{ $data->nama_produk }}', '{{ number_format($data->harga, 2, ',', '.') }}', '{{ asset('backend/assets/storage/produk/' . $data->img) }}')" style="background-color: #28A745; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                +
            </button>
        </a>
    </div>
    @endforeach
</div>

</div>
</div>
</div>

<script>
// Fungsi untuk memfilter produk berdasarkan input dan kategori
function filterProducts() {
    const input = document.getElementById('product-filter').value.toLowerCase();
    const category = document.getElementById('product-category').value;
    const products = document.querySelectorAll('.product-item');

    products.forEach(product => {
        const title = product.querySelector('.product-title').textContent.toLowerCase();
        const categoryMatch = category === 'all' || product.classList.contains(category);
        const searchMatch = title.includes(input);

        // Tampilkan produk jika cocok dengan kategori dan pencarian
        if (categoryMatch && searchMatch) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}
function addToCart(productId, productName, productPrice, productImage) {
    // Buat objek produk
    const product = {
        id: productId,
        name: productName,
        price: productPrice,
        image: productImage,
        quantity: 1 // Atur jumlah default sebagai 1
    };

    // Ambil data keranjang dari localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Cek apakah produk sudah ada di keranjang
    const existingProductIndex = cart.findIndex(item => item.id === productId);
    
    if (existingProductIndex > -1) {
        // Jika produk sudah ada, tambahkan jumlahnya
        cart[existingProductIndex].quantity += 1;
    } else {
        // Jika produk belum ada, tambahkan ke keranjang
        cart.push(product);
    }

    // Simpan kembali ke localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Tampilkan pesan atau update UI sesuai kebutuhan
    alert(`${productName} telah ditambahkan ke keranjang!`);
}
</script>


@endsection