@extends('template.layout')
@section('content')
<div class="hero">
    <div class="container">
       <div class="row justify-content-between">
          <div class="col-lg-5">
             <div class="intro-excerpt">
                 <h1>Blog Kami!</h1>
                 <p>Selamat datang di blog kami Di sini, Anda akan menemukan berbagai artikel tentang proses pembuatan produk kami, tips, serta panduan untuk membantu Anda dalam memilih produk yang tepat.</p>
                 <p><a href="#" class="btn btn-secondary me-2">Belanja Sekarang</a><a href="#" class="btn btn-white-outline">Jelajahi</a></p>
             </div>
          </div>
          <div class="col-lg-7">
              <div class="hero-img-wrap" style="text-align:right;">
                  <img src="images/222.jpg" alt="Background Image" style="width:90%; height:auto; object-fit:cover;margin-left:auto;display:block;">
              </div>  
          </div>  
       </div><!-- End Row --> 
    </div><!-- End Container -->
</div><!-- End Hero Section -->

<div class="blog-section">
    <div class="container">
        <!-- Judul Blog Post -->
        <h2 class="text-center mt-5 mb-4">Blog & Tips Furnitur</h2>
        
        <!-- Kolom Artikel -->
        <div class="row">

            <!-- Artikel 1 : Proses Pembuatan Kursi dengan Gerindra -->
            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'>
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick='enlargeImage(this.querySelector("img"), "Proses Pembuatan Kursi dengan Gerindra"); return false;'>
                        <img src="{{ asset('images/109.jpeg') }}" alt="Proses Pembuatan Kursi" style='width:410PX;height:200PX;object-fit:cover;border-radius:.5rem;' />
                    </a>
                    <!-- Isi Artikel -->
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Proses Pembuatan Kursi dengan Gerindra</h3>
                        <div id ='desc1' style='margin-top:.5rem;'>
                            - Proses pembuatan kursi dengan teknologi Gerindra dilakukan dengan sangat teliti untuk memastikan kualitas tinggi pada setiap produk. Teknologi ini membantu pengrajin memproduksi kursi dengan lebih efisien dan akurat. Setiap tahap, mulai dari pemilihan bahan hingga perakitan, diawasi dengan ketat untuk menghindari kesalahan yang dapat mempengaruhi kenyamanan dan daya tahan kursi.
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'>
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick='enlargeImage(this.querySelector("img"), "Pengamplasan Kursi"); return false;'>
                        <img src="{{ asset('images/116.JPG') }}" alt="Pengamplasan Kursi" style='width:410PX;height:200px;object-fit:cover;border-radius:.5rem;' />
                    </a>
                    <!-- Isi Artikel -->
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Pengamplasan Kursi</h3>
                        <div id='desc4' style='margin-top:.5rem;'>
                            -Langkah selanjutnya pengamplasan kursi adalah langkah penting dalam pembuatan furnitur untuk membersihkan permukaan kayu dan membuatnya siap untuk finishing. Dilakukan setelah pemotongan dan perakitan, pengrajin menggunakan kertas amplas dengan beragam tingkat kekasaran untuk menghaluskan permukaan.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Artikel 2 : Proses Pemasangan Jok Busa pada Kursi -->
            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'>
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick='enlargeImage(this.querySelector("img"), "Proses Pemasangan Jok Busa pada Kursi"); return false;'>
                        <img src="{{ asset('images/107.jpeg') }}" alt="Pemasangan Jok Busa pada Kursi" style='width:410PX;height:200px;object-fit:cover;border-radius:.5rem;' />
                    </a>
                    <!-- Isi Artikel -->
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Proses Pemasangan Jok Busa pada Kursi</h3>
                        <div id='desc2' style='margin-top:.5rem;'>
                            - Proses pemasangan jok busa pada kursi  yang bertujuan untuk memberikan kenyamanan dan kualitas. Pertama, bahan jok busa berkualitas dipilih dan dipotong sesuai ukuran kursi. Setelah itu, jok busa dipasang pada rangka kursi dengan menggunakan perekat yang kuat untuk memastikan posisinya tetap aman.
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'>
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick='enlargeImage(this.querySelector("img"), "Pengecekan Ulang Ukuran Kursi"); return false;'>
                        <img src="{{ asset('images/58.jpeg') }}" alt="Pengecekan Ukuran Kursi" style='width:410PX;height:200px;object-fit:cover;border-radius:.5rem;' />
                    </a>
                    <!-- Isi Artikel -->
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Pengecekan Ulang Ukuran Kursi</h3>
                        <div id='desc4' style='margin-top:.5rem;'>
                            - Pengecekan ulang ukuran kursi bertujuan untuk memastikan bahwa kursi sesuai dengan spesifikasi yang diinginkan. Dalam proses ini, pengrajin mengukur panjang dan lebar kursi dengan teliti menggunakan alat ukur. Setelah itu, hasil pengukuran dibandingkan dengan ukuran yang telah ditentukan.
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'>
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick='enlargeImage(this.querySelector("img"), "Tahap Servis"); return false;'>
                        <img src="{{ asset('images/113.JPG') }}" alt="Tahap Servis Kursi" style='width:410PX;height:200px;object-fit:cover;border-radius:.5rem;' />
                    </a>
                    <!-- Isi Artikel -->
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Tahap Servis</h3>
                        <div id='desc3' style='margin-top:.5rem;'>
                            - Proses servis kursi, seperti pada kursi magic, melibatkan beberapa langkah untuk memastikan kursi tetap dalam kondisi baik. Pertama, pengrajin memeriksa kursi secara menyeluruh untuk menemukan kerusakan, seperti baut yang longgar. Jika ada masalah, pengrajin akan mengencangkan atau mengganti baut yang tidak berfungsi dengan baik.
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'>
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick='enlargeImage(this.querySelector("img"), "Tahap Finishing Kursi"); return false;'>
                        <img src="{{ asset('images/114.JPG') }}" alt="Tahap Finishing Kursi" style='width:410PX;height:200px;object-fit:cover;border-radius:.5rem;' />
                    </a>
                    <!-- Isi Artikel -->
                    <div class='post-content-entry p-3'>
                        <h3 class='post-title'>Tahap Finishing </h3>
                        <div id='desc3' style='margin-top:.5rem;'>
                            - Tahap finishing  dengan teknik semprot  yang bertujuan untuk memberikan lapisan pelindung dan memperbaiki penampilan akhir produk. Dengan menggunakan teknik semprot, cat atau pernis dapat diaplikasikan secara merata, sehingga menghasilkan permukaan yang halus dan menarik.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Artikel 5 : Packing Kursi dengan Aman -->
            <div class='col-md-4 mb-4'>
                <div class='post-entry' style='cursor:pointer;'> 
                    <!-- Thumbnail Artikel -->
                    <a href='#' class='post-thumbnail' onclick="enlargeImage(this.querySelector('img'), 'Packing Kursi dengan Aman'); return false;"> 
                        <img src="{{ asset('images/59.jpeg') }}" alt="Packing Kursi dengan Aman" style="width:410PX;height:200px;object-fit:cover;border-radius:.5rem;"> 
                    </a> 
                    <!-- Isi Artikel -->
                    <div class="post-content-entry p-3"> 
                        <h3 class="post-title">Packing Kursi dengan Aman</h3> 
                        <div id="desc5" style="margin-top:10px;"> 
                            - Proses packing dilakukan dengan hati-hati untuk mencegah kerusakan selama pengiriman.
                        </div> 
                    </div> 
                </div> 
            </div>
            <div class='col-md-4 mb-4'>
            <div class='post-entry' style='cursor:pointer;'> 
                <!-- Thumbnail Video -->
                <a href='#' class='post-thumbnail' onclick="enlargeVideo(this.querySelector('video'), 'Salah Satu Video Perakitan Meja Makan Trembesi'); return false;"> 
                    <video width='410px' height='200px' controls style='object-fit:cover;border-radius:.5rem;'> 
                        <source src="{{ asset('images/Rakit meja.mp4') }}" type='video/mp4'> 
                        Your browser does not support the video tag. 
                    </video>
                </a> 
                <!-- Isi Artikel -->
                <div class="post-content-entry p-3"> 
                    <h3 class="post-title">Salah Satu Video Perakitan Meja Makan Trembesi</h3> 
                    <div id="desc5" style="margin-top:10px;"> 
                        - Saksikan proses perakitan meja makan trembesi dalam video ini.
                    </div> 
                </div> 
            </div> 
        </div>

        <!-- Modal untuk video -->
        <div id="videoModal" class="modal" onclick="closeModal()" style="display:none;">
            <video id="modalVideo" controls style="max-width:80%; max-height:80%; margin:auto; display:block;">
                <source id="modalVideoSource" src="" type='video/mp4'>
                Your browser does not support the video tag.
            </video>
            <p id="modalDescription" style="text-align:center;margin-top:.5rem;color:#333;"></p>
        </div>
        <div id="imageModal" class="modal" onclick="closeModal()" style="display:none;">
            <img id="modalImage" src="" alt="Gambar Besar" style="max-width:80%; max-height:80%; margin:auto; display:block;">
            <p id="modalDescription" style="text-align:center;margin-top:.5rem;color:#333;"></p>
        </diV>
        </div><!-- End Row -->


        <!-- Modal -->


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
<style>
    .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

