@extends('template.layout')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Pembayaran</h1>
                        <p>Dengan melakukan pembayaran, Anda akan segera mendapatkan konfirmasi dan pesanan Anda akan
                            diproses.</p>
                        <a href="#" class="btn btn-secondary me-2">Belanja Sekarang</a>
                        <a href="#" class="btn btn-white-outline">Jelajahi</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap" style="text-align: right;">
                        <img src="images/222.jpg" alt="Background Image"
                            style="width: 85%; height: auto; object-fit: cover;  margin-left: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post" action="{{ url('checkout/store') }}">
                    <div class="site-blocks-table">
                        <table class='table' id='cart-table'>
                            <thead>
                                <tr>
                                    <th class='product-thumbnail'>Gambar</th>
                                    <th class='product-name'>Nama Produk</th>
                                    <th class='product-price'>Harga</th>
                                    <th class='product-quantity'>Kuantitas</th>
                                    <th class='product-total'>Total</th>
                                    <th class='product-remove'>Hapus</th>
                                </tr>
                            </thead>
                            <tbody id='cart-list'>
                                @foreach ($cart as $row)
                                    <tr data-id="1">
                                        <td class='product-thumbnail'>
                                            <img src='images/32.jpeg' alt='Gambar' class='img-fluid'>
                                        </td>
                                        <td class='product-name'>
                                            <h2 class='h5 text-black'>{{ $row->nama_produk }}</h2>
                                        </td>
                                        <td class='product-price'>{{ $row->harga }}</td>
                                        <td>
                                            <div class='input-group mb-3 d-flex align-items-center quantity-container'
                                                style='max-width: 120px;'>
                                                <div class='input-group-prepend'>
                                                    <button class='btn btn-outline-black decrease' type='button'>-</button>
                                                </div>
                                                <input type='number' name="qty_{{ $row->id }}"
                                                    class='form-control text-center quantity-amount'
                                                    value='{{ $row->qty }}' min='1'>
                                                <div class='input-group-append'>
                                                    <button class='btn btn-outline-black increase' type='button'>+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class='product-total' id="total_qty_{{ $row->id }}">{{ $row->qty }}
                                        </td>
                                        <td><a href='#' class='btn btn-black btn-sm'
                                                onclick='removeProduct({{ $row->id }})'>X</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Tombol Perbarui dan Lanjutkan Belanja -->
                        <div class='row mb-3'>
                            <div class='col-md-6'>
                                <button class='btn btn-black btn-sm btn-block'>Perbarui Keranjang</button>
                            </div>
                            <div class='col-md-6'>
                                <button class='btn btn-outline-black btn-sm btn-block'>Lanjutkan Belanja</button>
                            </div>
                        </div> <!-- End of button row -->

                    </div> <!-- End of site-blocks-table -->
                </form> <!-- End of form -->
            </div>

            <!-- Detail Penagihan dan Pesanan Anda -->
            <div class='row'>
                <!-- Detail Penagihan -->
                <div class='col-md-6'>
                    <!-- Header Detail Penagihan -->
                    <h3 class='text-black h4 text-uppercase'>Detail Penagihan</h3>

                    <!-- Form Detail Penagihan -->
                    <!-- Misalnya: Nama, Alamat, Email, dll. -->
                    <!-- Contoh Form -->
                    <form action="{{ url('/checkout/store') }}" method='post'>
                        @csrf<ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                        <!-- Input untuk Nama -->
                        <input type="hidden" name="user_id" value="{{ Auth()->User()->id }}">

                        <div class='form-group'>
                            <label for='no_hp'>No Hp</label>
                            <input type='no_hp' id='no_hp' name='no_hp' required class='form-control'>
                            @error('no_hp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Input untuk Alamat -->
                        <div class='form-group'>
                            <label for='alamat'>Alamat</label>
                            <textarea id='alamat' name='alamat' required rows='3' class='form-control'></textarea>
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='kelurahan'>Kelurahan</label>
                            <textarea id='kelurahan' name='kelurahan' required rows='3' class='form-control'></textarea>
                            @error('kelurahan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='kecamatan'>Kecamatan</label>
                            <textarea id='kecamatan' name='kecamatan' required rows='3' class='form-control'></textarea>
                            @error('kecamatan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='kabupaten'>Kota / Kabupaten</label>
                            <textarea id='kabupaten' name='kabupaten' required rows='3' class='form-control'></textarea>
                            @error('kabupaten')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='provinsi'>Provinsi</label>
                            <select id='provinsi' name='provinsi' required class='form-control'>
                                <option value='' disabled selected>Pilih Provinsi</option>
                                <option value='Aceh'>Aceh</option>
                                <option value='Bali'>Bali</option>
                                <option value='Banten'>Banten</option>
                                <option value='Bengkulu'>Bengkulu</option>
                                <option value='Gorontalo'>Gorontalo</option>
                                <option value='Jakarta'>DKI Jakarta</option>
                                <option value='Jambi'>Jambi</option>
                                <option value='Jawa Barat'>Jawa Barat</option>
                                <option value='Jawa Tengah'>Jawa Tengah</option>
                                <option value='Jawa Timur'>Jawa Timur</option>
                                <option value='Kalimantan Barat'>Kalimantan Barat</option>
                                <option value='Kalimantan Selatan'>Kalimantan Selatan</option>
                                <option value='Kalimantan Tengah'>Kalimantan Tengah</option>
                                <option value='Kalimantan Timur'>Kalimantan Timur</option>
                                <option value='Kepulauan Bangka Belitung'>Kepulauan Bangka Belitung</option>
                                <option value='Kepulauan Riau'>Kepulauan Riau</option>
                                <option value='Lampung'>Lampung</option>
                                <option value='Maluku'>Maluku</option>
                                <option value='Maluku Utara'>Maluku Utara</option>
                                <option value='Nusa Tenggara Barat'>Nusa Tenggara Barat</option>
                                <option value='Nusa Tenggara Timur'>Nusa Tenggara Timur</option>
                                <option value='Papua'>Papua</option>
                                <option value='Papua Barat'>Papua Barat</option>
                                <option value='Riau'>Riau</option>
                                <option value='Sulawesi Barat'>Sulawesi Barat</option>
                                <option value='Sulawesi Selatan'>Sulawesi Selatan</option>
                                <option value='Sulawesi Tengah'>Sulawesi Tengah</option>
                                <option value='Sulawesi Utara'>Sulawesi Utara</option>
                                <option value='Sumatera Barat'>Sumatera Barat</option>
                                <option value='Sumatera Selatan'>Sumatera Selatan</option>
                                <option value='Sumatera Utara'>Sumatera Utara</option>
                            </select>
                            @error('provinsi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='email'>Email</label>
                            <textarea id='email' name='email' required rows='3' class='form-control'></textarea>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class='form-group'>
                            <label for='catatan'>Catatan Pesanan (Opsional)</label>
                            <textarea id='catatan' name='catatan' rows='2' class='form-control'></textarea>
                        </div>

                        <!-- Tombol Kirim -->
                        <button type='submit' class='btn btn-black btn-lg py-3'>Kirim Detail Penagihan</button>
                    </form>

                </div> <!-- End of Detail Penagihan -->

            </div> <!-- End of row for billing and order details -->

        </div> <!-- End of container -->
    </div> <!-- End of untree_co-section before-footer-section -->
@endsection

@push('bottom')
    <script>
        $(document).ready(function() {
            // Event handler untuk tombol kurang dan tambah
            $(document).off("click", ".decrease, .increase").on("click", ".decrease, .increase", function() {
                let button = $(this); // Tombol yang diklik
                let container = button.closest(".quantity-container"); // Container dari qty
                let input = container.find(".quantity-amount"); // Input qty di dalam container
                let id = input.attr("name").replace("qty_", ""); // Ambil ID berdasarkan atribut name
                let currentQty = parseInt(input.val()); // Ambil nilai qty saat ini

                // Validasi nilai qty
                if (isNaN(currentQty) || currentQty < 1) {
                    currentQty = 1;
                }

                let action = button.hasClass("decrease") ? "kurang" : "tambah"; // Cek aksi (kurang/tambah)

                // Tentukan qty baru
                if (action === "kurang" && currentQty > 1) {
                    currentQty -= 1;
                } else if (action === "tambah") {
                    currentQty += 1;
                }

                // Update nilai input
                input.val(currentQty);

                // Kirim data ke server
                updateQtyOnServer(id, currentQty);
            });

            // Event handler untuk input manual qty
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
                        alert("Gagal mengupdate qty. Silakan coba lagi.");
                    },
                });
            }
        });

        function removeProduct(id) {
            $.ajax({
                url: "{{ url('/ajax_statement/remove-product-cart') }}", // Sesuaikan endpoint Anda
                method: "POST",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    if (response.status === "success") {
                        Toastify({
                            text: "Berhasil menghapus",
                            duration: 2000,
                            className: "info",
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            }
                        }).showToast();
                    } else {
                        alert(response.message || "Terjadi kesalahan saat menghapus produk.");
                    }
                },
                error: function() {
                    alert("Gagal menghapus produk. Silakan coba lagi.");
                },
            });
        }
    </script>
@endpush
