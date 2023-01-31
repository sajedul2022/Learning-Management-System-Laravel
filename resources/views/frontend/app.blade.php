<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Education- Learning Management System </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/assests/frontend/assets/img/logo/favicon.png">
    <!-- ========== Start Stylesheet ========== -->
    <link href="/assests/frontend/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/fontawesome.min.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/animate.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="/assests/frontend/assets/css/jquery-ui.css" rel="stylesheet" />
    <link href="/assests/frontend/style.css" rel="stylesheet">
    <link href="/assests/frontend/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

</head>

<body id="bdy">

    <!-- Start PreLoader
    ============================================= -->

    <!-- Start PreLoader-->

    <!-- Start Header Top
    ============================================= -->
    <div class="header-top bg-2 main-2 py-4">
        <div class="container">
            <div class="header-top-info">
                <div class="email">
                    <ul class="header-top-list">
                        <li><i class="ti-phone"></i>Phone: +880168652111</li>
                        <li><i class="ti-email"></i>Support@lms.com</li>

                    </ul>
                </div>
                <div class="login-reg">
                    <ul class="header-top-list">



                        @if (Route::has('login'))

                            @auth
                                <li><a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> </li>
                            @else
                                <li> <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> </li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth

                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Start header
    ============================================= -->
    <header class="header">
        <div class="main-navigation main-2">
            <nav id="navbar_top" class="navbar navbar-expand-lg">
                <div class="container g-0">
                    <a class="navbar-brand" href="/">
                        <img src="/assests/frontend/assets/img/logo/logo.png" class="logo-display" alt="thumb">
                        <img src="/assests/frontend/assets/img/logo/black-logo.png" class="logo-scrolled"
                            alt="thumb">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="ti-menu-alt"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item"><a class="nav-link" href="/"> Home </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}" > Contact </a>
                                {{-- {{ route('contact',) }} --}}
                            </li>

                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container-fluid.// -->
            </nav>
        </div>
    </header>
    <!-- End header -->

    {{-- Start content  --}}

    @yield('content')

    {{-- Start content  --}}






    <div class="clearfix"></div>

    <!-- Start Footer
============================================= -->
    <footer>
        <div class="footer-widget">
            <div class="container">
                <div class="footer-widget-wpr de-padding">
                    <div class="footer-widget-box about-us">
                        <h4 class="footer-widget-title">About Us</h4>
                        <div class="footer-icon mb-20">
                            <img src="/assests/frontend/assets/img/logo/logo.png" alt="thumb">
                        </div>
                        <p class="mb-20">
                            Affronting discretion as do is announcing. Now months esteem oppose nearer enable too six.
                            as do nearer is announcing.
                        </p>
                        <div class="footer-adrs">
                            <ul>
                                <li>
                                    <i class="fas fa-street-view"></i>
                                    <span>Dhanmondi, Dhaka</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-volume"></i>
                                    <span>+8816856221</span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <span>info@lms.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="/"><span>SEO</span> Small Business</a></li>
                            <li><a href="/">Enterprise <span>SEO</span></a></li>
                            <li><a href="/"><span>SEO</span> local Servies</a></li>
                            <li><a href="/">National <span>SEO</span></a></li>
                            <li><a href="/">International <span>SEO</span></a></li>
                            <li><a href="/">Our Product</a></li>
                            <li><a href="/">Doucumentation</a></li>
                            <li><a href="/">Our Services</a></li>
                            <li><a href="/">Company</a></li>
                            <li><a href="/">What we do?</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget-box popular-course">
                        <h4 class="footer-widget-title">Popular Course</h4>
                        <ul class="footer-course">
                            <li>
                                <div class="footer-post d-flex align-items-center">
                                    <img src="/assests/frontend/assets/img/singlepost/70x70.png" alt="thumb">
                                    <div class="post-content">
                                        <a href="/">
                                            <h5>
                                                Is at purse tried jokes china.
                                            </h5>
                                        </a>
                                        <span class="footer-post-date">
                                            Free
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="footer-post d-flex align-items-center">
                                    <img src="/assests/frontend/assets/img/singlepost/70x70.png" alt="thumb">
                                    <div class="post-content">
                                        <a href="/">
                                            <h5>
                                                Is at purse tried jokes china.
                                            </h5>
                                        </a>
                                        <span class="footer-post-date">
                                            $10
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="footer-post d-flex align-items-center">
                                    <img src="/assests/frontend/assets/img/singlepost/70x70.png" alt="thumb">
                                    <div class="post-content">
                                        <a href="/">
                                            <h5>
                                                Is at purse tried jokes china.
                                            </h5>
                                        </a>
                                        <span class="footer-post-date">
                                            $15
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Quick Contact</h4>
                        <div class="footer-contact">
                            <form>
                                <input class="inp input-1" type="text" placeholder="Your Name">
                                <input class="inp input-2" type="email" placeholder="Enter Mail">
                                <textarea class="inp input-3" placeholder="Message"></textarea>
                                <button type="submit" class="btn-1">Contact</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p class="mb-0">Copyright © 2023. All Rights Reserved <a href="/">
                            Sajedul Islam</a>.</p>
                    <ul class="footer-social">
                        <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="/"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->

    <!-- Start Scroll top
============================================= -->
    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
    <!-- End Scroll top-->

    <!-- jQuery Frameworks
============================================= -->
    <script src="/assests/frontend/assets/js/jquery-1.12.4.min.js"></script>
    <script src="/assests/frontend/assets/js/popper.min.js"></script>
    <script src="/assests/frontend/assets/js/bootstrap.min.js"></script>
    <script src="/assests/frontend/assets/js/jquery.easing.min.js"></script>
    <script src="/assests/frontend/assets/js/bootstrap-menu.js"></script>
    <script src="/assests/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assests/frontend/assets/js/modernizr.custom.13711.js"></script>
    <script src="/assests/frontend/assets/js/wow.min.js"></script>
    <script src="/assests/frontend/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assests/frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assests/frontend/assets/js/jquery-ui.min.js"></script>
    <script src="/assests/frontend/assets/js/YTPlayer.min.js"></script>
    <script src="/assests/frontend/assets/js/jquery.appear.js"></script>
    <script src="/assests/frontend/assets/js/count-to.js"></script>
    <script src="/assests/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="/assests/frontend/assets/js/main.js"></script>

</body>

</html>
