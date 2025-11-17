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
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/background.jpg" alt="Image">
                        <div class="carousel-caption flex-column align-items-center justify-content-center">
                            <div class="title mx-5 px-5 animated slideInDown">
                                <div class="title-center">
                                    <h5 class="fw-bold" style="color: #3a4172;">Smartweb IT Solutions</h5>
                                    <h1 style="color: #3a4172;">Business Software Solutions By Smartweb IT Solutions, Trusted by 500+ Users in Amravati - Maharastra </h1>
                                </div>
                            </div>
                            <p class="fs-5 mb-5 animated slideInDown" style="color: #3a4172;">
                                We have deals in readymeade Softwares available for Pharmaceutical Industry, FMCG, POS , Garments, Mobile / Electronic Appliances
                                business and more. Due to easyness, flexibility, self-customization are the major reasons behind its success. Marg ERP has it's expertise
                                in providing the perfect customized inventory and accounting solutions for all business to get GST compliant. we deliver Inventory and
                                Accounting Software Solutions to optimized businesses and health them in this GST transfomation journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="footer-bg">
            <div class="container">
                <div class="row">

                    <!-- Contact -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h1 class="fw-bold" style="color: #3a4172">Contact Us</h1>
                            <a href="">Smartweb IT Solutions</a><br />
                            <a href="">Rajapeth Square, Amravati - 444601</a><br />
                            <a href="">smartwebitsolutions2143@gmail.com</a><br />
                            <a href="">www.margerp.com</a><br />
                            <a href="">9834133361</a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h1 class="fw-bold" style="color: #3a4172">Quick Link</h1>
                            <a href="/">Home</a><br>
                            <a href="/about">About</a><br>
                            <a href="/features">Features</a><br>
                            <a href="">Services</a><br>
                            <a href="/pricing">Pricing</a><br>
                            <a href="/contact">Contact</a>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="col-lg-5">
                        <div class="single-footer-widget">
                            <h1 class="fw-bold" style="color: #3a4172">Features</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="">. GST Billing & Return Filing</a><br />
                                    <a href="">. Easy Accounting</a><br />
                                    <a href="">. Inventory Management</a><br />
                                    <a href="">. e-Invoicing</a><br />
                                    <a href="">. Payment & Reconciliation</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="">. Barcode Management</a><br />
                                    <a href="">. Online Purchase Import</a><br />
                                    <a href="">. Send Invoices on WhatsApp</a><br />
                                    <a href="">. eRetail Web Application</a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection