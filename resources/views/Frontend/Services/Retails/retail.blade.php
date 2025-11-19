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
                                <div class="title-center">
                                    <h1 style="color: #3a4172;">Retail Service</h1>
                                    <!-- <h1>How We Help You</h1> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="tabs active" style="text-align: center;">
                                    <button class="button button1 active-btn" style="background-color: darkblue;" onclick="showTab(1)">Pharmacy</button>
                                    <button class="button button2" style="background-color: darkblue;" onclick="showTab(2)">Garment</button>
                                    <button class="button button3" style="background-color: darkblue;" onclick="showTab(3)">Supermarket</button>
                                    <button class="button button4" style="background-color: darkblue;" onclick="showTab(4)">POS</button>
                                    <button class="button button5" style="background-color: darkblue;" onclick="showTab(5)">Restaurant</button>
                                </ul>
                            </div>
                        </div>

                        <div id="tab1" class="tab-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Medical Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/pharmacy1.jpg">
                                                            <img src="img/pharmacy2.jpg" style="margin-top: 19%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            Pharmacy Software helps Pharmacists to access different records like: Billing Information,
                                                            Reports, Stock Details, Order Management, and many more. Marg Software had come up with
                                                            the solutions which are prior beneficial for the Pharmacists. In Marg Pharmacy Software there are
                                                            features for automatic updates on Negative Stocks, Prescription Pending, Expiry Stock alerts,
                                                            Reminder regarding appointments.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            In Marg Pharmacy Software, Stock maintenance is quite easier; you can maintain stock via - 
                                                            general way, Supplier wise, Company wise, Product wise, Batch wise etc.. Evaluation of stock
                                                            becomes easier you can set alert over the stocks which are costly or less costly; expiry dates
                                                            wise, negative stock. Even in Marg Pharmacy Software, you can set boundations over Sale or
                                                            purchase of restricted items (Narcotics, H Schedule, H1 Schedule). The best segment of
                                                            the software is its reporting and easier way to file vat & e return. There are 2000+ types of
                                                            reports which will help in comparing your sales and purchase, profit and loss through which you
                                                            can think of the betterment of the sales.
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
                                            <h3 style="color: #3a4172; text-align:center;">Garment Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/Garment.png">
                                                            <img src="img/Garment1.jpg" style="margin-top: 19%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            Garment Software by Marg ERP helps you grow your business with speed. Manage inventory levels,
                                                            get rid of over/under stock, alerts for non moving items, supplier wise best deals, discount &
                                                            scheme management along with 1000's of reports to run your Garment business wisely.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Garment industry is a growing industry so many people start indulging in garment business.
                                                            The unique problem which every garment industry facing is no proper management of stocks which
                                                            leads into disturbed accounts. There is major issue of managing stocks as per seasons.
                                                            There is need of extra management as there are many categories like Brand, Color, Size or Price
                                                            etc. to be differentiated. Sometimes there are chances of garments get misplaced may be due to
                                                            some hurry. Though Marg Garment Software helps in managing the garments with respect of their
                                                            different categories such as Brands, Sizes, and Price etc... , even there is provision of
                                                            managing stock of garments season- wise.
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
                                            <h3 style="color: #3a4172; text-align:center;">SuperMarket Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/supermarket1.webp">
                                                            <img src="img/supermarket.jpg" style="margin-top: 19%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            Marg Supermarket Software allows you bar-coding of your products in defined formats as well as user defined
                                                            formats. Even you can scan and print multiple barcodes. There is a provision of maintaining stocks/ ledgers of
                                                            multi location godowns. The most beneficial feature of Marg Supermarket Software is its Expiry Management -
                                                            it will show alert of the stocks which are going to expiry soon to avoid loss; also check your physical stock
                                                            with computer stock which lets you update you stock/purchase/sale data with ease. You can import as well as
                                                            export data in any format which will reduce your manual work. In Marg Supermarket Software, you can preview,
                                                            print, export reports in any format (.xls, .csv, .dbf, .txt formats) as well as reports can be emailed.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Supermarket!!!! It is a large form of grocery store which offers a wide variety of foods and household products that are well
                                                            organized into aisles. In supermarket business, accurate inventory information is essential as many of the items are
                                                            perishable with limited shelf lives. If the stocks of fast selling items are less then it will lead into loss of sales and
                                                            even if the stocks of low selling items are more then it will also lead in loss of sales. So it means properly organized inventory/stocks
                                                            should be maintained so that items should not be over-ordered or over stocked as it does not scramble the path of grabbing better
                                                            opportunities. Marg Supermarket Software contains such features which distinct the software from other software's.
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
                                            <h3 style="color: #3a4172; text-align:center;">POS Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/POS.jpg">
                                                            <!-- <img src="img/supermarket.jpg" style="margin-top: 19%;"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            A Smart GST-ready inventory & accounting software that helps you keep a control on your store with smart billing,
                                                            reporting and inventory management features. Helps you never overstore or go out of stock. Barcode, Touch Screen,
                                                            Smart purchase, Discount & schemes & 1000's of other features helps you grow your profits & scale.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            In Marg POS Software, one can compare its current sales from the previous financials or party to party comparison
                                                            so that they can get better ideas for the betterment of the business. Explicit sales services and higher rate of
                                                            customer satisfaction leads to the path of success.
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
                                            <h3 style="color: #3a4172; text-align:center;">Restaurant Software</h3><hr>

                                            <ul class="list-unstyled">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                            <img src="img/RESTAURANT.webp">
                                                            <img src="img/RESTAURANT1   .webp" style="margin-top: 19%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                                        <h5 style="color: #3a4172">
                                                            Restaurant POS software is quick to implement, easy to learn and smooth in operation which reduces the long standing queues
                                                            of the customer so that their orders are placed faster and faster billing can be done. Software for restaurant billing
                                                            allows you to easily make adjustment of different menus & prices with respect to different time. With Marg Restaurant
                                                            Software you can set operator wise boundations which can help in proper maintenance of finance & budget as well as
                                                            resist any type of fraud.
                                                        </h5>
                                                        <h5 style="color: #3a4172">
                                                            Restaurant one of the most crowded place where everyone is in hurry, they want their order should be placed fast and
                                                            faster the billing should be. The biggest challenges in restaurant industry are order entry management, recipe costing,
                                                            track & documentation of its perishable inventory. Marg has solved the problem of restaurant industry by developing its
                                                            Marg Restaurant Software which helps in maintaining different menus with different price list for different times of day;
                                                            it also made billing easier by providing different modes of payments (cash & credit cards).
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