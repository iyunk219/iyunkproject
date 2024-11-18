@extends('backend.template.main')
@section('content')
<div id="right-panel" class="right-panel">
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center text-white">
                            <strong class="card-title">Data Tabel Admin</strong>
                            <!-- Tombol Tambah Admin -->
                            <a href="{{ url('/backend/admin/create') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-plus"></i> Tambah Admin
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead class="thead" style="background-color: #5d6d7e; color: white;">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($admin as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->username }}</td>
                                        <td>{{ $data->password }}</td>
                                        <td>
                                            <!-- Updated button colors -->
                                            <a href="{{ url('/backend/admin/edit/'.$data->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('/backend/admin/destroy/'.$data->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Optional: Message if no admins are available -->
                            @if($admin->isEmpty())
                                <div class="alert alert-warning mt-3" role="alert">
                                    Tidak ada admin yang tersedia.
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
    .table {
        width: 100%; /* Pastikan tabel menggunakan lebar penuh */
    }

    .table th, .table td {
        text-align: center; /* Rata tengah untuk semua header dan sel */
        vertical-align: middle; /* Rata tengah secara vertikal */
    }

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

    /* Custom style for column widths */
    th:nth-child(1), td:nth-child(1) { /* Kolom No */
        width: 40px;  /* Lebar kolom No yang lebih kecil */
        padding: 0;   /* Menghilangkan padding jika perlu */
    }
    
    th:nth-child(2), td:nth-child(2) { /* Kolom Username */
        width: 150px; /* Lebar kolom Username */
    }
    
    th:nth-child(3), td:nth-child(3) { /* Kolom Password */
        width: 150px; /* Lebar kolom Password */
    }
    
    th:nth-child(4), td:nth-child(4) { /* Kolom Aksi */
        width: 100px; /* Lebar kolom Aksi */
    }
</style>
@endsection