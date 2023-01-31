@extends('frontend.app')

@section('content')

<main class="main">

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb" style="background: url(/assests/frontend/assets/img/breadcrumb/breadcrumb.jpg)">
        <div class="container">
        <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
    <!-- End  Breadcrumb -->

    <!-- Start Contact
    ============================================= -->
    <div class="contact-area de-padding">
        <div class="container">
            <div class="contact-page-info grid-2">
                <div class="contact-left">
                    <h2 class="mb-50">
                        Hello! Have you want
                        to need any inquary or
                        have any Questions?
                    </h2>
                    <ul class="contact-list">
                        <li>
                            <h5 class="fz-18-5">Address:</h5>
                            <span>Dhanmondi, Dhaka</span>
                        </li>
                        <li>
                            <h5 class="fz-18-5">Phone:</h5>
                            <span>000- 1234- 678, 000- 1234- 678,</span>
                        </li>
                        <li>
                            <h5 class="fz-18-5">Email:</h5>
                            <span>lms@mail.com</span>
                        </li>
                    </ul>
                </div>
                <div class="contact-right">
                    <form class="row g-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control input-style-2" placeholder="Enter Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control input-style-2" placeholder="Subject">
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control input-style-2" placeholder="Enter Email">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control input-style-2" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-4 mt-20">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

</main>

@endsection

