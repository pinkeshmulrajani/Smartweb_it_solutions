@extends('Frontend.layouts.index')

@section('content')

    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid py-5">
                    <div class="container py-5">
                        <div class="text-center">
                            <div class="title wow fadeInUp" data-wow-delay="0.1s">
                                <div class="title-center">
                                    <h1 class="fw-bold" style="color: #3a4172;">Features</h1>
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