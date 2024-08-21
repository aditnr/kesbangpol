<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('judul') - Kesbangpol</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/tema/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('tema/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('tema/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('tema/css/main.css') }}" rel="stylesheet">

    @yield('extracss')

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('tema/img/logo.png') }}" alt="" data-aos="fade">
                <div class="container" data-aos="fade-right">
                    <h4>KESBANGPOL</h4>
                    <p>Kota Tasikmalaya<br></p>
                </div>
            </a>


            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home<br></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kesbangpol
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/berita') }}">Profil Kesbangpol</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pengumuman') }}">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pengumuman') }}">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pengumuman') }}">Tugas Pokok dan Fungsi</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a href="{{ url('/') }}#about">About</a></li> --}}
                    {{-- <li><a href="{{ url('/') }}#services">Services</a></li>
                    <li><a href="{{ url('/') }}#team">Team</a></li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/berita') }}">Berita</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="{{ url('/berita') }}">Berita</a></li> --}}
                    {{-- <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li> --}}
                    <li><a href="{{ url('/') }}#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @if (Auth::check())
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/logout') }}"
                    style="background-color: red !important;">Logout</a>
            @else
                <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/login') }}">Login</a>
            @endif

        </div>
    </header>

    @yield('hero')

    <main class="main">



        @yield('main')

    </main>

    <footer id="footer" class="footer">



        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="d-flex align-items-center">
                        <span class="sitename">KESBANGPOL</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Kota Tasikmalaya</p>
                        <p class="mt-3"><strong>Telp:</strong> <span>(021) 3800590</span></p>
                        <p><strong>Email:</strong> <span>kesbangpol@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/kesbangpol_kota_tasikmalaya"><i
                                class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright 2024</span> <strong class="px-1 sitename">Diskominfo Kota Tasikmalaya</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tema/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('tema/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('tema/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('tema/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('tema/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('tema/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('tema/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('tema/js/main.js') }}"></script>

    @yield('extrajs')

</body>

</html>
