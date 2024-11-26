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
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center" style="background-color: #5d6d7e; color: white;">
            <h2>Form Pemesanan</h2>
        </div>
        <div class="card-body">
            <form action="{{url('/backend/pemesanan/store')}}" form id="myForm" action="/submit" method="POST">
                {{@csrf_field()}}
                <div class="row mb-3">
                    <div class="col-md-6">
                    <legend class ="w-auto px-2 font-weight-bold">Tanggal Pemesanan</legend>  
                        <input type="date" id="tgl_pemesanan" name="tgl_pemesanan" required class="form-control">
                    </div>
                </div>
                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto px-2 font-weight-bold">Pembeli</legend>
                    <div class="row mb-3">
<div class="col-md-4">
    <label for="nama_pembeli">Pilih Pembeli:</label>
    <select id="nama_pembeli" name="nama_pembeli" class="form-control" required onchange="updatePembeliDetails()">
        <option value="">-- Pilih Pembeli --</option>
        @foreach($pembelis as $pembeli)
            <option value="{{ $pembeli->id }}" data-alamat="{{ $pembeli->alamat }}" data-nohp="{{ $pembeli->no_hp }}">
                {{ $pembeli->nama_pembeli }}
            </option>
        @endforeach
    </select>
</div>

                        
                        <div class="col-md-4">
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" required class="form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <label for="no_hp">No Hp:</label>
                            <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan No Hp" required class="form-control" readonly>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto px-2 font-weight-bold">Produk</legend>
                    <div class="row mb-3">
  <div class="col-md-6">
    <label for="nama_produk">Pilih Produk:</label>
    <select id="nama_produk" name="nama_produk" class="form-control" required onchange="updateProdukDetails()">
        <option value="">-- Pilih Produk --</option>
        @foreach($produks as $produk)
            <option value="{{ $produk->id }}" data-harga="{{ $produk->harga }}" data-nama_produk="{{ $produk->nama_produk }}">
                {{ $produk->nama_produk }} 
            </option>
        @endforeach
    </select>
</div>

                        <div class="col-md-6">
                            <label for="harga_produk">Harga Produk:</label>
                            <input type="number" id="harga" name="harga" placeholder="Harga Produk" required class="form-control" readonly>
                        </div>
                    </div>
                </fieldset>
                <!-- Informasi Pengiriman -->
                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto px-2 font-weight-bold">Pengiriman</legend>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="ekspedisi">Ekspedisi:</label>
                            <input type="text" id="ekspedisi" name="ekspedisi" placeholder="Nama Ekspedisi.." required class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="tgl_pengiriman">Tanggal Pengiriman:</label>
                            <input type="date" id="tgl_pengiriman" name="tgl_pengiriman" required class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="ongkos_kirim">Ongkos Kirim:</label>
                            <select id="ongkos_kirim" name="ongkos_kirim" required class="form-select mb-3"> <!-- Menggunakan mb-3 untuk margin bawah -->
                                <option value="" disabled selected>Pilih Ongkos Kirim...</option>
                                <option value="penjual">Penjual</option>
                                <option value="pembeli">Pembeli</option>
                                <option value="penjual+pembeli">Penjual + Pembeli</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="ongkir">Ongkir:</label>
                            <input type="number" id="ongkir" name="ongkir" placeholder="Masukkan Ongkir.." required class="form-control"> <!-- Menggunakan mb-3 untuk margin bawah -->
                        </div>
                        <div class="col-md-2">
                            <label for="status_pengiriman">Status Pengiriman:</label>
                            <input type="text" id="status_pengiriman" name="status_pengiriman" placeholder="Masukkan Status Pengiriman.." required class="form-control">
                        </div>
                    </div>
                </fieldset>
                <!-- Status Pembayaran -->
                <fieldset class ="border p-3 mb-3">
                    <legend class ="w-auto px-2 font-weight-bold">Status Pembayaran</legend>                    
                    <div class ="row mb-3">
                        <div class ="col-md-4">
                            <label for ="dibayar">Di Bayar:</label>
                            <input type ="number" id ="dibayar" name ="dibayar" placeholder ="Masukkan Jumlah Dibayar.." required class ="form-control">
                        </div>
                        <div class ="col-md-4">
                            <label for ="belum_dibayar">Belum Di Bayar:</label>
                            <input type ="text" id ="belum_dibayar" name ="belum_dibayar" placeholder ="Jumlah Belum Di Bayar.." required class ="form-control">
                        </div>
                        <div class ="col-md-4">
                            <label for ="metode_pembayaran">Metode Pembayaran:</label>
                            <input type ="text" id ="metode_pembayaran" name ="metode_pembayaran" placeholder ="Masukkan Metode Pembayaran.." required class ="form-control">
                        </div>
                        <div class ="col-md-4 mt-2">
                            <label for ="status_pembayaran">Status Pembayaran:</label>
                            <select id ="status_pembayaran" name ="status_pembayaran" required class ="form-select">
                                <option value="" disabled selected>Pilih Status Pembayaran...</option>
                                <option value ="LUNAS">Lunas</option>
                                <option value ="BELUM LUNAS">Belum Lunas</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <!-- Total Harga Dikurangi -->
                <div class = "row mb-3">
                    <div class = "col-md-6">
                    <legend class ="w-auto px-2 font-weight-bold">Total Harga DiKurangi</legend>  
                        <input type = "number" id = "harga_dikurangi" name = "harga_dikurangi" readonly required class = "form-control">
                    </div>
                </div>

                <!-- Tombol Submit dan Reset -->
                <div class = "text-end mt-4">
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                    <button type = "reset" class = "btn btn-danger">Reset</button>
                </div>

            </form>
        </div> <!-- End of card-body -->
    </div> <!-- End of card -->
