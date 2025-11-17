@extends('Frontend.layouts.index')

@section('content')

<style>
    
    #header-carousel-1 img {
        object-fit: cover;
        height: 50vh;
    }

    @media (max-width: 768px) {
        #header-carousel-1 img {
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

        <!-- SLIDE 1 -->
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('img/background.jpg') }}" alt="Image">

            <div class="carousel-caption flex-column align-items-center justify-content-center">
                <div class="title mx-5 px-5 animated slideInDown">
                    <div class="title-center">
                        <h5 class="fw-bold" style="color:#3a4172;">Marg ERP</h5>
                        <h1 class="display-1" style="color:#3a4172;">All Problems One Solution</h1>
                    </div>
                </div>

                <p class="fs-5 mb-5 animated slideInDown description-text" style="color:#3a4172;">
                    Smartweb IT Solutions is partner of india's No. 1 Inventory & Accounting Software Marg ERP
                    has you covered end-to-end, from Billing and Inventory to GST, e-invoicing, and beyond.
                    with innovative features that are easy to understand and apply, it is the perfect solution for every
                    type of business.
                </p>
            </div>
        </div>
    </div>
</div>

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

<div id="header-carousel-1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="text-center">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-center">
                                <h1 class="fw-bold" style="color:#3a4172;">Features</h1>
                                <!-- <h1>How We Help You</h1> -->
                            </div>
                        </div>
                    </div>
                    <div class="service-item service-item-left">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5">
                                <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                                    <img class="img-fluid rounded-circle" src="img/Retail.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">
                                    <h3 class="text-uppercase">Retail Softwares</h3>
                                    <p class="mb-4">
                                        Works In All Types Of Retail Trade Business. Retail Software by Marg- Easy & fast billing,
                                        small to large store management, complete monitoring and control over stocks, reduced pilferage,
                                        get best deals from suppliers with smart purchase features, run discount & scheme,
                                        easy invoicing along with 1000's of reports to keep you in full control of your business.
                                    </p>
                                    <a class="btn btn-outline-primary border-2 px-4" href="#!">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item service-item-right">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 order-md-1 text-md-end">
                                <div class="service-img p-5 wow fadeInLeft" data-wow-delay="0.2s">
                                    <img class="img-fluid rounded-circle" src="img/distributor.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="service-text px-5 px-md-0 py-md-5 text-md-end wow fadeInLeft" data-wow-delay="0.5s">
                                    <h3 class="text-uppercase">Distributor Softwares</h3>
                                    <p class="mb-4">
                                        Billing Software Are specially designed for Distributors, Wholesale, C&F, Stockist with Mobile Apps for Customers,
                                        Salesman & Owners. A single/ multi-location Pharma Distribution Software for Stockists, Wholesalers,
                                        Distributors Gives you full control over inventory | Fast billing | Finances | Accounts |
                                        Auto-Bank Reconciliation with 140+ Banks 1000's of reports & MIS | Direct filing of GST returns.
                                    </p>
                                    <a class="btn btn-outline-primary border-2 px-4" href="#!">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item service-item-left">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5">
                                <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                                    <img class="img-fluid rounded-circle" src="img/Manufacturing.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">
                                    <h3 class="text-uppercase">Manufacturing Softwares</h3>
                                    <p class="mb-4">
                                        MARG is Simple to use, Easy to implement, Flexible to customize and complete solution for
                                        the unique business processes and needs of the Manufacturing units as per WHO-GMP &
                                        Schedule-"M". MARG Manufacturing Software is designed to handle all the needs in most efficient,
                                        effective & accurate way.
                                    </p>
                                    <a class="btn btn-outline-primary border-2 px-4" href="#!">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item service-item-right">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 order-md-1 text-md-end">
                                <div class="service-img p-5 wow fadeInLeft" data-wow-delay="0.2s">
                                    <img class="img-fluid rounded-circle" src="img/MobileApps.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="service-text px-5 px-md-0 py-md-5 text-md-end wow fadeInLeft" data-wow-delay="0.5s">
                                    <h3 class="text-uppercase">Marg Books</h3>
                                    <p class="mb-4">

                                    </p>
                                    <a class="btn btn-outline-primary border-2 px-4" href="#!">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- FOOTER -->
<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="footer-bg">
        <div class="container">
            <div class="row">

                <!-- Contact -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h1 class="fw-bold">Contact Us</h1>
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
                        <h1 class="fw-bold">Quick Link</h1>
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
                        <h1 class="fw-bold">Features</h1>
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
