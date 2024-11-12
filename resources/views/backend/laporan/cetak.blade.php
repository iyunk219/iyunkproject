<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Laporan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h2 {
            margin: 0;
            color: #333;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px; /* Ganti dengan ukuran logo yang sesuai */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff; /* Warna header tabel */
            color: white; /* Warna teks header */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang untuk baris genap */
        }
        tr:hover {
            background-color: #ddd; /* Warna saat hover pada baris */
        }
        .summary {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }

        @media print {
            th {
                background-color: #007bff !important; /* Memastikan warna header saat dicetak */
                color: white !important; /* Memastikan warna teks header saat dicetak */
            }
            .btn {
                display: none; /* Sembunyikan tombol saat mencetak */
            }
        }
    </style>
</head>
<body onload="javascript:window.print()">
    <div class="header">
        <img src="path/to/logo.png" alt="Logo"> <!-- Ganti dengan path logo Anda -->
        <h2>Laporan Penjualan Perbulan</h2>
        <h2>Jayamahe Furnitur</h2>
        <p>Jl Ratu Kalinyamat, Blingoh, Donorojo, Jepara, Jawa Tengah, Indonesia</p>
    </div>

    <table cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pemesanan</th>
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
                    <td>Rp {{ number_format(floatval($item->harga), 0, ',', '.') }}</td>
                    <td>Rp {{ number_format(floatval($item->dibayar), 0, ',', '.') }}</td>
                    <td>{{ $item->belum_dibayar }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>
                    <td>{{ $item->status_pembayaran }}</td>
                    <td>{{ $item->ekspedisi }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tgl_pengiriman)->format('d-m-Y') }}</td>
                    <td>{{ $item->status_pengiriman }}</td>
                    <td>{{ $item->ongkos_kirim }}</td> <!-- Ongkos Kirim -->
                    <td>Rp {{ number_format(floatval($item->ongkir), 0, ',', '.') }}</td> <!-- Format ongkir -->
                    <td>Rp {{ number_format(floatval($item->harga - $item->ongkir), 0, ',', '.') }}</td> <!-- Total harga dikurangi ongkir -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total Summary in a new table -->
    <table cellspacing="0" style="margin-top: 20px;">
        <thead>
            <tr style="background-color: #007bff; color: white;">
                 <th>Total Harga</th>
                <th>Total Dibayar</th>
                <th>Total Belum Dibayar</th>
                <th>Total Ongkos Kirim</th> <!-- Menambahkan kolom untuk Ongkos Kirim -->
                <th>Total Harga Dikurangi Ongkir</th> <!-- Menambahkan kolom untuk Total Harga Dikurangi Ongkir -->
            </tr>
        </thead>
        <tbody>
            <tr style="text-align:center;">
                <td>Rp {{ number_format(floatval($totalHarga), 0, ',', '.') }}</td>
                <td>Rp {{ number_format(floatval($totalDibayar), 0, ',', '.') }}</td>
                <td>Rp {{ number_format(floatval($totalBelumDibayar), 0, ',', '.') }}</td>
                <td>Rp {{ number_format(floatval($totalOngkir), 0, ',', '.') }}</td> <!-- Menampilkan Total Ongkos Kirim -->
                <td>Rp {{ number_format(floatval($totalHargaDikurangiOngkir), 0, ',', '.') }}</td> <!-- Menampilkan Total Harga Dikurangi Ongkir -->
            </tr>
        </tbody>
    </table>

    <!-- Tanggal Cetak -->
    <div class="summary">
        Jepara, {{ date('d-m-Y') }}
    </div>

    <!-- Footer -->
    <div class="footer">
        Admin
    </div>

    <!-- Script untuk mencetak -->
    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
    </script>

</body>
</html>
