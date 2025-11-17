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
                                    <h1 style="color: #3a4172;">Pricing</h1>
                                    <!-- <h1>How We Help You</h1> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="tabs active" style="text-align: center;">
                                    <button class="button button1 active-btn" style="background-color: darkblue;" onclick="showTab(1)">MARG ERP</button>
                                    <button class="button button2" style="background-color: darkblue;" onclick="showTab(2)">ARC</button>
                                    <button class="button button3" style="background-color: darkblue;" onclick="showTab(3)">Mobile Apps</button>
                                    <button class="button button4" style="background-color: darkblue;" onclick="showTab(4)">MARG BOOKS</button>
                                </ul>
                            </div>
                        </div>

                        <div id="tab1" class="tab-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Marg ERP Nano</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 5400</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li><h4 style="color: #3a4172;">Billing Conditions<h4></li>
                                                <li>* You can make 450 Bills/Month (Includes Challans + Estimates for Stock Issue)</li>
                                                <li>* Monthly Billing Amount ₹1,50,000</li><hr>
                                                <li><h6 style="color: red;">Important Notes :-</h6></li>
                                                <li>If you exceed the limits above, pay just ₹5 per extra bill via wallet</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">BASIC Edition</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 9999</h2><hr>
                                                <span style="text-align:center;">( Limited Edition )</span><br>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* 1 User Full Rights</li>
                                                <li>* ₹ 3000/- per extra user</li>
                                                <li>* Maximum 2 users</li>
                                                <li>* ₹ 3000/- per extra Company</li>
                                                <li>* Maximum 2 Company</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Silver Edition</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 13500</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* 1 User Full Rights</li>
                                                <li>* 1 User for View only</li>
                                                <li>* ₹ 3000/- per extra use</li>
                                                <li>* ₹ 3000/- per extra Company</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Gold Edition</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 25200</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* Unlimited Users</li>
                                                <li>* Unlimited Extra Company</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab2" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Marg ERP Nano</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 2340</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* Marg ERP Nano ARC @ ₹2340</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">BASIC Edition</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 3870</h2><hr>
                                                <span style="text-align:center;">( Limited Edition )</span><br>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* Additional User ARC Cost @ 1000</li>
                                                <li>* Maximum 2 users/2 Company</li>
                                                <li>* Extra Company ARC Cost @ 1000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Silver Edition</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 4640</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* Additional User ARC Cost @ 1000</li>
                                                <li>* Extra Company ARC Cost @ 1000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Gold Edition</h3>

                                            <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 9270</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li>* Upto 25 Users/ 25 Extra Company</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab3" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">eOrder, eBilling, eDelivery & eRetail</h3><hr>

                                            <!-- <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 2340</h2><hr>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div> -->

                                            <ul class="list-unstyled">
                                                <li>₹ 5,400/ yr</li>
                                                <li>* 2 Salesmen</li>
                                                <li>* Unlimited Retailers</li><hr>
                                                <li>₹ 7,200/ yr</li>
                                                <li>* 5 Salesmen</li>
                                                <li>* Unlimited Retailers</li><hr>
                                                <li>₹ 13,500/ yr</li>
                                                <li>* 12 Salesmen</li>
                                                <li>* Unlimited Retailers</li><hr>
                                                <li>₹ 24,300/ yr</li>
                                                <li>* 25 Salesmen</li>
                                                <li>* Unlimited Retailers</li><hr>
                                                <li>₹ 45,000/ yr</li>
                                                <li>* Unlimited Salesmen</li>
                                                <li>* Unlimited Retailers</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">eOwner</h3><hr>

                                            <!-- <div class="price mb-3">
                                                <h2 class="mb-0" style="text-align:center;">₹ 3870</h2><hr>
                                                <span style="text-align:center;">( Limited Edition )</span><br>
                                                <span style="text-align:center;">18% GST Extra</span>
                                            </div> -->

                                            <ul class="list-unstyled">
                                                <li>₹ 4,000</li>
                                                <li>* 1 Owner</li><hr>
                                                <li>₹ 5,400</li>
                                                <li>* 2 Owner</li><hr>
                                                <li>₹ 10,000</li>
                                                <li>* 5 Owners</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tab4" class="tab-content hide">
                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Gold</h3>

                                            <div class="price mb-3">
                                                <h6 class="mb-0" style="color: #3a4172;">Perfect for New Businesses</h6>
                                                <h2 class="mb-0">₹ 5,400<span class="mb-0">* GST Exclusive</span><h2><hr>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li style="text-align: left;">INCLUDES
                                                    <ul class="two-col-sublist">
                                                        <li>1 User</li>
                                                        <li>1 GSTIN</li>
                                                        <li>5,000 Invoices</li>
                                                        <li>Web or App</li>
                                                    </ul>
                                                </li><hr>
                                                <li style="color: green;">No Additional User for Gold Plan</li><hr>
                                                <li style="text-align: left;">
                                                    <ul class="scroll-box">
                                                        <li>Dashboard</li>
                                                        <li>Account Master</li>
                                                        <li>Items</li>
                                                        <li>Company</li>
                                                        <li>HSN</li>
                                                        <li>Manufacturer Name</li>
                                                        <li>Opening Balance</li>
                                                        <li>Sale Bill</li>
                                                        <li>Purchase Bill</li>
                                                        <li>Receipt</li>
                                                        <li>Payment</li>
                                                        <li>Ledger</li>
                                                        <li>Day Book</li>
                                                        <li>Sale Register (All)</li>
                                                        <li>Purchase Register (All)</li>
                                                        <li>GSTR 1</li>
                                                        <li>GSTR 2</li>
                                                        <li>GSTR 3B</li>
                                                        <li>GSTR9</li>
                                                        <li>Data Backup</li>
                                                        <li>Repair Data Base</li>
                                                        <li>Data Correction</li>
                                                        <li>Invoice Template</li>
                                                        <li>Import Pre-Design Template</li>
                                                        <li>New Financial Year</li>
                                                        <li>Multi Language</li>
                                                        <li>Mobile Apps</li>
                                                        <li>Category Master</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Diamond</h3>

                                            <div class="price mb-3">
                                                <h6 class="mb-0" style="color: #3a4172;">Complete Control Over Your Inventory</h6>
                                                <h2 class="mb-0">₹ 8,100<span class="mb-0">* GST Exclusive</span><h2><hr>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li style="text-align: left;">INCLUDES
                                                    <ul class="two-col-sublist">
                                                        <li>1 User</li>
                                                        <li>1 GSTIN</li>
                                                        <li>12,000 Invoices</li>
                                                        <li>Web & App</li>
                                                    </ul>
                                                </li><hr>
                                                <li style="color: green;">₹ 810 Per user</li><hr>
                                                <li style="text-align: left;"> Gold +
                                                    <ul class="scroll-box">
                                                        <li>Unit</li>
                                                        <li>Rate Master</li>
                                                        <li>Discount Master</li>
                                                        <li>Other Master</li>
                                                        <li>Quotation</li>
                                                        <li>Stock Issue</li>
                                                        <li>Order</li>
                                                        <li>Sale Return</li>
                                                        <li>Sales Challan</li>
                                                        <li>Counter Sale</li>
                                                        <li>Accounting</li>
                                                        <li>Debit Note</li>
                                                        <li>Credit Note</li>
                                                        <li>Contro</li>
                                                        <li>Journal</li>
                                                        <li>Stock Management</li>
                                                        <li>Trial Balance</li>
                                                        <li>Cash/Bank Books</li>
                                                        <li>Group Summary</li>
                                                        <li>Outstanding Reports</li>
                                                        <li>Misc Reports</li>
                                                        <li>Books of Account</li>
                                                        <li>Final Account</li>
                                                        <li>Re-order</li>
                                                        <li>Stock Statement</li>
                                                        <li>Stock Summary</li>
                                                        <li>Shortage Reports</li>
                                                        <li>Item Ledger</li>
                                                        <li>Sale-Party Wise</li>
                                                        <li>Sales Analysis</li>
                                                        <li>Pending Challan</li>
                                                        <li>Pending Order</li>
                                                        <li>Hold Stock</li>
                                                        <li>Ban Stock</li>
                                                        <li>Dump Stock</li>
                                                        <li>Expired Stock</li>
                                                        <li>Minimum Stock</li>
                                                        <li>Maximum Stock</li>
                                                        <li>Purchase-Party Wise</li>
                                                        <li>Purchase Analysis</li>
                                                        <li>Customer wise sale</li>
                                                        <li>Statutory Statements</li>
                                                        <li>E-way Bill</li>
                                                        <li>GSTR 2B Reconciliation</li>
                                                        <li>Internal Audit</li>
                                                        <li>GST Tax Register</li>
                                                        <li>Utility & Tools</li>
                                                        <li>Non Working Data</li>
                                                        <li>Download from Server</li>
                                                        <li>Merge master</li>
                                                        <li>Rearrance</li>
                                                        <li>Cost Reposting</li>
                                                        <li>Invoice Design</li>
                                                        <li>Barcode Template</li>
                                                        <li>Download Invoice Design</li>
                                                        <li>Import Method</li>
                                                        <li>Transaction Locking</li>
                                                        <li>Barcode Billing</li>
                                                        <li>Barcode Format Design</li>
                                                        <li>Sales Promotion</li>
                                                        <li>Purchase Import on single click</li>
                                                        <li>O/S send by Email</li>
                                                        <li>POS</li>
                                                        <li>Party wise Discount</li>
                                                        <li>Company wise Discount</li>
                                                        <li>Parameter wise Billing</li>
                                                        <li>Secondary Billing</li>
                                                        <li>Home Delivery</li>
                                                        <li>Connected Banking</li>
                                                        <li>Marg Pay</li>
                                                        <li>E-Mail / SMS Setup</li>
                                                        <li>Multi Unit</li>
                                                        <li>CA access of Multiple Companies</li>
                                                        <li>Pharmanxt</li>
                                                        <li>Prescription</li>
                                                        <li>Audit Trail</li>
                                                        <li>Salesman</li>
                                                        <li>Report Designer</li>
                                                        <li>Multi series</li>
                                                        <li>Warning Alarm</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Platinum</h3>

                                            <div class="price mb-3">
                                                <h6 class="mb-0" style="color: #3a4172;">Full Control Over Business Operations</h6>
                                                <h2 class="mb-0">₹ 15,300<span class="mb-0">* GST Exclusive</span><h2><hr>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li style="text-align: left;">INCLUDES
                                                    <ul class="two-col-sublist">
                                                        <li>2 User</li>
                                                        <li>1 GSTIN</li>
                                                        <li>30,000 Invoices</li>
                                                        <li>Web & App</li>
                                                    </ul>
                                                </li><hr>
                                                <li style="color: green;">₹ 1530 Per user</li><hr>
                                                <li style="text-align: left;"> Diamond +
                                                    <ul class="scroll-box">
                                                        <li>Store</li>
                                                        <li>PDC Cheques Payment</li>
                                                        <li>PD Cheque/Cash</li>
                                                        <li>PDC Cheque</li>
                                                        <li>Banking Reconcilation</li>
                                                        <li>E-Invoice</li>
                                                        <li>GSTR 2A Reconciliation</li>
                                                        <li>Rate Master</li>
                                                        <li>Management Reports</li>
                                                        <li>CRM</li>
                                                        <li>Merge master</li>
                                                        <li>Invoice Template</li>
                                                        <li>Link Unit UQC</li>
                                                        <li>Import Method</li>
                                                        <li>Loyalty Bonus (Point System)</li>
                                                        <li>API Integration</li>
                                                        <li>VAT/TDS/TCS</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pricing-box height-fix small-box p-4 mb-4 bg-white shadow-sm rounded">
                                            <h3 style="color: #3a4172; text-align:center;">Platinum Plus</h3>

                                            <div class="price mb-3">
                                                <h6 class="mb-0" style="color: #3a4172;">Unlock Powerful Advanced Features</h6>
                                                <h2 class="mb-0">₹ 29,700<span class="mb-0">* GST Exclusive</span><h2><hr>
                                            </div>

                                            <ul class="list-unstyled">
                                                <li style="text-align: left;">INCLUDES
                                                    <ul class="two-col-sublist">
                                                        <li>2 User</li>
                                                        <li>2 GSTIN</li>
                                                        <li>1 Lakh Invoices</li>
                                                        <li>Web & App</li>
                                                    </ul>
                                                </li><hr>
                                                <li style="color: green;">₹ 2970 Per user</li><hr>
                                                <li style="text-align: left;"> Platinum +
                                                    <ul class="scroll-box">
                                                        <li>Store</li>
                                                        <li>PDC Cheques Payment</li>
                                                        <li>PD Cheque/Cash</li>
                                                        <li>PDC Cheque</li>
                                                        <li>Banking Reconcilation</li>
                                                        <li>E-Invoice</li>
                                                        <li>GSTR 2A Reconciliation</li>
                                                        <li>Rate Master</li>
                                                        <li>Management Reports</li>
                                                        <li>CRM</li>
                                                        <li>Merge master</li>
                                                        <li>Invoice Template</li>
                                                        <li>Link Unit UQC</li>
                                                        <li>Import Method</li>
                                                        <li>Loyalty Bonus (Point System)</li>
                                                        <li>API Integration</li>
                                                        <li>VAT/TDS/TCS</li>
                                                    </ul>
                                                </li>
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