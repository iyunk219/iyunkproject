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
                <div class="hero-img-wrap">
                    <img src="{{ asset('images/couch.png') }}" class="img-fluid" alt="Couch">
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
                <div class="col-md-8 col-lg-8 pb-4">
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                </div>
                                <div class="service-contents">
                                    <p>Jl Ratu Kalinyamat, Blingoh, Donorojo, Jepara, Jawa Tengah, Indonesia</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                    </svg>
                                </div>
                                <div class="service-contents">
                                    <p>info@dijayamahefurnitur.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885 .511a1.745..."/>
                                    </svg>
                                </div>
                                <div class="service-contents">
                                    <p><a href="https://wa.me/620211234567" class="text-black">+62 (021) - 1234567</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form method="POST" action="/send-message"> <!-- Update the action URL -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname" class="text-black">Nama Depan</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname" class="text-black">No Hp</label>
                                    <input type="text" id="no_hp" name="no_hp" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="email" class="text-black">Alamat Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group mb-5">
                            <label for="message" class=text-black>Pesan</label>
                            <textarea id=message name=message cols=30 rows=5 class=form-control required></textarea> <!-- Added required attribute -->
                        </div>

                        <button type=submit class=btn btn-primary-hover-outline>Kirim Pesan</button> <!-- Fixed button -->
                    </form>

                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.block -->
    </div> <!-- /.container -->
</div> <!-- End Contact Form Section -->
@endsection