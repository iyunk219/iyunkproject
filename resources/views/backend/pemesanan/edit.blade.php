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
            <h2>Edit Pemesanan</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('/backend/pemesanan/update', $pemesanan->id) }}" method="POST" id="myForm">
                {{ csrf_field() }}
                {{ method_field('PUT') }} <!-- Menandakan bahwa ini adalah permintaan PUT -->

                <div class="row mb-3">
                    <div class="col-md-6">
                        <legend class ="w-auto px-2 font-weight-bold">Tanggal Pemesanan</legend>  
                        <input type="date" id="tgl_pemesanan" name="tgl_pemesanan" value="{{ $pemesanan->tgl_pemesanan }}" required class="form-control">
                    </div>
                </div>

                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto px-2 font-weight-bold">Pembeli</legend>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="alamat">Nama Pembeli:</label>
                            <input type="text" id="nama_pembeli" name="nama_pembeli" value="{{ $pemesanan->nama_pembeli }}" required class="form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" value="{{ $pemesanan->alamat }}" placeholder="Masukkan Alamat" required class="form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <label for="no_hp">No Hp:</label>
                            <input type="text" id="no_hp" name="no_hp" value="{{ $pemesanan->no_hp }}" placeholder="Masukkan No Hp" required class="form-control" readonly>
                        </div>
                    </div>
                </fieldset>

                <!-- Produk -->
                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto px-2 font-weight-bold">Produk</legend>
                    <div class="row mb-3">
                          <div class="col-md-6">
                            <label for="harga_produk">Nama Produk:</label>
                            <input type="text" id="nama_produk" name="nama_produk" value="{{ $pemesanan->nama_produk }}"  required class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="harga_produk">Harga Produk:</label>
                            <input type="number" id="harga" name="harga" value="{{ $pemesanan->harga }}" placeholder="Harga Produk" required class="form-control" readonly>
                        </div>
                    </div>
                </fieldset>
                <!-- Informasi Pengiriman -->
                <fieldset class="border p-3 mb-3">
                    <legend class="w-auto px-2 font-weight-bold">Pengiriman</legend>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="ekspedisi">Ekspedisi:</label>
                            <input type="text" id="ekspedisi" name="ekspedisi" value="{{ $pemesanan->ekspedisi }}" required class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="tgl_pengiriman">Tanggal Pengiriman:</label>
                            <input type="date" id="tgl_pengiriman" name="tgl_pengiriman" value="{{ $pemesanan->tgl_pengiriman }}" required class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="ongkir">Ongkos Kirim</label>
                            <input type="text" id="ongkos_kirim" name="ongkos_kirim" value="{{ $pemesanan->ongkos_kirim }}" readonly required class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="ongkir">Ongkir:</label>
                            <input type="number" id="ongkir" name="ongkir" value="{{ $pemesanan->ongkir }}" readonly required class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="status_pengiriman">Status Pengiriman:</label>
                            <input type="text" id="status_pengiriman" name="status_pengiriman" value="{{ $pemesanan->status_pengiriman }}" required class="form-control">
                        </div>
                    </div>
                </fieldset>

                <!-- Status Pembayaran -->
                <fieldset class ="border p-3 mb-3">
                    <legend class ="w-auto px-2 font-weight-bold">Status Pembayaran</legend>                    
                    <div class ="row mb-3">
                          <div class ="col-md-4">
                            <label for ="dibayar">Di Bayar:</label>
                            <input type ="number" id ="dibayar" name ="dibayar" value="{{ $pemesanan->dibayar }}" required class ="form-control">
                        </div>
                        <div class ="col-md-4">
                                    <label for ="belum_dibayar">Belum Di Bayar:</label>
                                    <input type ="text" id ="belum_dibayar" name ="belum_dibayar" value="{{ $pemesanan->belum_dibayar }}" required class ="form-control">
                                </div>
                        <div class ="col-md-4">
                            <label for ="metode_pembayaran">Metode Pembayaran:</label>
                            <input type ="text" id ="metode_pembayaran" name ="metode_pembayaran" readonly value="{{ $pemesanan->metode_pembayaran }}" required class ="form-control">
                        </div>
                        <div class ="col-md-4 mt-2">
                            <label for ="status_pembayaran">Status Pembayaran:</label>
                            <select id ="status_pembayaran" name ="status_pembayaran" required class ="form-select">
                                <option value="" disabled selected>Pilih Status Pembayaran...</option>
                                <option value ="LUNAS" {{ $pemesanan->status_pembayaran == 'LUNAS' ? 'selected' : '' }}>Lunas</option>
                                <option value ="BELUM LUNAS" {{ $pemesanan->status_pembayaran == 'BELUM LUNAS' ? 'selected' : '' }}>Belum Lunas</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <!-- Total Harga Dikurangi -->
                <div class = "row mb-3">
                    <div class = "col-md-6">
                        <legend class ="w-auto px-2 font-weight-bold">Total Harga DiKurangi</legend>  
                        <input type = "number" id = "harga_dikurangi" name = "harga_dikurangi" value="{{ $pemesanan->harga_dikurangi }}" readonly required class = "form-control">
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