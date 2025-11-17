@extends('Frontend.layouts.index')

@section('content')

    <style>
        /* Make the whole page fill the screen height */
        html, body {
            height: 100%;
            margin: 0;
        }

        #header-carousel,
        .carousel-item,
        .carousel-item img {
            height: 100vh;
            object-fit: cover;
        }

        /* Fix footer widget container at bottom */
        .carousel-caption {
            bottom: 0 !important;
            top: 0 !important;
            transform: translateY(0);
            padding-bottom: 20px;
        }

        /* Responsive footer 3 columns → stack in mobile */
        @media (max-width: 768px) {
            .col-lg-4 {
                width: 100% !important;
                text-align: center;
                margin-bottom: 20px;
            }

            .carousel-caption h1 a {
                font-size: 1.3rem;
            }
        }

    </style>

    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/background.jpg" alt="Image">
                    <div class="carousel-caption align-items-center justify-content-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-footer-widget">
                                        <h1 style="color: #3a4172;">Main Menu</h1>
                                        <a href="/" class="fw-bold">Home</a><br />
                                        <a href="/about" class="fw-bold">About</a><br />
                                        <a href="/features" class="fw-bold">Features</a><br />
                                        <a href="" class="fw-bold">Services</a><br />
                                        <a href="/pricing" class="fw-bold">Pricing</a><br />
                                        <a href="/contact" class="fw-bold">Contact</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-footer-widget">
                                        <h1 style="color: #3a4172;">Software Type</h1>
                                        <a href="">Retail</a><br />
                                        <a href="">Distributor</a><br />
                                        <a href="">Manufacturing</a><br />
                                        <a href="">Marg Books</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-footer-widget">
                                        <h1 style="color: #3a4172;">Contact us</h1>
                                        <a href="">Smartweb IT Solutions</a><br />
                                        <a href="">Rajapeth Square, Amravati - 444601</a><br />
                                        <a href="">smartwebitsolutions2143@gmail.com</a><br />
                                        <a href="">www.margerp.com</a><br />
                                        <a href="">9834133361</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 style="text-align: center;"><a href="">Thanks For Visit Again</a></h1>
                    </div>
                </div>
            </div>
        </div>

@endsection