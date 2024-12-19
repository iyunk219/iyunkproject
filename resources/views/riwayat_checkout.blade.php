<div class="accordion" id="accordionExample">
    @foreach ($pesanan as $row)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $loop->index }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
                    aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                    {{ $row->tgl_pemesanan }}
                </button>
            </h2>
            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $loop->index }}"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped table-responsive table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sumTotal = 0;
                            @endphp
                            @foreach ($row->detail_pesanan as $row2)
                                @php
                                    $totalHarga = $row2->harga_produk * $row2->qty;
                                    $sumTotal += $totalHarga;
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row2->nama_produk }}</td>
                                    <td>{{ number_format($row2->harga_produk, 0, ',', '.') }}</td>
                                    <td>{{ $row2->qty }}</td>
                                    <td>{{ number_format($totalHarga, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" class="text-right"><strong>Total</strong></td>
                                <td><strong>{{ number_format($sumTotal, 0, ',', '.') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div>
