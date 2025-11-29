@extends('Frontend.layouts.index')

@section('content')

    <style>

        #header-carousel .carousel-item {
            position: relative;
            min-height: 1000px;
        }

        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding-top: 100px;
            /* background: rgba(0, 0, 0, .7); */
            z-index: 1;
        }
    
        #header-carousel img {
            object-fit: cover;
            height: 50vh;
        }

        @media (max-width: 768px) {
            #header-carousel img {
                height: 55vh;
            }
            
        }

        #header-carousel img {
            object-fit: cover;
            height: 100vh;
        }

        @media (max-width: 768px) {
            #header-carousel img {
                height: 55vh;
            }

            .carousel-caption h1 {
                font-size: 28px !important;
            }
            .carousel-caption p {
                font-size: 14px !important;
            }
        }

        /* Footer Responsive */
        .single-footer-widget h1 {
            font-size: 26px;
            color: #3a4172;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .single-footer-widget p,
        .single-footer-widget a {
            color: #3a4172;
            font-size: 16px;
            font-weight: 600;
        }
        .single-footer-widget a:hover {
            color: #ffffff;
        }

        @media(max-width: 768px){
            .single-footer-widget {
                margin-bottom: 25px;
                text-align: center;
            }
        }

        /* Footer background */
        .footer-bg {
            /* background: #ffffffcc; */
            padding: 40px 20px;
            margin-top: -5px;
        }

        .description-text {
            color: #3a4172;
            white-space: normal;
            overflow: visible;
            text-overflow: initial;
            display: block;
            line-height: 1.6;
        }

        .animated {
            overflow: visible !important;
        }

    </style>

    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/background.jpg" alt="Image">
                    <div class="carousel-caption align-items-center justify-content-center" style="margin-top: 18%;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-footer-widget">
                                        <h1 style="color: #3a4172;">Main Menu</h1>
                                        <a href="/" class="fw-bold">Home</a><br />
                                        <a href="/about" class="fw-bold">About</a><br />
                                        <a href="/features" class="fw-bold">Features</a><br />
                                        <a href="/pricing" class="fw-bold">Pricing</a><br />
                                        <a href="/contact" class="fw-bold">Contact</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-footer-widget">
                                        <h1 style="color: #3a4172;">Software Type</h1>
                                        <a href="/retail">Retail</a><br />
                                        <a href="/distributor">Distributor</a><br />
                                        <a href="/manufacturing">Manufacturing</a><br />
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