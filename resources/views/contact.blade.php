@extends('template.layout')
@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Contact</h1>
                    <p class="mb-4">Ruang yang indah dimulai dari pilihan yang tepat! Belanja sekarang dan temukan item-item yang akan mempercantik rumah Anda!</p>
                    <p>
                        <a href="#" class="btn btn-secondary me-2">Belanja Sekarang</a>
                        <a href="#" class="btn btn-white-outline">Jelajahi</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap" style="text-align: right;">
                    <img src="images/222.jpg" alt="Background Image" style="width: 85%; height: auto; object-fit: cover;  margin-left: auto; display: block;">
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- End Hero Section -->
<!-- Start Contact Form -->
<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8 pb-4 form-container">
                    <!-- Contact Form -->
                    <form id="contact-form" onsubmit="sendWhatsAppMessage(event)">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama" class="text-black">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp" class="text-black">No Hp</label>
                                    <input type="text" id="no_hp" name="no_hp" class="form-control" required>
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div class="form-group mb-4">
                                <label for="email" class="text-black">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <!-- Address Field -->
                            <div class="form-group mb-4">
                                <label for="alamat" class="text-black">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" required>
                            </div>

                            <!-- Message Field -->
                            <div class="form-group mb-5">
                                <label for="message" class="text-black">Pesan Anda</label>
                                <textarea id="message" name="message" cols=30 rows=5 class="form-control" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type=submit class=btn btn-primary-hover-outline>Kirim Pesan</button> 
                        </div>
                    </form>

                    <!-- Notification Message -->
                    <div id ="notification" class ="alert alert-success notification " style="display:none;">
                        Pesan Anda telah berhasil dikirim!
                    </div>

                </div> <!-- /.form-container -->

                <!-- Maps Section -->
                <div class="col-md-4 pb-4"> <!-- New column for maps -->
                    <h5>Factory – Jepara</h5>
                    <p>Jl, Ratu Kalinyamat Km 03, Rt05/Rw01 Blingoh, Donorojo, Jepara<br/>
                       Central of Java<br/>
                       Indonesia
                    </p>
                    <h6>Reach Us</h6>
                    <p>Telp: +62 (822) -2010 -5482<br/>
                       Mobile/WA: +62 (822) -2010 -5482<br/>
                       Email: jayamahe1820@gmail.com
                    </p>
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16237760.212399734!2d100.36868409999998!3d-6.484030299999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e712fedfd3f97fb%3A0xa8a8303f94b8e589!2sJayamahe%20furniture!5e0!3m2!1sid!2sid!4v1732508462274!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> <!-- /.col-md-4 -->

            </div> <!-- /.row -->
        </div> <!-- /.block -->
    </div> <!-- /.container -->
</div> <!-- End Contact Form Section -->
</div>

<script>
// Function to send message to WhatsApp
function sendWhatsAppMessage(event) {
    event.preventDefault(); 

    // Get values from input fields
    var nama = document.getElementById('nama').value.trim();
    var noHp = document.getElementById('no_hp').value.trim();
    var email = document.getElementById('email').value.trim();
    var alamat = document.getElementById('alamat').value.trim(); 
    var message = document.getElementById('message').value.trim();

    // Create the message to be sent with formatting
    var fullMessage = `*Nama:* ${nama}\n*No HP:* ${noHp}\n*Email:* ${email}\n*Alamat:* ${alamat}\n*Pesan:* ${message}`;

    // Encode URI to ensure proper formatting
    var encodedMessage = encodeURIComponent(fullMessage);
    
    // WhatsApp URL
    var whatsappUrl = `https://wa.me/6282220105482?text=${encodedMessage}`;

    // Open WhatsApp URL in a new tab
    window.open(whatsappUrl, '_blank');

    // Show notification message
    document.getElementById('notification').style.display = 'block';
    
    // Optionally, clear the form after submission
    document.getElementById('contact-form').reset();
}
function initMap() {
    // Lokasi factory (ganti dengan koordinat yang sesuai)
    var lokasiFactory = {lat: -6.575, lng: 110.738}; 

    // Buat peta
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: lokasiFactory
    });

    // Tambahkan penanda
    var marker = new google.maps.Marker({
        position: lokasiFactory,
        map: map,
        title: 'Factory – Jepara'
    });
}
</script>
    <style>

        .form-container {
            flex: 1; /* Mengambil ruang yang tersedia */
            padding-right: 20px; /* Spasi antara form dan peta */
        }
        #map {
            height: 80px; /* Tinggi peta */
            width: 80%; /* Lebar peta */
        }
    </style>
<script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection