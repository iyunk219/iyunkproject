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
                                        <th>Tgl Pemesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            @foreach($pesanan as $data)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ \Carbon\Carbon::parse($data->tgl_pemesanan)->format('d-m-Y') }}</td>
                                                                    <td>{{ optional($data->user)->name ?? '-' }}</td> <!-- Nama pengguna -->
                <td>{{ optional($data->user)->email ?? '-' }}</td> <!-- Email pengguna -->
                                                    <td>{{ $data->alamat }}</td> <!-- Assuming alamat is stored in data -->
                                                    <td>{{ $data->no_hp }}</td> <!-- Phone number -->
                                                    <td>{{ $data->total }}</td> <!-- Total price -->
                                                    <td>{{ $data->bayar_st }}</td> <!-- Bayar ST -->
                                                    <td>{{ $data->kelurahan }}</td> <!-- Kelurahan -->
                                                    <td>{{ $data->kecamatan }}</td> <!-- Kecamatan -->
                                                    <td>{{ $data->kabupaten }}</td> <!-- Kabupaten -->
                                                    <td>{{ $data->provinsi }}</td> <!-- Provinsi -->
                                                    <td>{{ $data->catatan }}</td> <!-- Catatan data -->
                                                    <td>{{ $data->total }}</td> <!-- Total Produk -->
                                                    <td>{{ $data->subtotal }}</td> <!-- Subtotal -->
                                                    <td>{{ $data->keranjang_id }}</td> <!-- Keranjang ID -->
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