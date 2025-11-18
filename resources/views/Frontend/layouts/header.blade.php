<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartweb IT Solutions</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="css/css2.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>

        .whatsapp-float {
            position: fixed;
            left: 5%;
            bottom: 7%;
            z-index: 9999;
        }

        .whatsapp-float img {
            width: 15%;
            height: 15%;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            transition: 0.3s;
        }

        .whatsapp-float img:hover {
            transform: scale(1.1);
        }

        /* Tablets */
        @media (max-width: 991px) {
            .whatsapp-float img {
                width: 15%;
                height: 15%;
            }
        }

        /* Mobile Phones */
        @media (max-width: 600px) {
            .whatsapp-float {
                left: 8%;   /* thoda left adjust */
                bottom: 8%; /* thoda upar adjust */
            }

            .whatsapp-float img {
                width: 15%;
                height: 15%;
            }
        }

        /* Very Small Devices (Old phones) */
        @media (max-width: 400px) {
            .whatsapp-float img {
                width: 10%;
                height: 10%;
            }
        }

    </style>

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-light position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-lg-5">
            <a href="/" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center flex-wrap">
                <h2 class="mb-0 text-primary text-uppercase fw-bold d-flex align-items-center"><i class="fa-regular fa-face-smile me-1"></i>Smartweb IT Solutions</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link fw-bold">Home</a>
                    <a href="/about" class="nav-item nav-link fw-bold">About</a>
                    <a href="/features" class="nav-item nav-link fw-bold">Features</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle fw-bold" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="" class="dropdown-item fw-bold">Retail</a>
                            <a href="" class="dropdown-item fw-bold">Distributor</a>
                            <a href="" class="dropdown-item fw-bold">Manufacturing</a>
                            <a href="" class="dropdown-item fw-bold">Marg Books</a>
                        </div>
                    </div>
                    <a href="/pricing" class="nav-item nav-link fw-bold">Pricing</a>
                    <a href="/contact" class="nav-item nav-link fw-bold">Contact</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="team.html" class="dropdown-item">Our Models</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="d-none d-lg-flex">
                    <a class="btn btn-outline-primary border-2" href="">Download
                        Now</a>
                </div> -->
            </div>
        </nav>
    </div>
    <!-- Header End -->