@extends('Frontend.layouts.index')

@section('content')

    <style>

        .hide {
            display: none;
        }
        .active-btn {
            background-color: green !important;
            color: #fff !important;
        }
        
        .button {
            /* border: none; */
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            /* margin: 4px 2px; */
            cursor: pointer;
        }

        .pricing-box {
            background: #ffffff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: 0.3s ease-in-out;
        }

        .pricing-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .pricing-box .price h2 {
            font-size: 32px;
            color: #000;
        }

        .pricing-box ul li {
            padding: 5px 0;
            color: #333;
        }

        .height-fix {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .height-fix ul {
            margin-top: auto;
        }

        .small-box {
            padding: 18px !important;
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            .height-fix {
                height: auto;
            }
            .small-box {
                margin-bottom: 20px;
            }
        }

        .two-col-sublist {
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
            column-gap: 25px;
            margin-top: 8px;
        }

        .two-col-sublist li {
            break-inside: avoid;
            margin-bottom: 6px;
        }

        .scroll-box {
            max-height: 220px;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 10px;
            background: #fff;
        }

        .two-col-sublist {
            list-style: disc;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4px 20px;
        }

        .two-col-sublist li {
            white-space: nowrap;
        }

    </style>

    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid py-5">
                    <div class="container py-5">
                        <div class="text-center">
                            <div class="title wow fadeInUp" data-wow-delay="0.1s">
                                <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded title-center">
                                    <h1 style="color: #3a4172;">Distributor Service</h1>
                                    <!-- <h1>How We Help You</h1> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="tabs active" style="text-align: center;">
                                    <button class="button button1 active-btn" style="background-color: darkblue;" onclick="showTab(1)">Pharma</button>
                                    <button class="button button2" style="background-color: darkblue;" onclick="showTab(2)">FMCG</button>
                                    <button class="button button3" style="background-color: darkblue;" onclick="showTab(3)">Automobile</button>
                                    <button class="button button4" style="background-color: darkblue;" onclick="showTab(4)">Wholesale</button>
                                    <button class="button button5" style="background-color: darkblue;" onclick="showTab(5)">Warehouse</button>
                                </ul>
                            </div>
                        </div>

                        <div id="tab1" class="tab-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Pharma Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/pharma_distributor.png">
                                                            <!-- <img src="img/pharmacy2.jpg" style="margin-top: 19%;"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            MARG Pharma Software for distribution or Supply Chain is designed to handle all the needs
                                                            in most efficient, effective & accurate way. MARG Pharmaceutical Distribution Software was launched
                                                            in the market during 2000. Since then MARG Pharma Billing Software is committed to provide the best
                                                            supporting system for the Retail & Distribution Business upgrading itself from time to time according
                                                            to the market needs.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            A single/ multi-location Pharma Distribution Software for Stockists, Wholesalers, Distributors Gives you
                                                            full control over inventory | Fast billing | Finances | Accounts | Auto-Bank Reconciliation with
                                                            140+ Banks 1000's of reports & MIS | Direct filing of GST returns.
                                                        </h5>
                                                    <div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab2" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">FMCG Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/fmcg_distributor.jpg">
                                                            <!-- <img src="img/Garment1.jpg" style="margin-top: 19%;"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            A single/ multi-location FMCG Software for Stockists, Wholesalers, Distributors Gives you
                                                            full control over inventory | Fast billing | Finances | Accounts | Auto-Bank Reconciliation
                                                            with 140+ Banks 1000's of reports & MIS | Direct filing of GST returns.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Marg FMCG Software is a GST ready inventory & accounting software adding value to the businesses
                                                            of more than 1 Million across 34 countries around the globe and ensuring increased profits.
                                                            Generate invoices, get the best deals by comparing the nearby suppliers with inbuilt advanced search
                                                            features and reports.
                                                        </h5>
                                                    <div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab3" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Automobile Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/automobile_industry.webp">
                                                            <!-- <img src="img/supermarket.jpg" style="margin-top: 19%;"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            MARG Automobile Accounting Software for Individual Shop or Retail Chain is designed to handle all the needs in most efficient,
                                                            effective & accurate way. MARG Automobile Store Software was launched in the market during 2000.
                                                            Since then MARG Automobile Inventory Software is committed to provide the best supporting system for the Retail & Distributor Business
                                                            upgrading itself from time to time according to the market needs.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Marg® Erp is a GST-ready inventory & accounting software that lets generate invoices easily, manage your debtors, finance,
                                                            reconcile bank transactions, track batch wise inventory in very smart manner, generate 1000's of reports & MIS, and
                                                            file GST returns effortlessly.
                                                        </h5>
                                                    <div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab4" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Wholesale Distributor Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/wholesale_distribution.jpg">
                                                            <!-- <img src="img/supermarket.jpg" style="margin-top: 19%;"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            MARG Wholesale Distribution Software for Distribution or Supply Chain is designed to handle all the needs in most efficient,
                                                            effective & accurate way.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Marg® Erp is a GST-ready inventory & accounting software that lets generate invoices easily, manage your debtors, finance,
                                                            reconcile bank transactions, track batch wise inventory in very smart manner, Multi Rate, Price List, & Discount,
                                                            Cash / Credit / Split Invoice & Challan, Sales Return & Replacement on Sale Bill, Party Wise Rate, Discount and Scheme,
                                                            Salesman / Route / Area Wise Bills & Reports, Indication for Loss, Min, Max, New / Old Rate & Expiry, Negative Stock Billing Facility,
                                                            generate 1000's of reports & MIS, and file GST returns effortlessly.
                                                        </h5>
                                                    <div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab5" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Warehouse Management Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/wharehouse_management.webp">
                                                            <!-- <img src="img/RESTAURANT1.webp" style="margin-top: 19%;"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            MARG Warehouse Management Software for distribution or Supply Chain is designed to handle all the needs in most efficient,
                                                            effective & accurate way. MARG Warehouse Software was launched in the market during 2000. Since then MARG Warehouse Management Software
                                                            is committed to provide the best supporting system for the Retail & Distribution Business upgrading itself from time to time according
                                                            to the market needs.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Marg® Erp is a GST-ready inventory & accounting software that lets generate invoices easily, manage your debtors, finance,
                                                            reconcile bank transactions, track batch wise inventory in very smart manner, generate 1000's of reports & MIS, and
                                                            file GST returns effortlessly.
                                                        </h5>
                                                    <div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-footer-widget">
                        <h1 style="color: #3a4172;">Contact us</h1>
                        <a href="/" class="fw-bold">Smartweb IT Solutions</a><br />
                        <a href="/" class="fw-bold">Rajapeth Square, Amravati - 444601</a><br />
                        <a href="/" class="fw-bold">smartwebitsolutions2143@gmail.com</a><br />
                        <a href="/" class="fw-bold">www.margerp.com</a><br />
                        <a href="/" class="fw-bold">9834133361</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-footer-widget">
                        <h1 style="color: #3a4172;">Quick Link</h1>
                        <a href="/" class="fw-bold">Home</a><br />
                        <a href="/about" class="fw-bold">About</a><br />
                        <a href="/features" class="fw-bold">Features</a><br />
                        <a href="" class="fw-bold">Services</a><br />
                        <a href="/pricing" class="fw-bold">Pricing</a><br />
                        <a href="/contact" class="fw-bold">Contact</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="single-footer-widget">
                        <h1 style="color: #3a4172;">Features</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/" class="fw-bold">. GST Billing & Return Filing</a><br />
                                <a href="/" class="fw-bold">. Easy Accounting</a><br />
                                <a href="/" class="fw-bold">. Inventory Management</a><br />
                                <a href="/" class="fw-bold">. e-Invoicing</a><br />
                                <a href="/" class="fw-bold">. Payment & Reconciliation</a>
                            </div>
                            <div class="col-md-6">
                                <a href="/" class="fw-bold">. Barcode Management</a><br />
                                <a href="/" class="fw-bold">. Online Purchase Import</a><br />
                                <a href="/" class="fw-bold">. Send Invoices on WhatsApp</a><br />
                                <a href="/" class="fw-bold">. eRetail Web Application</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function showTab(tabNumber) {

            // Hide All Tabs
            document.querySelectorAll(".tab-content").forEach(div => div.classList.add("hide"));

            // Show Selected Tab
            document.getElementById("tab" + tabNumber).classList.remove("hide");

            // Remove Active Class From All Buttons
            document.querySelectorAll("button").forEach(btn => btn.classList.remove("active-btn"));

            // Add Active Class To Clicked Button
            document.querySelector(".button" + tabNumber).classList.add("active-btn");
        }

    </script>

@endsection