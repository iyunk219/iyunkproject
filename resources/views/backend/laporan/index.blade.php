@extends('backend.template.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="card rounded h-100 p-4 shadow">
                <div class="card-title text-white rounded p-3 mb-3" style="background-color: #4a5568; color: white;">
                    <h4 class="mb-0">Pencarian Laporan Penjualan {{ request()->input('bulan') }}</h4>
                </div>
                <div class="col-md-6 mb-3">
                    <form action="" method="GET">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <select class="form-control" name="bulan" id="bulan" style="background-color: #6c757d; color: white;">
                                    <option selected value="">Pilih Bulan</option>
                                    @foreach(range(1, 12) as $month)
                                        <option value="{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="btn btn-dark rounded w-100" value="Cari">
                            </div>
                            <div class="col-md-1">
                                <a href="{{ url('/backend/laporan/cetak?bulan='.Request::get('bulan')) }}" target="_blank" class="btn btn-secondary rounded">Cetak</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered text-center">
                            <thead class="thead" style="background-color: #5d6d7e; color: white;">
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Pemesanan</th>
                                    <th>Nama Pembeli</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Dibayar</th>
                                    <th>Belum Dibayar</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Ekspedisi</th>
                                    <th>Tgl Pengiriman</th>
                                    <th>Status Pengiriman</th>
                                    <th>Ongkos Kirim</th>
                                    <th>Ongkir</th>
                                    <th>Total Harga Dikurangi Ongkir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pemesanan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_pemesanan)->format('d-m-Y') }}</td>
                                    <td>{{ $item->nama_pembeli }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item->dibayar, 0, ',', '.') }}</td>
                                    <td>{{ $item->belum_dibayar }}</td>
                                    <td>{{ $item->metode_pembayaran }}</td>
                                    <td>{{ $item->status_pembayaran }}</td>
                                    <td>{{ $item->ekspedisi }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_pengiriman)->format('d-m-Y') }}</td>
                                    <td>{{ $item->status_pengiriman }}</td>
                                    <td>{{ $item->ongkos_kirim }} </td>
                                    <td>Rp {{ number_format($item->ongkir, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item->harga_dikurangi, 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Optional: Display a message if no data is available -->
                        @if($pemesanan->isEmpty())
                        <div class="alert alert-warning text-center mt-3">Tidak ada data untuk bulan {{ request()->input('bulan') }}</div>
                        @endif
                    </div> <!-- End of table-responsive -->
                </div> <!-- End of card-body -->

                <!-- Custom Styles -->
                <style>
                    .table th, .table td {
                        vertical-align: middle;
                        padding: 12px;
                    }

                    /* Set fixed widths for specific columns */
                    .table th:nth-child(1), .table td:nth-child(1) { width: 50px; }
                    .table th:nth-child(2), .table td:nth-child(2) { width: 150px; }
                    .table th:nth-child(3), .table td:nth-child(3) { width: 200px; }
                    .table th:nth-child(4), .table td:nth-child(4) { width: 100px; }
                    .table th:nth-child(5), .table td:nth-child(5) { width: 150px; }
                    .table th:nth-child(6), .table td:nth-child(6) { width: 100px; }
                    /* Add more widths as needed for other columns */

                    .table-bordered {
                        border: 1px solid #cbd5e0;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #cbd5e0;
                    }
                </style>

            </div> <!-- End of card -->
        </div> <!-- End of col-lg-12 -->
    </div> <!-- End of row -->
</div> <!-- End of container-fluid -->
@endsection