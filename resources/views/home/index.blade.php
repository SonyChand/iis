<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Website Travel</title>
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
                <h1 class="sitename">Website Travel</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#portfolio">Travel</a></li>
                    <li><a href="#contact">Kontak</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('frontend/assets/') }}/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2>Jelajahi Dunia Bersama Kami</h2>
                        <p>Temukan destinasi impian Anda dan nikmati pengalaman perjalanan yang tak terlupakan bersama
                            layanan terbaik kami.</p>
                        <a href="#about" class="btn-get-started">Lihat Destinasi</a>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
                <p>Kami adalah agen perjalanan yang berdedikasi untuk memberikan pengalaman wisata terbaik dengan
                    layanan profesional dan harga terbaik.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('frontend/assets/') }}/img/about.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Kenapa Memilih Kami?</h3>
                            <ol>
                                <li>Rencana perjalanan fleksibel – Sesuaikan perjalanan sesuai kebutuhan Anda.</li>
                                <li>Pemandu wisata profesional – Ditemani oleh tim berpengalaman.</li>
                                <li>Harga terbaik – Paket perjalanan dengan harga kompetitif.</li>
                                <li>Destinasi menarik – Eksplorasi berbagai tempat eksotis</li>
                            </ol>

                            <p>
                                Nikmati pengalaman perjalanan yang tak terlupakan bersama kami!
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /About Section -->




        <!-- Services Section -->


        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Travel</h2>
                <p>Destinasi Travel yang mungkin anda kunjungi</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($travels as $travel)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $travel->category }}">
                            <img src="{{ asset('storage/' . $travel->image) }}" class="img-fluid"
                                alt="{{ $travel->title }}">
                            <div class="portfolio-info">
                                <h4>{{ $travel->title }}</h4>
                                <p>{{ Str::limit($travel->description, 100) }}</p>
                                <a href="{{ asset('storage/' . $travel->image) }}" title="{{ $travel->title }}"
                                    data-gallery="portfolio-gallery-{{ $travel->category }}"
                                    class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <a href="{{ route('home.detail', $travel->id) }}" title="More Details"
                                    class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div>


            </div>

            </div>

        </section><!-- /Portfolio Section -->



        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi Kami</p>
            </div><!-- End Section Title -->

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Kawali, Ciamis</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>No Hp</h3>
                                <p>081315121612</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>iissriwahyuni2@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

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
