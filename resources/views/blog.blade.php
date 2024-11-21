@extends('template.layout')
@section('content')
<div class="hero">
    <div class="container">
	   <div class="row justify-content-between">
		  <div class="col-lg-5">
			 <div class="intro-excerpt">
			     <h1>Blog</h1>
			     <p class="mb-4">Selamat datang di blog kami! Di sini, Anda akan menemukan berbagai artikel tentang produk kami, tips, dan panduan untuk membantu Anda dalam memilih produk yang tepat.</p>
			     <p><a href="#" class="btn btn-secondary me-2">Belanja Sekarang</a><a href="#" class="btn btn-white-outline">Jelajahi</a></p>
			 </div>
		  </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap" style="text-align: right;">
                    <img src="images/222.jpg" alt="Background Image" style="width: 90%; height: auto; object-fit: cover;  margin-left: auto; display: block;">
                </div>
            </div>  
	   </div>
	    </div>
	</div>
<div class="blog-section">
    <div class="container">
        <h2>Blog & Tips Furnitur</h2>
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="post-entry" onclick="toggleDescription('desc1')" style="cursor:pointer;">
                    <a href="#" class="post-thumbnail" onclick="enlargeImage(this.querySelector('img')); return false;">
                        <img src="{{ asset('images/115.JPG') }}" alt="Proses Pembuatan Kursi" style="width: 300px; height: 100px; object-fit: cover; border-radius: 10px;">
                    </a>
                    <div class="post-content-entry p-3">
                        <h3 class="post-title">Proses Pembuatan Kursi dengan Gerindra</h3>
                        <div class="meta" id="desc1" style="display:none; margin-top: 10px;">
                            <span>- Proses pembuatan kursi dengan menggunakan teknologi Gerindra melibatkan pengawasan ketat pada setiap tahap produksi.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="imageModal" class="modal" onclick="closeModal()">
                <img id="modalImage" src="" alt="Gambar Besar" style="max-width: 90%; max-height: 90%;">
            </div>

            <!-- Blog Post 2 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="post-entry" onclick="toggleDescription('desc2')" style="cursor:pointer;">
                    <a href="#" class="post-thumbnail" onclick="enlargeImage(this.querySelector('img')); return false;">
                        <img src="{{ asset('images/107.jpeg') }}" alt="Packing pemasangan jok busa pada kursi" style="width: 300px; height: 200px; object-fit: cover; border-radius: 10px;">
                    </a>
                    <div class="post-content-entry p-3">
                        <h3 class="post-title">Proses Pemasangan Jok Busa pada Kursi</h3>
                        <div class="meta" id="desc2" style="display:none; margin-top: 10px;">
                            <span>- Proses pemasangan jok busa pada kursi dilakukan dengan hati-hati untuk memastikan kenyamanan dan kualitas.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc3")' style='cursor:pointer;'>
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('img')); return false;">
                        <img src="{{ asset('images/114.JPG') }}" alt="Tahap Finishing Kursi" style='width: 300px; height: 200px; object-fit: cover; border-radius: 10px;'>
                    </a>
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Tahap Finishing Kursi</h3>
                        <div id='desc3' style='display:none; margin-top: 10px;'>
                            - Menyelesaikan tahap akhir dalam pembuatan kursi untuk memastikan hasil yang sempurna.
                        </div> 
                    </div> 
                </div> 
            </div>

            <!-- Blog Post 4 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc4")' style='cursor:pointer;'>
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('img')); return false;">
                        <img src="{{ asset('images/58.jpeg') }}" alt="Pengecekan Ukuran Kursi" style='width: 300px; height: 200px; object-fit: cover; border-radius: 10px;'>
                    </a>
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Pengecekan Ulang Ukuran Kursi</h3>
                        <div id='desc4' style='display:none; margin-top: 10px;'>
                            - Melakukan pengecekan ulang untuk memastikan ukuran kursi sesuai dengan spesifikasi yang diinginkan.
                        </div>
                    </div> 
                </div> 
            </div>

            <!-- Blog Post 5 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc5")' style='cursor:pointer;'> 
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('img')); return false;"> 
                        <img src="{{ asset('images/59.jpeg') }}" alt="Packing Kursi dengan Aman" style='width: 300px; height: 200px; object-fit: cover; border-radius: 10px;'> 
                    </a> 
                    <div class='post-content-entry p-3'> 
                        <h3 class='post-title'>Packing Kursi dengan Aman</h3> 
                        <div id='desc5' style='display:none; margin-top: 10px;'> 
                            - Proses packing dilakukan dengan hati-hati untuk mencegah kerusakan selama pengiriman.
                        </div> 
                    </div> 
                </div> 
            </div>

            <!-- Blog Post 6 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc6")' style='cursor:pointer;'> 
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('video')); return false;"> 
                        <video width='100%' controls style='max-height:auto;border-radius:.5rem;'> 
                            <source src="{{ asset('images/99.mp4') }}" type='video/mp4'> Your browser does not support the video tag. 
                        </video> 
                    </a> 
                    <div class='post-content-entry p-3'> 
                        <h3 style='font-size:.9rem;color:#333;font-weight:bold;'> 
                            Proses Perakitan Salah Satu Meja dalam Video
                        </h3> 
                        <div id ='desc6'style ='display:none;margin-top: 10px;'> - Saksikan proses finishing secara langsung melalui video ini. 
                        </div> 
                    </div> 
                </div> 
            </div>

            <!-- Blog Post 7 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc7")' style='cursor:pointer;'> 
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('img')); return false;"> 
                        <img src="{{ asset('images/72.JPEG') }}" alt="Proses Pengiriman Barang" style='width: 300px; height: 200px; object-fit: cover; border-radius: 10px;'> 
                    </a> 
                    <div class='post-content-entry p-3'> 
                        <h3 style='font-size: 18px; color: #333; font-weight: bold;'> 
                            Pengiriman Barang dengan Truck Kontainer
                        </h3> 
                        <div id='desc7' style='display:none;margin-top: 10px;'> 
                            - Proses pengiriman barang menggunakan truck kontainer sangat efisien untuk muatan besar. 
                        </div> 
                    </div> 
                </div> 
            </div>

            <!-- Blog Post 8 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc8")' style='cursor:pointer;'> 
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('img')); return false;"> 
                        <img src="{{ asset('images/116.JPG') }}" alt="Proses Amplas Kursi" style='width: 300px; height: 200px; object-fit: cover; border-radius: 10px;'> 
                    </a> 
                    <div class='post-content-entry p-3'> 
                        <h3 style='font-size: 18px; color:#333;font-weight:bold;'> 
                            Proses Amplas Kursi
                        </h3> 
                        <div id ='desc8' style ='display:none;margin-top: 10px;'> 
                            - Proses amplas kursi dilakukan untuk mendapatkan permukaan yang halus dan siap dicat.  
                        </div>  
                    </div>  
                </div>  
            </div>

            <!-- Blog Post 9 -->
            <div class='col-12 col-sm-6 col-md-4 mb-4'>
                <div class='post-entry' onclick='toggleDescription("desc9")' style='cursor:pointer;'> 
                    <a href="#" class='post-thumbnail' onclick="enlargeImage(this.querySelector('img')); return false;"> 
                        <img src="{{ asset('images/113.JPG') }}" alt="Proses Servis Kursi" style='width: 300px; height: 200px; object-fit: cover; border-radius: 10px;'>  
                    </a>  
                    <div class='post-content-entry p-3'>  
                        <h3 style='font-size: 18px; color:#333;font-weight:bold;'>  
                            Proses Servis Kursi
                        </h3>  
                        <div id ='desc9' style ='display:none;margin-top: 10px;'>  
                            - Proses servis kursi mencakup perbaikan dan pemeliharaan untuk memastikan kenyamanan pengguna.  
                        </div>  
                    </diV>  
                </diV>  
            </diV>
        </diV><!-- End Row -->

        <!-- Tips Section -->
        <h2 class="text-center mt-5 mb-4">Tips Memilih Furnitur yang Tepat untuk Rumah Anda</h2>
        <p style="text-align: center;">Berikut adalah beberapa tips untuk membantu Anda memilih furnitur yang sesuai dengan kebutuhan dan gaya rumah Anda:</p>

        <!-- Tips Entries -->
        <div class='row'>

            <!-- Tip 1 -->
            <div class='col-md-4 mb-4'>
                <div class='tip-item p-3 border rounded shadow-sm'>
                    <h3 style="font-size: 20px; color: #333; font-weight: bold;">Pilih Berdasarkan Ukuran Ruangan</h3>
                    <p>Pastikan furnitur yang Anda pilih sesuai dengan ukuran ruangan. Ukur ruang Anda sebelum berbelanja agar furnitur tidak membuat ruangan terasa sempit.</p> 
                </div> 
            </div>

            <!-- Tip 2 -->
            <div class='col-md-4 mb-4'>
                <div class='tip-item p-3 border rounded shadow-sm'>
                    <h3 style="font-size: 20px; color: #333; font-weight: bold;">Pertimbangkan Gaya Dekorasi</h3>
                    <p>Pilih furnitur yang sesuai dengan tema dan warna ruangan Anda. Pastikan semuanya harmonis agar menciptakan suasana yang nyaman dan menarik.</p> 
                </div> 
            </div>

            <!-- Tip 3 -->
            <div class='col-md-4 mb-4'>
                <div class='tip-item p-3 border rounded shadow-sm'>
                    <h3 style="font-size: 20px; color: #333; font-weight: bold;">Fungsionalitas adalah Kunci</h3>
                    <p>Pilihlah furnitur yang tidak hanya menarik tetapi juga fungsional. Memilih furnitur multifungsi dapat menghemat ruang dan meningkatkan kenyamanan.</p> 
                </div> 
            </div>

            <!-- Tip 4 -->
            <div class='col-md-4 mb-4'>
                <div class='tip-item p-3 border rounded shadow-sm'>
                    <h3 style="font-size: 20px; color: #333; font-weight: bold;">Investasi pada Kualitas</h3>
                    <p>Pilihlah furnitur dari bahan berkualitas tinggi agar lebih tahan lama. Investasi pada furnitur berkualitas akan menghemat biaya dalam jangka panjang.</p> 
                </div> 
            </div>

            <!-- Tip 5 -->
            <div class='col-md-4 mb-4'>
                <div class='tip-item p-3 border rounded shadow-sm'>
                    <h3 style="font-size: 20px; color: #333; font-weight: bold;">Perhatikan Warna dan Tekstur</h3>
                    <p>Pilih warna dan tekstur furnitur yang dapat menciptakan suasana yang diinginkan. Kombinasi warna dan tekstur yang tepat dapat membuat ruangan terasa lebih hidup.</p> 
                </div> 
            </div>

            <!-- Tip 6 -->
            <div class='col-md-4 mb-4'>
                <div class='tip-item p-3 border rounded shadow-sm'>
                    <h3 style="font-size: 20px; color: #333; font-weight: bold;">Cobalah Sebelum Membeli</h3>
                    <p>Jika memungkinkan, cobalah furnitur sebelum membeli. Menguji furnitur secara langsung dapat membantu Anda mendapatkan gambaran tentang kenyamanan produk.</p> 
                </div> 
            </div>

        </div>

    </diV><!-- End Container -->
</diV><!-- End Blog Section -->
<script>
// JavaScript functions for toggling description and enlarging images
function toggleDescription(id) {
    var desc = document.getElementById(id);
    desc.style.display = desc.style.display === 'none' ? 'block' : 'none';
}

function enlargeImage(img) {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");
    modal.style.display = "block";
    modalImg.src = img.src;
}

function closeModal() {
    var modal = document.getElementById("imageModal");
    modal.style.display = "none";
}
</script>
<style>
.modal {
    display: none; /* Modal disembunyikan secara default */
    position: fixed; /* Tetap di posisi tetap */
    z-index: 1000; /* Di atas konten lainnya */
    left: 0;
    top: 0;
    width: 300px;
    background-color: rgba(0, 0, 0, 0.8); /* Latar belakang transparan hitam */
    justify-content: center; /* Pusatkan konten */
    align-items: center; /* Pusatkan konten secara vertikal */
}

/* Gaya untuk gambar dalam modal */
.modal img {
    max-width: 90%; /* Maksimal lebar gambar */
    max-height: 90%; /* Maksimal tinggi gambar */
}
    </style>

<script src="path/to/bootstrap.bundle.js"></script> 
@endsection
