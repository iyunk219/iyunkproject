@extends('backend.template.main')
@section('content')

<div id="right-panel" class="right-panel">
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #5d6d7e; color: white;">
                            <strong class="card-title">Data Tabel Pesanan</strong>
                            <!-- Tombol Tambah Data Pesanan -->
                            <a href="{{ url('/backend/pesanan/create') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-plus"></i> Tambah Data Pesanan
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered text-center">
                                <thead class="thead" style="background-color: #5d6d7e; color: white;">
                                        <tr>
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 150px;">Tgl Pemesanan</th>
                                        <th style="width: 150px;">Nama Pembeli</th>
                                        <th style="width: 150px;">Email</th>
                                        <th style="width: 150px;">Alamat</th>
                                        <th style="width: 100px;">No Hp</th>
                                        <th style="width: 150px;">Nama Produk</th>
                                        <th style="width: 100px;">Harga</th>
                                        <th style="width: 150px;">Img</th>
                                        <th style="width: 100px;">Bayar St</th>
                                        <th style="width: 100px;">Kelurahan</th>
                                        <th style="width: 150px;">Kecamatan</th>
                                        <th style="width: 150px;">Kabupaten</th>
                                        <th style="width: 100px;">Provinsi</th>
                                        <th style="width: 150px;">Catatan Pesanan</th>
                                        <th style="width: 150px;">Total </th>
                                        <th style="width: 150px;">Subtotal</th>
                                        <th style="width: 150px;">Keranjang </th>
                                        <th style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            @foreach($pesanan as $data)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ \Carbon\Carbon::parse($data->tgl_pemesanan)->format('d-m-Y') }}</td>
                                                                    <td>{{ optional($pesanan->user)->name ?? '-' }}</td> <!-- Nama pengguna -->
                <td>{{ optional($pesanan->user)->email ?? '-' }}</td> <!-- Email pengguna -->
                                                    <td>{{ $pesanan->alamat }}</td> <!-- Assuming alamat is stored in pesanan -->
                                                    <td>{{ $pesanan->no_hp }}</td> <!-- Phone number -->
                <td>{{ optional($pesanan->produk)->nama_produk ?? '-' }}</td> <!-- Nama produk -->
                                                    <td>{{ $pesanan->total }}</td> <!-- Total price -->
                                                    <td><img src="{{ asset('path/to/images/' . $pesanan->produk->img) }}" alt="{{ $pesanan->produk->nama_produk }}" style="max-width: 100%; height: auto;"></td> <!-- Product image -->
                                                    <td>{{ $pesanan->bayar_st }}</td> <!-- Bayar ST -->
                                                    <td>{{ $pesanan->kelurahan }}</td> <!-- Kelurahan -->
                                                    <td>{{ $pesanan->kecamatan }}</td> <!-- Kecamatan -->
                                                    <td>{{ $pesanan->kabupaten }}</td> <!-- Kabupaten -->
                                                    <td>{{ $pesanan->provinsi }}</td> <!-- Provinsi -->
                                                    <td>{{ $pesanan->catatan }}</td> <!-- Catatan Pesanan -->
                                                    <td>{{ $pesanan->total }}</td> <!-- Total Produk -->
                                                    <td>{{ $pesanan->subtotal }}</td> <!-- Subtotal -->
                                                    <td>{{ $pesanan->keranjang_id }}</td> <!-- Keranjang ID -->
                                                    <td><!-- Action buttons (edit, delete, etc.) --></td>
                                                </tr>
                                                @endforeach
                                </tbody>
                            </table>
                    </div><!-- .card -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- #right-panel -->

<style>
    /* Custom styles for the card header */
    .card-header {
        background-color: #5d6d7e; /* Dark blue-gray background */
        color: white; /* White text */
    }

    /* Custom styles for the table */
    .table th {
        background-color: #5d6d7e; /* Match card header color */
        color: white; /* White text for all headers */
    }

    .table tbody tr {
        transition: background-color 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: #add8e6; /* Light blue on hover */
        color: black; /* Black text on hover */
    }
</style>

@endsection