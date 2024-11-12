<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}">
    <link href="{{asset('asset/css/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <title>Jayamahe Furniture</title>
</head>

<body>
    <!-- Start Header/Navigation -->
        <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

            <div class="container">
                <a class="navbar-brand" href="index.html" style="font-size: 28px; font-weight: bold; color: #f0e68c;">Jayamahe Furniture</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}" href="{{ url('/produk') }}">Katalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>

                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                       <!--  <li class="nav-item">
                            <a class="nav-link" href="#"><img src="{{ asset('images/user.svg') }}" alt="User"></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cart') }}"><img src="{{ asset('images/cart.svg') }}" alt="Cart"></a>
                        </li>
                    </ul>
                </div>
            </div>
                
        </nav>
        <!-- End Header/Navigation -->

          @yield('content')
<footer class="footer-section" style="background-color: #3b5d50; padding: 40px 20px; color: #fff;">
    <div class="container">
        <div class="row text-center">
            <!-- Column 1: Company Name -->
            <div class="col-md-4 mb-4">
                <h2 class="footer-logo" style="font-size: 24px; font-weight: bold; color: #f0e68c;">Jayamahe Furniture</h2>
                <p style="font-size: 14px; color: #e0e0e0;">Furnitur berkualitas untuk rumah Anda.</p>
            </div>

            <!-- Column 2: Address -->
            <div class="col-md-4 mb-4">
                <p style="font-size: 24px; font-weight: bold; color: #f0e68c;">Alamat: </p>
                <h2 style="font-size: 14px; color: #e0e0e0;">Jl gsuyg, Klepu, Jepara, Jawa Tengah, Indonesia</h2>
            </div>

            <!-- Column 3: Social Media -->
            <div class="col-md-4 mb-4 text-left">
                <p style="font-size: 24px; font-weight: bold; color: #f0e68c;">Akun Sosial Media</p>
                <div class="list-unstyled d-flex justify-content-center"> <!-- Flexbox for alignment -->
                    <a href="https://www.tokopedia.com/" title="Tokopedia" style="margin-right: 15px;">
                        <img src="images/tokped.png" alt="Logo Tokopedia" style="width: 30px; height: auto;">
                    </a>
                    <a href="#" title="Instagram" style="margin-right: 15px; color: #f0e68c;">
                        <img src="images/ig.png" alt="Logo Instagram" style="width: 30px; height: auto;">
                    </a>
                    <a href="https://wa.me/6281234567890" title="WhatsApp" style="color: #f0e68c;">
                        <img src="images/we.png" alt="Logo WhatsApp" style="width: 30px; height: auto;">
                    </a>
                </div>
            </div>
        </div>

        <div style="margin-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 10px;">
            <p style="text-align:center; font-size: 12px;">Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script>. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>
		<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('asset/js/tiny-slider.js')}}"></script>
		<script src="{{asset('asset/js/custom.js')}}"></script>
	</body>

</html>
@stack('bottom')