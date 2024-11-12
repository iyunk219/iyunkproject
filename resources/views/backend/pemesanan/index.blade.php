@extends('backend.template.main')
@section('content')

<div id="right-panel" class="right-panel">
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #5d6d7e; color: white;">
                            <strong class="card-title">Data Tabel Pemesanan</strong>
                            <!-- Tombol Tambah Data Pemesanan -->
                            <a href="{{ url('/backend/pemesanan/create') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-plus"></i> Tambah Data Pemesanan
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered text-center">
                                <thead class="thead" style="background-color: #5d6d7e; color: white;">
                                        <tr>
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 150px;">Tgl Pemesanan</th>
                                        <th style="width: 150px;">Nama Pembeli</th>
                                        <th style="width: 150px;">Alamat</th>
                                        <th style="width: 100px;">No Hp</th>
                                        <th style="width: 150px;">Nama Produk</th>
                                        <th style="width: 100px;">Harga</th>
                                        <th style="width: 100px;">Dibayar</th>
                                        <th style="width: 100px;">Belum DiBayar</th>
                                        <th style="width: 150px;">Metode Pembayaran</th>
                                        <th style="width: 150px;">Status Pembayaran</th>
                                        <th style="width: 100px;">Ekspedisi</th>
                                        <th style="width: 150px;">Tgl Pengiriman</th>
                                        <th style="width: 150px;">Status Pengiriman</th>
                                        <th style="width: 100px;">Ongkos Kirim</th>
                                        <th style="width: 100px;">Ongkir</th>
                                        <th style="width: 150px;">Total Harga Dikurangi Ongkir</th>
                                        <th style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($pemesanan as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ \Carbon\Carbon::parse($data->tgl_pemesanan)->format('d-m-Y') }}</td> <!-- Format tanggal pemesanan -->
                                        <td>{{ $data->nama_pembeli }}</td> <!-- Mengakses nama pembeli -->
                                        <td>{{ $data->alamat }}</td> <!-- Mengakses alamat pembeli -->
                                        <td>{{ $data->no_hp }}</td> <!-- Mengakses no HP pembeli -->
                                        <td>{{ $data->nama_produk }}</td> <!-- Mengakses nama produk -->
                                        <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td> <!-- Format harga -->
                                        <td>Rp {{ number_format($data->dibayar, 0, ',', '.') }}</td> <!-- Format dibayar -->
                                        <td>
                                            @if(is_numeric($data->belum_dibayar))
                                                Rp {{ number_format($data->belum_dibayar, 0, ',', '.') }} <!-- Format sebagai mata uang -->
                                            @else
                                                {{ $data->belum_dibayar }} <!-- Tampilkan sebagai teks biasa -->
                                            @endif
                                        </td>
                                        <td>{{ $data->metode_pembayaran }}</td> <!-- Metode pembayaran -->
                                        <td class="{{ $data->status_pembayaran == 'LUNAS' ? 'text-success' : ($data->status_pembayaran == 'BELUM LUNAS' ? 'text-danger' : '') }}">
                                            {{ $data->status_pembayaran }}
                                        </td>
                                        <td>{{ $data->ekspedisi }}</td> <!-- Ekspedisi -->
                                        <td>{{ \Carbon\Carbon::parse($data->tgl_pengiriman)->format('d-m-Y') }}</td> <!-- Format tanggal pengiriman -->
                                        <td>{{ $data->status_pengiriman }}</td> <!-- Status pengiriman -->
                                        <td class="
                                            {{ 
                                                $data->ongkos_kirim == 'penjual' ? 'text-primary' : 
                                                ($data->ongkos_kirim == 'pembeli' ? 'text-warning' : 
                                                ($data->ongkos_kirim == 'penjual+pembeli' ? 'text-success' : ''))
                                            }}">
                                            {{ ucfirst($data->ongkos_kirim) }}
                                        </td>
                                        <td>Rp {{ number_format($data->ongkir, 0, ',', '.') }}</td> <!-- Format ongkir -->
                                        <td>Rp {{ number_format($data->harga_dikurangi, 0, ',', '.') }}</td> <!-- Format total harga dikurangi ongkir -->
                                        <td>
                                            <!-- Updated button colors -->
                                            <a href="{{ url('/backend/pemesanan/edit/'.$data->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('/backend/pemesanan/destroy/'.$data->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash"></i> Hapus</a> 
                                        </td>
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