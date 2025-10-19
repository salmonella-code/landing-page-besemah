<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RSUD BESEMAH</title>
    <meta name="description" content="Pembangunan Kesehatan diselenggarakan untuk mewujudkan derajat kesehatan yang optimal. Untuk mencapai tujuan tersebut, dibutuhkan upaya pengelolaan sumber daya, baik oleh pemerintah atau masyarakat sehingga dapat tersedia pelayanan kesehatan yang efisien, bermutu dan terjangkau">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('lp/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/assets/css/style.css') }}">

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('icons/favicon/site.webmanifest') }}">
    {{-- end favicon --}}
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('lp/assets/img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('lp/assets/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">Beranda</a></li>
                                            <li><a href="{{ url('/geografis') }}">Geografis</a></li>
                                            <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>
                                            <li><a href="{{ url('/articles') }}">Artikel</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="#" class="btn header-btn">+62 730 621036 </a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by RSUD BESEMAH</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="https://www.instagram.com/rsud_besemah/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('lp/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('lp/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('lp/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('lp/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('lp/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('lp/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('lp/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('lp/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/jquery.sticky.js') }}"></script>

    <!-- counter , waypoint -->
    <script src="{{ asset('lp/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/jquery.countdown.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('lp/assets/js/contact.js') }}"></script>
    <script src="{{ asset('lp/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('lp/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('lp/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('lp/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('lp/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('lp/assets/js/main.js') }}"></script>

</body>
</html>
