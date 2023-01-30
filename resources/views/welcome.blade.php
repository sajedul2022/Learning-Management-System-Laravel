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
                            <li class="nav-item"><a class="nav-link" href="/"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/"> Contact </a>
                            </li>

                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container-fluid.// -->
            </nav>
        </div>
    </header>
    <!-- End header -->

    <main class="main main-2">

        <!-- Start Slider
  ============================================= -->
        <div class="hero-2" style="background-image: url(assets/img/header/hdr-1.png)">
            <div class="hero-2-container">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-xl-6">
                            <div class="hero-2-content">
                                <h2>Best Online Learning Platform</h2>
                                <p>
                                    Learning Management System!
                                </p>
                                <div class="hero-2-btn">
                                    <a href="/" class="btn-4">View Courses</a>
                                    <a href="/" class="btn-5">Start Trial</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <img src="/assests/frontend/assets/img/header/hero.svg" alt="thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider -->

        <!-- Start Category
  ============================================= -->
        <div class="cate-2 de-padding">
            <div class="container">
                <div class="site-title-2 grid-2 align-items-center">
                    <div class="site-title-2-left mb-60">
                        <h2 class="mb-20 hero-2-tll">Our Populer Subjects</h2>
                        <p class="mb-0">
                            Best Online Learning Platform.
                        </p>
                    </div>
                    <div class="site-title-2-right txt-right">
                        <a href="/" class="btn-5">View All</a>
                    </div>
                </div>
                <div class="cate-2-wpr grid-4">
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-desktop"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Computer Science</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-loop"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Web Development</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-briefcase"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Business Study</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-harddrives"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Data Science</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-music"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Music Course</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-android"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>App Development</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-microsoft-alt"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Microsoft Office</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                    <div class="cate-2-box">
                        <div class="cate-2-icon">
                            <i class="ti-bar-chart"></i>
                        </div>
                        <div class="cate-2-info">
                            <h3>Project Management</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, aut.
                            </p>
                            <a href="/" class="btn-3">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Category -->

        <!-- Start Courses
  ============================================= -->
        <div class="course-area bg de-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-tile text-center mb-60">
                            <span class="sub-title">Top Courses</span>
                            <h2 class="mb-0">Our Popular Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="course-wpr grid-3">
                    <div class="course-box c-box-2">
                        <div class="course-hand">
                            <img src="/assests/frontend/assets/img/course/hand-2.png" alt="thumb">
                        </div>
                        <div class="course-pic">
                            <img src="/assests/frontend/assets/img/course/course.png" alt="thumb">
                            <div class="course-price">
                                <span class="course-num">$32.00</span>
                            </div>
                            <ul class="course-meta">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    25 Students
                                </li>
                                <li class="user">
                                    <i class="fa fa-file"></i>
                                    5 Lessons
                                </li>
                            </ul>
                            <div class="c-2-shape">
                                <img src="/assests/frontend/assets/img/shape/curve-line.png" alt="thumb">
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="course-desc">
                                <h3 class="course-title">
                                    <a href="/">
                                        Testy & Delicious Food Recipes for Lunch
                                    </a>
                                </h3>
                            </div>
                            <div class="course-tech">
                                <img src="/assests/frontend/assets/img/singlepost/40x40.png" alt="thumb">
                                <div class="course-bio">
                                    <h5>Fedrick Gutam</h5>
                                    <span>Senior Cooker</span>
                                </div>
                            </div>
                            <div class="course-buy">
                                <a href="/" class="btn-5">Purchase</a>
                                <div class="course-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box c-box-2">
                        <div class="course-hand">
                            <img src="/assests/frontend/assets/img/course/hand-2.png" alt="thumb">
                        </div>
                        <div class="course-pic">
                            <img src="/assests/frontend/assets/img/course/course.png" alt="thumb">
                            <div class="course-price">
                                <span class="course-num">$32.00</span>
                            </div>
                            <ul class="course-meta">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    25 Students
                                </li>
                                <li class="user">
                                    <i class="fa fa-file"></i>
                                    5 Lessons
                                </li>
                            </ul>
                            <div class="c-2-shape">
                                <img src="/assests/frontend/assets/img/shape/curve-line.png" alt="thumb">
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="course-desc">
                                <h3 class="course-title">
                                    <a href="/">
                                        Testy & Delicious Food Recipes for Lunch
                                    </a>
                                </h3>
                            </div>
                            <div class="course-tech">
                                <img src="/assests/frontend/assets/img/singlepost/40x40.png" alt="thumb">
                                <div class="course-bio">
                                    <h5>Fedrick Gutam</h5>
                                    <span>Senior Cooker</span>
                                </div>
                            </div>
                            <div class="course-buy">
                                <a href="/" class="btn-5">Purchase</a>
                                <div class="course-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box c-box-2">
                        <div class="course-hand">
                            <img src="/assests/frontend/assets/img/course/hand-2.png" alt="thumb">
                        </div>
                        <div class="course-pic">
                            <img src="/assests/frontend/assets/img/course/course.png" alt="thumb">
                            <div class="course-price">
                                <span class="course-num">$32.00</span>
                            </div>
                            <ul class="course-meta">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    25 Students
                                </li>
                                <li class="user">
                                    <i class="fa fa-file"></i>
                                    5 Lessons
                                </li>
                            </ul>
                            <div class="c-2-shape">
                                <img src="/assests/frontend/assets/img/shape/curve-line.png" alt="thumb">
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="course-desc">
                                <h3 class="course-title">
                                    <a href="/">
                                        Testy & Delicious Food Recipes for Lunch
                                    </a>
                                </h3>
                            </div>
                            <div class="course-tech">
                                <img src="/assests/frontend/assets/img/singlepost/40x40.png" alt="thumb">
                                <div class="course-bio">
                                    <h5>Fedrick Gutam</h5>
                                    <span>Senior Cooker</span>
                                </div>
                            </div>
                            <div class="course-buy">
                                <a href="/" class="btn-5">Purchase</a>
                                <div class="course-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box c-box-2">
                        <div class="course-hand">
                            <img src="/assests/frontend/assets/img/course/hand-2.png" alt="thumb">
                        </div>
                        <div class="course-pic">
                            <img src="/assests/frontend/assets/img/course/course.png" alt="thumb">
                            <div class="course-price">
                                <span class="course-num">$32.00</span>
                            </div>
                            <ul class="course-meta">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    25 Students
                                </li>
                                <li class="user">
                                    <i class="fa fa-file"></i>
                                    5 Lessons
                                </li>
                            </ul>
                            <div class="c-2-shape">
                                <img src="/assests/frontend/assets/img/shape/curve-line.png" alt="thumb">
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="course-desc">
                                <h3 class="course-title">
                                    <a href="/">
                                        Testy & Delicious Food Recipes for Lunch
                                    </a>
                                </h3>
                            </div>
                            <div class="course-tech">
                                <img src="/assests/frontend/assets/img/singlepost/40x40.png" alt="thumb">
                                <div class="course-bio">
                                    <h5>Fedrick Gutam</h5>
                                    <span>Senior Cooker</span>
                                </div>
                            </div>
                            <div class="course-buy">
                                <a href="/" class="btn-5">Purchase</a>
                                <div class="course-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box c-box-2">
                        <div class="course-hand">
                            <img src="/assests/frontend/assets/img/course/hand-2.png" alt="thumb">
                        </div>
                        <div class="course-pic">
                            <img src="/assests/frontend/assets/img/course/course.png" alt="thumb">
                            <div class="course-price">
                                <span class="course-num">$32.00</span>
                            </div>
                            <ul class="course-meta">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    25 Students
                                </li>
                                <li class="user">
                                    <i class="fa fa-file"></i>
                                    5 Lessons
                                </li>
                            </ul>
                            <div class="c-2-shape">
                                <img src="/assests/frontend/assets/img/shape/curve-line.png" alt="thumb">
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="course-desc">
                                <h3 class="course-title">
                                    <a href="/">
                                        Testy & Delicious Food Recipes for Lunch
                                    </a>
                                </h3>
                            </div>
                            <div class="course-tech">
                                <img src="/assests/frontend/assets/img/singlepost/40x40.png" alt="thumb">
                                <div class="course-bio">
                                    <h5>Fedrick Gutam</h5>
                                    <span>Senior Cooker</span>
                                </div>
                            </div>
                            <div class="course-buy">
                                <a href="/" class="btn-5">Purchase</a>
                                <div class="course-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box c-box-2">
                        <div class="course-hand">
                            <img src="/assests/frontend/assets/img/course/hand-2.png" alt="thumb">
                        </div>
                        <div class="course-pic">
                            <img src="/assests/frontend/assets/img/course/course.png" alt="thumb">
                            <div class="course-price">
                                <span class="course-num">$32.00</span>
                            </div>
                            <ul class="course-meta">
                                <li class="user">
                                    <i class="fa fa-user"></i>
                                    25 Students
                                </li>
                                <li class="user">
                                    <i class="fa fa-file"></i>
                                    5 Lessons
                                </li>
                            </ul>
                            <div class="c-2-shape">
                                <img src="/assests/frontend/assets/img/shape/curve-line.png" alt="thumb">
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="course-desc">
                                <h3 class="course-title">
                                    <a href="/">
                                        Testy & Delicious Food Recipes for Lunch
                                    </a>
                                </h3>
                            </div>
                            <div class="course-tech">
                                <img src="/assests/frontend/assets/img/singlepost/40x40.png" alt="thumb">
                                <div class="course-bio">
                                    <h5>Fedrick Gutam</h5>
                                    <span>Senior Cooker</span>
                                </div>
                            </div>
                            <div class="course-buy">
                                <a href="/" class="btn-5">Purchase</a>
                                <div class="course-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Courses -->





        <!-- Start Blog
  ============================================= -->

        <!-- End Blog -->



    </main>

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
