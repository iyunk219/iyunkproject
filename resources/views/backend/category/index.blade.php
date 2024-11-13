@extends('backend.template.main')
@section('content')
<div id="right-panel" class="right-panel">
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center text-white">
                            <strong class="card-title">Data Tabel category</strong>
                            <!-- Tombol Tambah category -->
                            <a href="{{ url('/backend/category/create') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-plus"></i> Tambah category
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead class="thead" style="background-color: #5d6d7e; color: white;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Categori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama_kategori }}</td>

                                        <td>
                                            <!-- Updated button colors -->
                                            <a href="{{ url('/backend/category/edit/'.$data->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('/backend/category/destroy/'.$data->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Optional: Message if no categorys are available -->
                            @if($category->isEmpty())
                                <div class="alert alert-warning mt-3" role="alert">
                                    Tidak ada category yang tersedia.
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