.modal img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 10px;
}

.modal video {
    max-width: 90%;
    max-height: 90%;
    border-radius: 10px; /* Menambahkan border-radius untuk video */
}

.modal p {
    color: white;
    text-align: center;
    margin-top: .5rem;
}

.post-entry {
    border: 1px solid #ddd;
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.post-entry:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}
</style>

<!-- Tambahan JavaScript untuk interaksi modal -->
<script>
    function enlargeImage(img, description) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const modalDesc = document.getElementById("modalDescription");

        modalImg.src = img.src;
        modalDesc.innerText = description;

        modal.style.display = "flex"; // Show the modal
    }

    function closeModal() {
        // Menutup modal gambar
        const imageModal = document.getElementById("imageModal");
        imageModal.style.display = "none"; // Hide the image modal

        // Menutup modal video
        const videoModal = document.getElementById("videoModal");
        videoModal.style.display = "none"; // Hide the video modal

        // Pause video when closing
        const modalVideo = document.getElementById("modalVideo");
        if (modalVideo) {
            modalVideo.pause();
        }
    }

    function enlargeVideo(video, description) {
        const modal = document.getElementById("videoModal");
        const modalVideo = document.getElementById("modalVideo");
        const modalVideoSource = document.getElementById("modalVideoSource");

        // Set the source of the modal video to the clicked video's source
        modalVideoSource.src = video.querySelector("source").src;
        
        // Load the new video
        modalVideo.load();

        // Set the description
        document.getElementById("modalDescription").innerText = description;

        // Show the modal
        modal.style.display = "flex"; 
    }
</script>
<script src="path/to/bootstrap.bundle.js"></script> 
@endsection
