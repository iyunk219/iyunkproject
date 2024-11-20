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
    <div class="hero-img-wrap" style="text-align: right; ""> <!-- Align text to the right -->
        <img src="images/BG.png" alt="Background Image" style="width: 90%; height: auto; object-fit: cover; border: 2px solid #ccc; margin-left: auto; display: block;">
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
                             <div class="feature-content">
                            <h3>Pengiriman Cepat &amp; Gratis Ongkir Wilayah Jawa & Bali</h3><br>
                            <p>Pengiriman cepat dan gratis ongkir untuk wilayah Jawa dan Bali. Produk sampai ke tangan Anda dengan aman.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/shopping-cart.svg" alt="Belanja Mudah" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon keranjang belanja -->
                            </div>
                             <div class="feature-content">
                            <h3>Belanja Mudah</h3><br>
                            <p>Antarmuka ramah pengguna membuat belanja di Jayamahe Furniture lebih mudah dan menyenangkan.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Dukungan 24/7" class="img-fluid"> <!-- Tetap sama -->
                            </div>
                             <div class="feature-content">
                            <h3>Dukungan 24/7</h3><br>
                            <p>Tim dukungan kami siap membantu Anda kapan saja. Hubungi kami untuk bantuan atau informasi lebih lanjut.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/settings.svg" alt="Desain Tiga Opsi" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon desain -->
                            </div>
                             <div class="feature-content">
                            <h3>Menyediakan 3 Desain</h3>
                            <p>Kami menawarkan tiga desain unik: minimalis, ukiran Jepara, dan custom.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/wood-pile-svgrepo-com.svg" alt="Bahan Terbaik" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon bahan -->
                            </div>
                             <div class="feature-content">
                            <h3>Bahan-Bahan Terbaik</h3>
                            <p>Kami menggunakan kayu jati dan bahan berkualitas tinggi lainnya untuk daya tahan produk.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/hammer-sharp-svgrepo-com.svg" alt="Teknik Pembuatan" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon teknik -->
                            </div>
                             <div class="feature-content">
                            <h3>Teknik Pembuatan Teruji</h3>
                            <p>Kami menerapkan teknik pembuatan yang telah teruji untuk memastikan kualitas produk kami.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/trend-up-svgrepo-com.svg" alt="Desain Terkini" class="img-fluid" style="width: 24px; height: auto; margin-right: 15px;"> <!-- Ganti dengan ikon tren desain -->
                            </div>
                             <div class="feature-content">
                            <h3>Desain Mengikuti Trend Terkini</h3>
                            <p>Kami selalu mengikuti tren desain terkini agar produk kami up-to-date dan sesuai kebutuhan pasar.</p>
                        </div>
                        </div>
                    </div>

                </div><!-- End of Row -->
            </div><!-- End of Col LG 6 -->

            <!-- Image Section -->
            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{asset('images/why-choose-us-img.jpg')}}" alt="Mengapa Memilih Kami" class="img-fluid full-width-image">
                </div>
            </div><!-- End of Col LG 5 -->

        </div><!-- End of Row -->
    </div><!-- End of Container -->
</div><!-- End of Why Choose Section -->
<div class="products-section">
    <h2 class="section-title">Produk Mebel Kami</h2>
    <p>Kami memproduksi furniture berkualitas tinggi untuk berbagai kebutuhan, termasuk rumah, hotel, villa, restoran, dan perkantoran. Bahan baku utama kami adalah kayu jati pilihan, namun kami juga menggunakan kayu mahoni, mindi, bayur, dan jenis kayu tropis lainnya.</p>

    <p>Kami dapat mengerjakan berbagai model furniture karena kami adalah tukang kayu berpengalaman. Ada tiga kategori desain yang kami tawarkan:</p>
    
    <ul class="product-list">
        <li>
            <strong class="clickable" onclick="toggleDescription('desc-minimalis')">Mebel Minimalis:</strong>
            <div id="desc-minimalis" class="description" style="display: none;">
                Mebel minimalis dirancang dengan kesederhanaan dan fungsionalitas dalam pikiran. Setiap potongan dirancang untuk mengoptimalkan ruang tanpa mengorbankan gaya. Cocok untuk ruang tamu modern, mebel ini menghadirkan keanggunan yang bersih dan tidak rumit.
            </div>
        </li>
        <li>
            <strong class="clickable" onclick="toggleDescription('desc-ukiran')">Mebel Ukiran Jepara:</strong>
            <div id="desc-ukiran" class="description" style="display: none;">
                Mebel ukiran Jepara merupakan simbol keindahan dan kerajinan tangan yang tinggi. Setiap detail ukiran dikerjakan dengan penuh perhatian oleh pengrajin berpengalaman. Produk ini tidak hanya berfungsi sebagai furniture tetapi juga sebagai karya seni yang menambah nilai estetika pada ruangan Anda.
            </div>
        </li>
        <li>
            <strong class="clickable" onclick="toggleDescription('desc-custom')">Mebel Desain Custom:</strong>
            <div id="desc-custom" class="description" style="display: none;">
                Kami memahami bahwa setiap pelanggan memiliki kebutuhan unik. Dengan layanan desain custom kami, Anda dapat menciptakan furniture sesuai dengan spesifikasi dan gaya pribadi Anda. Dari pemilihan bahan hingga desain akhir, kami bekerja sama dengan Anda untuk mewujudkan produk yang sempurna.
            </div>
        </li>
    </ul>

    <p>Kami percaya bahwa setiap produk yang kami buat memiliki nilai seni dan kualitas tinggi yang dapat memenuhi kebutuhan pelanggan kami.</p>
