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
                <div class="hero-img-wrap">
                    <img src="images/couch.png" alt="Gambar Sofa" class="img-fluid">
                </div>
            </div>
	        </div>
	    </div>
	</div>
<div class="blog-section" style="background-color: #f8f9fa; padding: 40px 0;">
    <div class="container">
        <h2 class="text-center mb-5">Blog & Tips Furnitur</h2>
        <div class="row">

            <!-- Blog Entries -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="post-entry" onclick="toggleDescription('desc1')" style="transition: transform .2s; cursor: pointer;">
        <a href="#" class="post-thumbnail">
            <img src="{{ asset('images/105.jpeg') }}" alt="Proses Pembuatan Kursi" class="img-fluid rounded" style="height: 220px; object-fit: cover; width: 100%; border-radius: 10px;">
        </a>
        <div class="post-content-entry p-3" style="background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: box-shadow .3s;">
            <h3 class="post-title" style="font-size: 18px; font-weight: bold;">
                <a href="#" style="color: #333; text-decoration: none;">Proses Pembuatan Kursi dengan Gerindra</a>
            </h3>
            <div class="meta" id="desc1" style="display:none;">
                <span>- Proses pembuatan kursi dengan menggunakan teknologi Gerindra melibatkan pengawasan ketat pada setiap tahap produksi.</span>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="post-entry" onclick="toggleDescription('desc2')" style="transition: transform .2s; cursor: pointer;">
        <a href="#" class="post-thumbnail">
            <img src="{{ asset('images/107.jpeg') }}" alt="Packing pemasangan jok busa pada kursi" class="img-fluid rounded" style="height: 220px; object-fit: cover; width: 100%; border-radius: 10px;">
        </a>
        <div class="post-content-entry p-3" style="background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: box-shadow .3s;">
            <h3 class="post-title" style="font-size: 18px; font-weight: bold;">
                <a href="#" style="color: #333; text-decoration: none;">Proses Pemasangan Jok Busa pada Kursi</a>
            </h3>
            <div class="meta" id="desc2" style="display:none;">
                <span>- Proses pemasangan jok busa pada kursi dilakukan dengan hati-hati untuk memastikan kenyamanan dan kualitas.</span>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="post-entry" onclick='toggleDescription("desc3")' style="transition: transform .2s; cursor: pointer;">
        <a href="#" class="post-thumbnail">
            <img src="{{ asset('images/103.jpeg') }}" alt="Proses Finishing Kursi" class="img-fluid rounded" style="height: 220px; object-fit: cover; width: 100%; border-radius: 10px;">
        </a>
        <div class='post-content-entry p-3' style='background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: box-shadow .3s;'>
            <h3 class='post-title' style='font-size: 18px; font-weight: bold;'>
                <a href="#" style="color: #333; text-decoration: none;">Tahap Finishing Kursi</a>
            </h3>
            <div id='desc3' style='display:none;'>
                - Menyelesaikan tahap akhir dalam pembuatan kursi untuk memastikan hasil yang sempurna.
            </div> 
        </div> 
    </div> 
</div> 

<div class="col-12 col-sm-6 col-md-4 mb-4">
    <div class="post-entry" onclick="toggleDescription('desc4')" style="transition: transform .2s; cursor: pointer;">
        <a href="#" class="post-thumbnail">
            <img src="{{ asset('images/58.jpeg') }}" alt="Pengecekan Ukuran Kursi" class="img-fluid rounded" style="height: 220px; object-fit: cover; width: 100%; border-radius: 10px;">
        </a>
        <div class='post-content-entry p-3' style='background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: box-shadow .3s;'>
            <h3 class='post-title' style='font-size: 18px; font-weight: bold;'>
                <a href="#" style="color: #333; text-decoration: none;">Pengecekan Ulang Ukuran Kursi</a>
            </h3>
            <div class="meta" id="desc4" style="display:none;">
                <span>- Melakukan pengecekan ulang untuk memastikan ukuran kursi sesuai dengan spesifikasi yang diinginkan.</span>
            </div>
        </div>
    </div> 
</div>

<div class='col-12 col-sm-6 col-md-4 mb-4'>
    <div class='post-entry' onclick='toggleDescription("desc5")' style='transition: transform .2s; cursor:pointer;'>
        <a href="#" class='post-thumbnail'>
            <img src="{{ asset('images/59.jpeg') }}" alt="Packing Kursi dengan Aman" class='img-fluid rounded' style='height: 220px; object-fit: cover; width: 100%; border-radius: 10px;'>
        </a>
        <div class='post-content-entry p-3' style='background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: box-shadow .3s;'>
            <h3 class='post-title' style='font-size: 18px; font-weight: bold;'>
                <a href="#" style="color:#333;text-decoration:none;">Packing Kursi dengan Aman</a>
            </h3>
            <div id='desc5' style='display:none;'> 
                - Proses packing dilakukan dengan hati-hati untuk mencegah kerusakan selama pengiriman.
            </div> 
        </div> 
    </div> 
</div>

<div class='col-12 col-sm-6 col-md-4 mb-4'>
    <div class='post-entry' onclick='toggleDescription("desc6")' style='transition:.2s cursor:pointer;'> 
        <a href="#" class='post-thumbnail'> 
            <video width='100%' controls style='max-height:220px;border-radius:.5rem;'> 
                <source src="{{ asset('images/99.mp4') }}" type='video/mp4'> Your browser does not support the video tag. 
            </video> 
        </a> 
        <div class='post-content-entry p-3' style='background-color:#fff;border-radius:.5rem;border-radius:.5rem;border-top-left-radius:.5rem;border-top-right-radius:.5rem;'> 
            <h3 style='font-size:.9rem;color:#333;font-weight:bold;'> 
                <a href="#" style ="color:#333;text-decoration:none;">Proses Perakitan Salah Satu Meja dalam Video</a> 
            </h3> 
            <div id ='desc6'style ='display:none;'> - Saksikan proses finishing secara langsung melalui video ini. 
            </div> 
        </div> 
    </div> 
</div>

<div class='col-12 col-sm-6 col-md-4 mb-4'>
    <div class='post-entry' onclick='toggleDescription("desc7")' style='transition: .2s; cursor: pointer;'> 
        <a href="#" class='post-thumbnail'> 
            <img src="{{ asset('images/72.JPEG') }}" alt="Proses Pengiriman Barang" class='img-fluid rounded' style="height: 180px; object-fit: cover; width: 100%; border-radius: 10px;"> 
        </a> 
        <div class='post-content-entry p-3' style='background-color: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);'> 
            <h3 style='font-size: 18px; color: #333; font-weight: bold;'> 
                <a href="#" style="color: #333; text-decoration: none;">Pengiriman Barang dengan Truck Kontainer</a> 
            </h3> 
            <div id='desc7' style='display:none;'> 
                - Proses pengiriman barang menggunakan truck kontainer sangat efisien untuk muatan besar. 
            </div> 
        </div> 
    </div> 
</div>
        </div> <!-- End Row -->

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
// Fungsi untuk mengubah visibilitas deskripsi
function toggleDescription(id) {
    const desc = document.getElementById(id);
    desc.style.display = (desc.style.display === "none") ? "block" : "none";
}
</script>

<style>
.post-title a {
    text-decoration: none;
    color: #333;
}
.post-title a:hover {
    color: #007bff;
}
.tip-item {
    background-color: #f9f9f9;
}
.tip-item h3 {
    margin-bottom: 10px;
}
</style>

<script src="path/to/bootstrap.bundle.js"></script> 
@endsection
