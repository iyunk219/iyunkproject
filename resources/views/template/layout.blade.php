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
    <style>
        .footer-section {
            background-color: #3b5d50;
            padding: 40px 20px;
            color: #fff;
        }

        .footer-logo {
            color: #f0e68c;
            /* Warna logo */
            font-size: 24px;
            font-weight: bold;
        }

        .address-section {
            color: #f0e68c;
            /* Warna untuk alamat */
            font-weight: bold;
            font-size: 18px;
        }

        .contact-info {
            color: #e0e0e0;
            /* Warna untuk informasi kontak */
            font-size: 14px;
        }

        .social-icon {
            font-size: 30px;
            /* Ukuran ikon */
            color: #f0e68c;
            /* Warna ikon */
            margin-right: 15px;
            /* Spasi antar ikon */
            transition: color 0.3s;
            /* Efek transisi saat hover */
        }

        .social-icon:hover {
            color: #e0e0e0;
            /* Warna saat hover */
        }
    </style>
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
    <!-- End Header/Navigation -->

    @yield('content')
    <footer class="footer-section">
        <div class="container">
            <div class="row text-center">
                <!-- Column 1: Company Name and Description -->
                <div class="col-md-4 mb-4">
                    <h2 class="footer-logo">Jayamahe Furniture</h2>
                    <p style="font-size: 14px;">Selamat datang di Jayamahe Furniture, toko online pilihan untuk semua
                        kebutuhan furnitur dan dekorasi rumah Anda.</p>
                    <p style="font-size: 14px;">Temukan beragam pilihan kursi makan, kursi santai, dan bangku untuk
                        menciptakan ruang makan yang nyaman.</p>
                </div>

                <!-- Column 2: Address -->
                <div class="col-md-4 mb-4">
                    <p class="address-section">Alamat:</p>
                    <h2 style="font-size: 14px; color: #e0e0e0;">Jl, Ratu Kalinyamat Km 03, Rt05/Rw01 Blingoh, Donorojo,
                        Jepara, Jawa Tengah, Indonesia</h2>
                    <p style="font-size: 14px; color: #e0e0e0;">Senin - Sabtu: 08:00 - 18:00</p>
                </div>

                <!-- Column 3: Contact Information and Social Media -->
                <div class="col-md-4 mb-4 text-left">
                    <p style="font-size: 24px; font-weight: bold; color: #f0e68c;">Akun Sosial Media:</p>

                    <p class="contact-info">Jika Anda ada pertanyaan terkait pemesanan, produk atau layanan kami yang
                        lainnya. Sapa kami di kontak dibawah ini ya!</p>
                    <p class="contact-info">Phone: +628889879872</p>
                    <p class="contact-info">Email: hello@jayamahefurnitur.com</p>
                    <div class="list-unstyled d-flex justify-content-center"> <!-- Flexbox for alignment -->
                        <!-- Logo Tokopedia -->
                        <!--  <a href="https://www.tokopedia.com/" title="Tokopedia" style="margin-right: 15px;">
                        <img src="https://seeklogo.com/vector-logo/339743/tokopedia" alt="Logo Tokopedia" style="width: 30px; height: auto;">
                    </a>  -->
                        <!-- Ikon Instagram -->
                        <a href="#" title="Instagram" class="social-icon">
                            <i class="fab fa-instagram"></i> <!-- Ikon Instagram -->
                        </a>
                        <!-- Ikon WhatsApp -->
                        <a href="https://wa.me/6281234567890" title="WhatsApp" class="social-icon">
                            <i class="fab fa-whatsapp"></i> <!-- Ikon WhatsApp -->
                        </a>
                        <!-- Ikon TikTok -->
                        <a href="#" title="TikTok" class="social-icon">
                            <i class="fab fa-tiktok"></i> <!-- Ikon TikTok -->
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div style="margin-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 10px;">
                <p style="text-align:center; font-size: 12px;">Hak Cipta &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Jayamahe Furniture. Semua Hak Dilindungi.
                </p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/select2.min.js') }}"></script>
</body>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

</html>
@stack('bottom')