</div>

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
                        <!-- Testimonial Item 1 -->
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

                        <!-- Testimonial Item 2 -->
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

                        <!-- Testimonial Item 3 -->
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
                    </div> <!-- END testimonial-slider -->
                </div> <!-- END testimonial-slider-wrap -->
            </div> <!-- END col-lg-12 -->
        </div> <!-- END row justify-content-center -->
    </div> <!-- END container -->
</div> <!-- END testimonial-section -->

                    </div>

                </div>
            </div>
        </div>
    </div>
	</div>
		<!-- End Testimonial Slider -->
<script>
function toggleDescription(id) {
    const description = document.getElementById(id);
    if (description.style.display === "none") {
        description.style.display = "block"; // Tampilkan deskripsi
    } else {
        description.style.display = "none"; // Sembunyikan deskripsi
    }
}
</script>
<style type="text/css">

/* General Styles */
body {
    font-family: 'Arial', sans-serif; /* Set a clean font for the body */
    background-color: #f4f4f4; /* Light background color for contrast */
}

.container {
    max-width: 1200px; /* Limit container width for better readability */
    margin: 0 auto; /* Center the container */
}
/* Why Choose Us Section */
.why-choose-section {
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9; /* Light grey background for contrast */
    margin-bottom: 30px; /* Space below the section */
}

.section-title {
    color: #333;
    margin-bottom: 30px; /* Increased margin for better separation */
    font-size: 2.5em; /* Larger font size for the title */
}
/* Feature Card Styles */
.feature {
    display: flex; /* Flexbox for alignment of icon and text */
    align-items: flex-start; /* Align items at the start vertically */
    padding: 20px; /* Padding around each feature */
    background-color: #ffffff; /* White background for features */
    border-radius: 8px; /* Rounded corners for features */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    margin-bottom: 20px; /* Space between features */
}

.icon {
    margin-right: 20px; /* Space between icon and text block */
}

.icon img {
    width: 60px; /* Increased size for icons */
    height: auto; /* Maintain aspect ratio */
}

.feature-content {
    display: block; /* Ensure content is displayed as a block */
}

/* Ensure h3 and p are stacked vertically */
h3 {
    color: #007bff; /* Blue color for headings to indicate importance */
    margin-bottom: 5px; /* Space below heading */
}

p {
    color: #555; /* Darker color for better readability */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .feature {
        flex-direction: row; /* Keep icon and text in a row on smaller screens */
        align-items: center; /* Center align items vertically in row layout */
        margin-bottom: 15px; /* Space between features on smaller screens */
    }

    .icon img {
        margin-bottom: 0; /* Remove bottom margin when not stacked */
        margin-right: 15px; /* Maintain right margin for spacing in row layout */
    }
}
/* Products Section */
.products-section {
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9; /* Light grey background for contrast */
    margin-bottom: 30px; /* Space below the section */
}

.products-section h2 {
    color: #333;
    margin-bottom: 20px;
    font-size: 2.5em; /* Larger font size for the title */
    text-align: left; /* Align title to the left */
}

.product-list {
    list-style-type: none;
    padding-left: 0; /* Remove default padding */
}

.product-list li {
    margin-bottom: 20px; /* Increased margin for better spacing */
    padding: 20px; /* Add padding for better spacing */
    background-color: #ffffff; /* White background for items */
    border-radius: 8px; /* Rounded corners for items */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition on hover */
}

.product-list li:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
}

.product-list li strong {
    color: #007bff; /* Blue color for clickable titles */
}

.description {
    margin-top: 5px; /* Space above description */
    color: #555; /* Darker color for better readability */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .products-section {
        padding: 20px; /* Reduce padding on smaller screens */
    }
    
    .product-list li {
        padding: 15px; /* Reduce padding in list items on smaller screens */
        margin-bottom: 15px; /* Adjust margin for smaller screens */
    }
}
/* Testimonial Section */
.testimonial-section {
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9; /* Light grey background for contrast */
    margin-top: 30px; /* Space above the section */
}

.testimonial-slider-wrap {
    position: relative;
}

.testimonial-block {
    border-radius: 10px;
    padding: 20px;
    background-color: #ffffff; /* White background for testimonials */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.3s ease; /* Smooth transition on hover */
}

.testimonial-block:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}

blockquote {
    font-style: italic; /* Italic style for quotes */
    color: #555; /* Darker color for better readability */
}

.author-info h3 {
    margin-top: 10px; /* Space above author name */
    color: #007bff; /* Blue color for author name */
}

.author-info .position {
    color: #777; /* Grey color for position text */
}

/* Adding images to testimonials */
.testimonial-block img {
    border-radius: 50%; /* Circular images for authors */
    width: 60px; /* Fixed size for images */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 10px; /* Space below image */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .testimonial-section {
        padding: 20px; /* Reduce padding on smaller screens */
    }

    .testimonial-block {
        padding: 15px; /* Reduce padding in testimonial blocks on smaller screens */
    }
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection
