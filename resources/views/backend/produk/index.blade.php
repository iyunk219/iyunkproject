@extends('backend.template.main')
@section('content')
<div id="right-panel" class="right-panel">
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #5d6d7e; color: white;">
                            <strong class="card-title">Data Tabel Produk</strong>
                            <!-- Tombol Tambah Produk -->
                            <a href="{{ url('/backend/produk/create') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-plus"></i> Tambah Produk
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead class="thead" style="background-color: #5d6d7e; color: white;">
                                    <tr>
                                        <th scope="col" style="color: white;">No</th> <!-- White color for No -->
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produk as $data)
                                    <tr>
                                        <th scope="row" style="color: white;">{{ $loop->iteration }}</th> <!-- White color for row number -->
                                        <td>{{ $data->nama_produk }}</td>
                                        <td>Rp {{ number_format($data->harga, 2, ',', '.') }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td>
                                          <img src="{{ asset('backend/assets/storage/' . $data->img) }}" 
                                             alt="{{ $data->nama_produk }}" 
                                             style="width: auto; height: auto; max-height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                                        </td>
                                        <td>{{ $data->category ? $data->category->nama_kategori : 'Tidak ada kategori' }}</td>
                                        <td>
                                            <a href="{{ url('/backend/produk/edit/'.$data->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('/backend/produk/destroy/'.$data->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Optional: Message if no products are available -->
                            @if($produk->isEmpty())
                                <div class="alert alert-warning mt-3" role="alert">
                                    Tidak ada produk yang tersedia.
                                </div>
                            @endif
                        </div><!-- .card-body -->
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
        color: white;
    }

    .table tbody tr {
        transition: background-color 0.3s ease;
        background-color: #ffffff; /* Neutral color */
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Light gray for even rows */
    }

    /* Hover effect */
    .table tbody tr:hover {
        background-color: #5d6d7e; /* Dark blue-gray on hover */
        color: white; /* White text on hover */
    }
</style>

@endsection