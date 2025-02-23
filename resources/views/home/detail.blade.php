<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Detail Travel - {{ $travel->name }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('frontend/assets/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="{{ asset('frontend/assets/') }}/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('frontend/assets/') }}/img/logo.png" alt=""> -->
                <h1 class="sitename">Lumia</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header>

    <main class="main">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow border-0">
                        <div class="card-header border-bottom py-4">
                            <h2 class="mb-0 text-center text-primary">{{ $travel->name }}</h2>
                        </div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <img src="{{ asset('storage/' . $travel->image) }}"
                                    class="img-fluid rounded shadow-sm">
                            </div>
                            <div class="mt-3">
                                <h5 class="text-muted"><i class="bi bi-geo-alt"></i> {{ $travel->location }}</h5>
                                <p class="mt-3">{{ $travel->description }}</p>
                                <h4 class="text-primary fw-bold">Rp{{ number_format($travel->price, 0, ',', '.') }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer id="footer" class="footer light-background">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Iis Sriwahyuni</strong> <span>All Rights
                    Reserved</span>
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

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend/assets/') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/assets/') }}/js/main.js"></script>

</body>

</html>
