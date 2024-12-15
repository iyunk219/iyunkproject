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
    <div id="right-panel" class="right-panel">
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex justify-content-between align-items-center"
                                style="background-color: #5d6d7e; color: white;">
                                <strong class="card-title">Data Tabel Pesanan</strong>

                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-responsive">

                                    <body width="80%">
                                        @php
                                            $sumTotal = 0;
                                        @endphp
                                        @foreach ($detail_pesanan as $row)
                                            @php
                                                $totalHarga = $row->harga_produk * $row->qty;
                                                $sumTotal += $totalHarga;
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->nama_produk }}</td>
                                                <td>{{ number_format($row->harga_produk, 0, ',', '.') }}</td>
                                                <td class="row">
                                                    <input type='number' name="qty_{{ $row->id }}"
                                                        class='form-control text-center quantity-amount w-100'
                                                        value='{{ $row->qty }}' min='1'>
                                                </td>
                                                <td data-row-id="{{ $row->id }}" class="total-harga">
                                                    {{ number_format($totalHarga, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="4" class="text-right"><strong>Total</strong></td>
                                            <td class="grand-total">
                                                <strong>{{ number_format($sumTotal, 0, ',', '.') }}</strong></td>
                                        </tr>


                                </table>
                                <div>
                                    <form action="{{ url('/backend/pesanan/update/' . $pesanan->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ @csrf_field() }}
                                        <div class="mb-1 row">
                                            <label class="col-lg-3 col-md-6 col-form-label required">Bayar?</label>
                                            <div class="col-lg-8 col-md-6">
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="bayar_st"
                                                        value="1" <?= @$pesanan->bayar_st == 1 ? 'checked' : '' ?>>
                                                    <span class="form-check-label">Sudah</span>
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="bayar_st"
                                                        value="0" <?= @$pesanan->bayar_st == 0 ? 'checked' : '' ?>>
                                                    <span class="form-check-label">Belum</span>
                                                </label>

                                            </div>
                                        </div>

                                        <div style="text-align: right;">
                                            <button type="submit"
                                                style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Update</button>
                                            <a href="{{ url('/backend/pesanan') }}"
                                                style="background-color: #dc3545; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px;">Batal</a>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- #right-panel -->
    </div>
@endsection


@push('bottom')
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script>
        $(document).off("change", ".quantity-amount").on("change", ".quantity-amount", function() {
            let input = $(this); // Input qty yang diubah
            let id = input.attr("name").replace("qty_", ""); // Ambil ID berdasarkan atribut name
            let currentQty = parseInt(input.val()); // Ambil nilai qty saat ini

            // Validasi input qty minimal 1
            if (isNaN(currentQty) || currentQty < 1) {
                currentQty = 1;
                input.val(1); // Reset ke nilai 1 jika input kurang dari 1
            }

            // Kirim data ke server
            updateQtyOnServer(id, currentQty);
        });

        // Fungsi untuk mengupdate qty di server
        function updateQtyOnServer(id, qty) {
            $.ajax({
                url: "{{ url('/ajax_statement/update-qty') }}", // Sesuaikan endpoint Anda
                method: "POST",
                data: {
                    id: id,
                    qty: qty,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    updateGrandTotal()
                    if (response.status === "success") {
                        Toastify({
                            text: "Berhasil mengupdate",
                            duration: 2000,
                            className: "info",
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            }
                        }).showToast();
                        // Tambahkan logika untuk memperbarui total atau UI jika diperlukan
                    } else {
                        alert(response.message || "Terjadi kesalahan saat mengupdate qty.");
                    }
                },
                error: function() {
                    updateGrandTotal()
                    alert("Gagal mengupdate qty. Silakan coba lagi.");
                },
            });
        }

        function updateGrandTotal() {
            var sumTotal = 0;
            $('.quantity-amount').each(function() {
                var input = $(this);
                var rowId = input.attr('name').split('_')[1];
                var hargaProduk = parseFloat(input.parents('tr').find('td:eq(2)').text().replace(/\./g, '').replace(
                    ',', '.'));
                var qty = input.val();
                sumTotal += hargaProduk * qty;
            });
            $('.grand-total').text(new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(sumTotal));
        }
    </script>
@endpush