</div> <!-- End of container -->
<script>
function updatePembeliDetails() {
    var select = document.getElementById('nama_pembeli');
    var selectedOption = select.options[select.selectedIndex];

    // Ambil data dari atribut data-alamat dan data-nohp
    var alamat = selectedOption.getAttribute('data-alamat');
    var noHp = selectedOption.getAttribute('data-nohp');

    // Perbarui input alamat dan no HP
    document.getElementById('alamat').value = alamat ? alamat : '';
    document.getElementById('no_hp').value = noHp ? noHp : '';
}
function updateProdukDetails() {
    var select = document.getElementById('nama_produk');
    var selectedOption = select.options[select.selectedIndex];

    // Ambil data dari atribut data-harga
    var harga = selectedOption.getAttribute('data-harga');

    // Perbarui input harga
    document.getElementById('harga').value = harga ? harga : '';
}

// Fungsi untuk menghitung total harga dikurangi
function hitungHargaDikurangi() {
    // Ambil nilai dari input harga dan ongkos kirim
    var harga = parseFloat(document.getElementById('harga').value) || 0; // Default ke 0 jika tidak ada input
    var ongkir = parseFloat(document.getElementById('ongkir').value) || 0; // Default ke 0 jika tidak ada input

    // Hitung total harga dikurangi
    var totalHargaDikurangi = harga - ongkir;

    // Set nilai ke input total harga dikurangi
    document.getElementById('harga_dikurangi').value = totalHargaDikurangi.toFixed(2); // Mengatur dua angka di belakang koma
}

// Tambahkan event listener untuk menghitung ketika ada perubahan pada input
document.getElementById('harga').addEventListener('input', hitungHargaDikurangi);
document.getElementById('ongkir').addEventListener('input', hitungHargaDikurangi);

document.getElementById('myForm').onsubmit = function(event) {
    var pembeli = document.getElementById('pembeli').value;
    var produk = document.getElementById('produk').value;

    if (!pembeli) {
        alert("Silakan pilih pembeli.");
        event.preventDefault(); // Mencegah pengiriman form
        return false; // Mencegah pengiriman form
    }
    if (!produk) {
        alert("Silakan pilih produk.");
        event.preventDefault(); // Mencegah pengiriman form
        return false; // Mencegah pengiriman form
    }
};

</script>
<style type = "text/css">
.card {
    border-radius: 10px;
    overflow: hidden;
}

.card-header {
    background-color: #007bff;
    color: white;
}

.form-control, .form-select {
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3; /* Warna saat hover */
}

.btn-danger:hover {
    background-color: #c82333; /* Warna saat hover */
}

.row {
    margin-bottom: 15px; /* Menambahkan jarak antar baris */
}
.form-select {
    border: 1px solid #ccc; /* Warna dan ketebalan border */
    padding: 0.375rem 0.75rem; /* Padding dalam dropdown */
    border-radius: 0.25rem; /* Sudut melengkung */
}

.border {
    border: 1px solid #ccc; /* Border untuk kotak */
}

.p-2 {
    padding: 0.5rem; /* Padding di dalam kotak */
}

.rounded {
    border-radius: 0.25rem; /* Sudut melengkung */
}
</style>

@endsection