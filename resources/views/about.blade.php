@extends('template.layout')
@section('content')

			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Tentang Kami</h1>
								<p class="mb-4">Kami di Jayamahe Furnitur berkomitmen untuk menyediakan furnitur berkualitas tinggi dengan desain yang modern. Temukan kenyamanan dan gaya dalam setiap produk kami.</p>
								<p><a href="" class="btn btn-secondary me-2">Belanja Sekarang</a><a href="#" class="btn btn-white-outline">Jelajahi</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
	<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Mengapa Memilih Kami</h2>
                <p>Jayamahe Furniture menawarkan solusi desain interior modern yang berkualitas. Kami berkomitmen untuk memberikan pengalaman berbelanja yang memuaskan dan produk terbaik untuk rumah Anda.</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Pengiriman Cepat" class="img-fluid">
                            </div>
                            <h3>Pengiriman Cepat &amp; Gratis Ongkir Wilayah Jawa & Bali</h3>
                            <p>Pengiriman cepat dan gratis ongkir untuk wilayah Jawa dan Bali. Produk sampai ke tangan Anda dengan aman.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/shopping-cart.svg" alt="Belanja Mudah" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon keranjang belanja -->
                            </div>
                            <h3>Belanja Mudah</h3>
                            <p>Antarmuka ramah pengguna membuat belanja di Jayamahe Furniture lebih mudah dan menyenangkan.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Dukungan 24/7" class="img-fluid"> <!-- Tetap sama -->
                            </div>
                            <h3>Dukungan 24/7</h3>
                            <p>Tim dukungan kami siap membantu Anda kapan saja. Hubungi kami untuk bantuan atau informasi lebih lanjut.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/settings.svg" alt="Desain Tiga Opsi" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon desain -->
                            </div>
                            <h3>Menyediakan 3 Desain</h3>
                            <p>Kami menawarkan tiga desain unik: minimalis, ukiran Jepara, dan custom.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/wood-pile-svgrepo-com.svg" alt="Bahan Terbaik" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon bahan -->
                            </div>
                            <h3>Bahan-Bahan Terbaik</h3>
                            <p>Kami menggunakan kayu jati dan bahan berkualitas tinggi lainnya untuk daya tahan produk.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/hammer-sharp-svgrepo-com.svg" alt="Teknik Pembuatan" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon teknik -->
                            </div>
                            <h3>Teknik Pembuatan Teruji</h3>
                            <p>Kami menerapkan teknik pembuatan yang telah teruji untuk memastikan kualitas produk kami.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/trend-up-svgrepo-com.svg" alt="Desain Terkini" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon tren desain -->
                            </div>
                            <h3>Desain Mengikuti Trend Terkini</h3>
                            <p>Kami selalu mengikuti tren desain terkini agar produk kami up-to-date dan sesuai kebutuhan pasar.</p>
                        </div>
                    </div>

                </div><!-- End of Row -->
            </div><!-- End of Col LG 6 -->

            <!-- Image Section -->
            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{asset('images/why-choose-us-img.jpg')}}" alt="Mengapa Memilih Kami" class="img-fluid">
                </div>
            </div><!-- End of Col LG 5 -->

        </div><!-- End of Row -->
    </div><!-- End of Container -->
</div><!-- End of Why Choose Section -->

	<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimoni Pelanggan</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">
                        
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Furnitur dari Jayamahe benar-benar mengubah tampilan rumah saya! Kualitasnya luar biasa dan sangat nyaman. Saya sangat puas dengan pelayanan yang diberikan.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Andi Pratama</h3>
                                            <span class="position d-block mb-3">Pengusaha, Jakarta</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Saya sangat merekomendasikan Jayamahe Furniture! Desainnya modern dan elegan, dan pengirimannya sangat cepat. Benar-benar pengalaman berbelanja yang menyenangkan.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Siti Aminah</h3>
                                            <span class="position d-block mb-3">Ibu Rumah Tangga, Bandung</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Kualitas furnitur yang saya beli dari Jayamahe sangat memuaskan. Desainnya sesuai dengan gaya rumah saya dan sangat nyaman digunakan. Terima kasih, Jayamahe Furnitur!&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Budi Santoso</h3>
                                            <span class="position d-block mb-3">Arsitek, Surabaya</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- END item -->

                    </div>

                </div>
            </div>
        </div>
    </div>
	</div>
		<!-- End Testimonial Slider -->

<style type="text/css">
    .img-wrap {
    display: flex; /* Menggunakan flexbox untuk penataan */
    justify-content: center; /* Memusatkan logo secara horizontal */
    align-items: center; /* Memusatkan logo secara vertikal */
    height: 100%; /* Mengatur tinggi sesuai kebutuhan */
}

.img-wrap img {
    max-width: 100%; /* Membuat gambar responsif */
    height: auto; /* Memastikan aspek rasio gambar tetap terjaga */
    border-radius: 10px; /* Menambahkan sudut melengkung pada gambar jika diinginkan */
}
</style>
@endsection
