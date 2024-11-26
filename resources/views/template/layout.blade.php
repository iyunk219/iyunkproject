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
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}"
        rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('asset/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}">
    <link href="{{ asset('asset/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Jayamahe Furniture</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.html"
                style="font-size: 28px; font-weight: bold; color: #f0e68c;">Jayamahe Furniture</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}"
                            href="{{ url('/produk') }}">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ url('/about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}"
                            href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li class="nav-item">
                        @guest
                            @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    {{-- <a class="nav-link" href="{{ url('/login') }}"><img src="{{ asset('images/user.svg') }}" alt="User"></a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/checkout') }}"><img src="{{ asset('images/cart.svg') }}"
                                alt="Cart"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

          @yield('content')
<footer class="footer-section">
    <div class="container" style="max-width: 600px; margin: auto;">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h2>Jayamahe Furniture</h2>
                <p>Solusi terbaik untuk furnitur dan dekorasi rumah Anda.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h2>Alamat Kami</h2>
                <p>
                    <i class="fas fa-map-marker-alt" style="color: #f0e68c;"></i> 
                    Jl. Ratu Kalinyamat Km 03,<br>
                    Rt05/Rw01 Blingoh,<br>
                    Donorojo, Jepara,<br>
                    Jawa Tengah, Indonesia
                </p>
                <p><strong>Jam Operasional:</strong><br> Senin - Sabtu: 08:00 - 18:00</p>
            </div>
            <div class="col-md-4 mb-4">
                <h2>Kontak Kami</h2>
                <p>
                    <i class="fas fa-phone" style="color: #f0e68c;"></i> Telepon: +628889879872<br>
                    <i class="fas fa-envelope" style="color: #f0e68c;"></i> Email: hello@jayamahefurnitur.com
                </p>
                <div class="social-icons" style="margin-top: 10px;">
                    <a href="#" title="Instagram" class="social-icon">
                        <i class="fab fa-instagram" style="font-size: 24px;"></i>
                    </a>
                    <a href="https://wa.me/6281234567890" title="WhatsApp" class="social-icon">
                        <i class="fab fa-whatsapp" style="font-size: 24px;"></i>
                    </a>
                    <a href="#" title="TikTok" class="social-icon">
                        <i class="fab fa-tiktok" style="font-size: 24px;"></i>
                    </a>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 10px;">
            <p style="text-align:left; font-size: 12px;">Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Jayamahe Furniture. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>

<style>
    /* Gaya Footer */
    .footer-section {
        background-color: #3b5d50; 
        color: #ffffff;
        padding: 30px 0; /* Penambahan padding untuk ruang lebih */
        font-family: Arial, sans-serif; /* Font yang lebih modern */
    }
    .footer-section h2 {
        font-size: 24px;
        font-weight: bold;
        border-bottom: 2px solid #f0e68c;
        margin-bottom: 15px;
    }
    .footer-section h3 {
        font-size: 18px;
        font-weight: bold;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    .footer-section p {
        font-size: 14px;
        line-height: 1.6; /* Menambah jarak antar baris untuk keterbacaan */
        margin-bottom: 10px; /* Mengurangi jarak di bawah paragraf */
    }
    .social-icons a {
        margin-right: 15px; /* Spasi antar ikon sosial media */
        color: #f0e68c;
    }
    .social-icons a:hover {
        color: #ffffff; /* Efek hover pada ikon sosial media */
    }
    @media (max-width: 576px) {
        .footer-section {
            padding: 20px 10px; /* Padding responsif untuk perangkat kecil */
        }
    }
</style>
		<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('asset/js/tiny-slider.js')}}"></script>
		<script src="{{asset('asset/js/custom.js')}}"></script>
	</body>

</html>
@stack('bottom')
