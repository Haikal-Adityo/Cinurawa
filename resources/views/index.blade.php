<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <title>Landing Page Cinurawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/owl.carousel.min.css') }}" />
        
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#page-top">
                <img src="{{ url('/img/logo.svg') }}" alt="Logo Cinurawa">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-card hero1">
                    <h1>
                        Extraordinary imaginations come true
                    </h1>
                    <p>
                        Present your property in the hands of the customer. Together we make extraordinary
                        imaginations
                        come true.
                    </p>
                    <button class="button-primary me-1">Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                            <path
                                d="M12.3567 1.69675C12.3567 1.28254 12.0209 0.946749 11.6067 0.946744L4.85673 0.946666C4.44252 0.946661 4.10673 1.28244 4.10672 1.69666C4.10672 2.11087 4.4425 2.44666 4.85671 2.44667L10.8567 2.44674L10.8566 8.44673C10.8566 8.86095 11.1924 9.19674 11.6066 9.19674C12.0209 9.19675 12.3566 8.86097 12.3566 8.44675L12.3567 1.69675ZM1.53032 12.8336L12.137 2.22708L11.0764 1.16641L0.469676 11.7729L1.53032 12.8336Z"
                                fill="white" />
                        </svg>
                    </button>
                    <button class="button-secondary">Explore Now
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                            <path
                                d="M11.9634 11.3032C11.9634 11.7175 11.6276 12.0533 11.2134 12.0533L4.46342 12.0533C4.04921 12.0533 3.71342 11.7176 3.71341 11.3033C3.71341 10.8891 4.04919 10.5533 4.4634 10.5533L10.4634 10.5533L10.4633 4.55327C10.4633 4.13905 10.7991 3.80326 11.2133 3.80326C11.6275 3.80325 11.9633 4.13903 11.9633 4.55325L11.9634 11.3032ZM1.13701 0.166441L11.7437 10.7729L10.6831 11.8336L0.0763655 1.22711L1.13701 0.166441Z"
                                fill="#041827" />
                        </svg>
                    </button>
                </div>
                <div class="col-md-6 hero2">
                    <div class="hero-card">
                        <img src="{{ url('/img/hero.png') }}" alt="Judul Profil" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="introduction">
        <div class="container">
            <div class="sub-heading text-center">
                Introduction
            </div>
            <h2 class="text-center">Who we are</h2>
            <div class="reguler-text text-center text">
                One of our products is the AR Property Project, which develops client Immersive applications in the
                form of Augmented Reality applications in the property sector
            </div>

            <center>
                <iframe width="888" height="514" src="https://www.youtube.com/embed/swK-sxvbXRI?si=Z3yF_Xkbk5QJgDP0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </center>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-heading">
                        Our Services
                    </div>
                    <h2>Sample of service header</h2>
                    <div class="reguler-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6 order2">
                    <img src="{{ url('/img/propertio.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 order1">
                    <h3>Propertio</h3>
                    <div class="reguler-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. tempor incididunt ut labore et
                        dolore magna aliqua.
                    </div>
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6">
                    <h3>Augmented Reality</h3>
                    <div class="reguler-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. tempor incididunt ut labore et
                        dolore magna aliqua.
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <img src="{{ url('/img/ar.png') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6 order2">
                    <img src="{{ url('/img/vr.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 order1">
                    <h3>Virtual Reality</h3>
                    <div class="reguler-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. tempor incididunt ut labore et
                        dolore magna aliqua.
                    </div>
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6 order1">
                    <h3>Mixed Reality</h3>
                    <div class="reguler-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. tempor incididunt ut labore et
                        dolore magna aliqua.
                    </div>
                </div>

                <div class="col-md-6 text-end order2">
                    <img src="{{ url('/img/mr.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="why">
        <div class="container">
            <h2 class="text-center">Why Choose Us</h2>
            <div class="reguler-text text-center text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua.
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card-why">
                        <img src="{{ url('/img/why.png') }}" alt="">
                        <h3>First Reason</h3>
                        <div class="reguler-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-why">
                        <img src="{{ url('/img/why.png') }}" alt="">
                        <h3>First Reason</h3>
                        <div class="reguler-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-why">
                        <img src="{{ url('/img/why.png') }}" alt="">
                        <h3>First Reason</h3>
                        <div class="reguler-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sub-heading">
                        Our Portfolio
                    </div>
                </div>

                <div class="col-md-4 text-end see">
                    <a href="index.html">
                        See All
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="15" viewBox="0 0 33 15" fill="none">
                            <path
                                d="M32.7071 8.20711C33.0976 7.81658 33.0976 7.18342 32.7071 6.79289L26.3431 0.428932C25.9526 0.0384078 25.3195 0.0384078 24.9289 0.428932C24.5384 0.819457 24.5384 1.45262 24.9289 1.84315L30.5858 7.5L24.9289 13.1569C24.5384 13.5474 24.5384 14.1805 24.9289 14.5711C25.3195 14.9616 25.9526 14.9616 26.3431 14.5711L32.7071 8.20711ZM0 8.5H32V6.5H0V8.5Z"
                                fill="#041827" />
                        </svg>
                    </a>
                </div>

                <h2>Sample of portofolio header</h2>
                <div class="reguler-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 frame">
                    <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
                    <h3 class="title">First Portofolio Header</h3>
                    <div class="reguler-text sub-title">
                        21 Agustus 2023
                    </div>
                </div>

                <div class="col-md-4 frame">
                    <img src="{{ url('/img/portfolio/portfolio2.png') }}" alt="" class="img-fluid">
                    <h3 class="title">First Portofolio Header</h3>
                    <div class="reguler-text sub-title">
                        21 Agustus 2023
                    </div>
                </div>

                <div class="col-md-4 frame">
                    <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
                    <h3 class="title">First Portofolio Header</h3>
                    <div class="reguler-text sub-title">
                        21 Agustus 2023
                    </div>
                </div>

                <div class="col-md-4 frame">
                    <img src="{{ url('/img/portfolio/portfolio2.png') }}" alt="" class="img-fluid">
                    <h3 class="title">First Portofolio Header</h3>
                    <div class="reguler-text sub-title">
                        21 Agustus 2023
                    </div>
                </div>

                <div class="col-md-4 frame">
                    <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
                    <h3 class="title">First Portofolio Header</h3>
                    <div class="reguler-text sub-title">
                        21 Agustus 2023
                    </div>
                </div>

                <div class="col-md-4 frame">
                    <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
                    <h3 class="title">First Portofolio Header</h3>
                    <div class="reguler-text sub-title">
                        21 Agustus 2023
                    </div>
                </div>
            </div>


            <div class="button">
                <a href="#">
                    <button>
                        View More
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <div class="sub-heading text-center">
                Reviews
            </div>
            <h2 class="text-center">What They says</h2>
            <!-- <div class="reguler-text text-center text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </div> -->
            <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path
                                d="M12 16H6.11C6.29585 14.7623 6.73779 13.577 7.40759 12.5198C8.07739 11.4626 8.96033 10.5567 10 9.86L11.79 8.66L10.69 7L8.9 8.2C7.39328 9.20408 6.15771 10.5646 5.30293 12.1607C4.44816 13.7569 4.00061 15.5394 4 17.35V24C4 24.5304 4.21071 25.0391 4.58579 25.4142C4.96086 25.7893 5.46957 26 6 26H12C12.5304 26 13.0391 25.7893 13.4142 25.4142C13.7893 25.0391 14 24.5304 14 24V18C14 17.4696 13.7893 16.9609 13.4142 16.5858C13.0391 16.2107 12.5304 16 12 16ZM26 16H20.11C20.2959 14.7623 20.7378 13.577 21.4076 12.5198C22.0774 11.4626 22.9603 10.5567 24 9.86L25.79 8.66L24.7 7L22.9 8.2C21.3933 9.20408 20.1577 10.5646 19.3029 12.1607C18.4482 13.7569 18.0006 15.5394 18 17.35V24C18 24.5304 18.2107 25.0391 18.5858 25.4142C18.9609 25.7893 19.4696 26 20 26H26C26.5304 26 27.0391 25.7893 27.4142 25.4142C27.7893 25.0391 28 24.5304 28 24V18C28 17.4696 27.7893 16.9609 27.4142 16.5858C27.0391 16.2107 26.5304 16 26 16Z"
                                fill="#D0920B" />
                        </svg>
                        <p class="slider-card-text mt-4">
                            “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore “
                        </p>
                        <div class="d-flex mb-2">
                            <img src="{{ url('/img/testimonials/1.png') }}" alt="logo" class="w-25 me-3">
                            <div class="">
                                <h3>De Paula</h3>
                                <div class="reguler-text position">CEO of OldTwitter</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path
                                d="M12 16H6.11C6.29585 14.7623 6.73779 13.577 7.40759 12.5198C8.07739 11.4626 8.96033 10.5567 10 9.86L11.79 8.66L10.69 7L8.9 8.2C7.39328 9.20408 6.15771 10.5646 5.30293 12.1607C4.44816 13.7569 4.00061 15.5394 4 17.35V24C4 24.5304 4.21071 25.0391 4.58579 25.4142C4.96086 25.7893 5.46957 26 6 26H12C12.5304 26 13.0391 25.7893 13.4142 25.4142C13.7893 25.0391 14 24.5304 14 24V18C14 17.4696 13.7893 16.9609 13.4142 16.5858C13.0391 16.2107 12.5304 16 12 16ZM26 16H20.11C20.2959 14.7623 20.7378 13.577 21.4076 12.5198C22.0774 11.4626 22.9603 10.5567 24 9.86L25.79 8.66L24.7 7L22.9 8.2C21.3933 9.20408 20.1577 10.5646 19.3029 12.1607C18.4482 13.7569 18.0006 15.5394 18 17.35V24C18 24.5304 18.2107 25.0391 18.5858 25.4142C18.9609 25.7893 19.4696 26 20 26H26C26.5304 26 27.0391 25.7893 27.4142 25.4142C27.7893 25.0391 28 24.5304 28 24V18C28 17.4696 27.7893 16.9609 27.4142 16.5858C27.0391 16.2107 26.5304 16 26 16Z"
                                fill="#D0920B" />
                        </svg>
                        <p class="slider-card-text mt-4">
                            “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore “
                        </p>
                        <div class="d-flex mb-2">
                            <img src="{{ url('/img/testimonials/2.png') }}" alt="logo" class="w-25 me-3">
                            <div class="">
                                <h3>Guma</h3>
                                <div class="reguler-text position">Founder & CEO of Pinpin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <div class="sub-heading text-center">
                Our Partners
            </div>
            <h2 class="text-center">Sample Header</h2>
            <div class="reguler-text text-center">
                We’ve been working with teams around the world
            </div>

            <div id="owl-demo" class="owl-carousel owl-theme">
                <img src="{{ url('/img/partner/bca.png') }}" alt="">
                <img src="{{ url('/img/partner/grab.png') }}" alt="">
                <img src="{{ url('/img/partner/blibli.png') }}" alt="">
                <img src="{{ url('/img/partner/gojek.png') }}" alt="">
                <img src="{{ url('/img/partner/meta.png') }}" alt="">
                <img src="{{ url('/img/partner/crisp.png') }}" alt="">
            </div>
        </div>
    </section>

    <!-- <section id="slider" class="pt-5">
        <div class="container mt-5">
            <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path
                                d="M12 16H6.11C6.29585 14.7623 6.73779 13.577 7.40759 12.5198C8.07739 11.4626 8.96033 10.5567 10 9.86L11.79 8.66L10.69 7L8.9 8.2C7.39328 9.20408 6.15771 10.5646 5.30293 12.1607C4.44816 13.7569 4.00061 15.5394 4 17.35V24C4 24.5304 4.21071 25.0391 4.58579 25.4142C4.96086 25.7893 5.46957 26 6 26H12C12.5304 26 13.0391 25.7893 13.4142 25.4142C13.7893 25.0391 14 24.5304 14 24V18C14 17.4696 13.7893 16.9609 13.4142 16.5858C13.0391 16.2107 12.5304 16 12 16ZM26 16H20.11C20.2959 14.7623 20.7378 13.577 21.4076 12.5198C22.0774 11.4626 22.9603 10.5567 24 9.86L25.79 8.66L24.7 7L22.9 8.2C21.3933 9.20408 20.1577 10.5646 19.3029 12.1607C18.4482 13.7569 18.0006 15.5394 18 17.35V24C18 24.5304 18.2107 25.0391 18.5858 25.4142C18.9609 25.7893 19.4696 26 20 26H26C26.5304 26 27.0391 25.7893 27.4142 25.4142C27.7893 25.0391 28 24.5304 28 24V18C28 17.4696 27.7893 16.9609 27.4142 16.5858C27.0391 16.2107 26.5304 16 26 16Z"
                                fill="#D0920B" />
                        </svg>
                        <p class="slider-card-text mt-4">
                            “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore “
                        </p>
                        <div class="d-flex mb-2">
                            <img src="{{ url('/img/testimonials/1.png') }}" alt="logo" class="w-25 me-3">
                            <div class="">
                                <h3>De Paula</h3>
                                <div class="reguler-text position">CEO of OldTwitter</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path
                                d="M12 16H6.11C6.29585 14.7623 6.73779 13.577 7.40759 12.5198C8.07739 11.4626 8.96033 10.5567 10 9.86L11.79 8.66L10.69 7L8.9 8.2C7.39328 9.20408 6.15771 10.5646 5.30293 12.1607C4.44816 13.7569 4.00061 15.5394 4 17.35V24C4 24.5304 4.21071 25.0391 4.58579 25.4142C4.96086 25.7893 5.46957 26 6 26H12C12.5304 26 13.0391 25.7893 13.4142 25.4142C13.7893 25.0391 14 24.5304 14 24V18C14 17.4696 13.7893 16.9609 13.4142 16.5858C13.0391 16.2107 12.5304 16 12 16ZM26 16H20.11C20.2959 14.7623 20.7378 13.577 21.4076 12.5198C22.0774 11.4626 22.9603 10.5567 24 9.86L25.79 8.66L24.7 7L22.9 8.2C21.3933 9.20408 20.1577 10.5646 19.3029 12.1607C18.4482 13.7569 18.0006 15.5394 18 17.35V24C18 24.5304 18.2107 25.0391 18.5858 25.4142C18.9609 25.7893 19.4696 26 20 26H26C26.5304 26 27.0391 25.7893 27.4142 25.4142C27.7893 25.0391 28 24.5304 28 24V18C28 17.4696 27.7893 16.9609 27.4142 16.5858C27.0391 16.2107 26.5304 16 26 16Z"
                                fill="#D0920B" />
                        </svg>
                        <p class="slider-card-text mt-4">
                            “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore “
                        </p>
                        <div class="d-flex mb-2">
                            <img src="{{ url('/img/testimonials/2.png') }}" alt="logo" class="w-25 me-3">
                            <div class="">
                                <h3>Guma</h3>
                                <div class="reguler-text position">Founder & CEO of Pinpin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="contact">
        <div class="container">
            <div class="contact">
                <h2 class="text-contact">Ready to Bring Your Imagination to Life? Get in Touch with Us
                </h2>
                <a href="https://wa.me/083134339542">
                    <button class="button-secondary">Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                            <path
                                d="M12.5534 1.69675C12.5534 1.28254 12.2176 0.946749 11.8034 0.946744L5.05339 0.946666C4.63917 0.946661 4.30338 1.28244 4.30338 1.69666C4.30337 2.11087 4.63916 2.44666 5.05337 2.44667L11.0534 2.44674L11.0533 8.44673C11.0533 8.86095 11.3891 9.19674 11.8033 9.19674C12.2175 9.19675 12.5533 8.86097 12.5533 8.44675L12.5534 1.69675ZM1.72698 12.8336L12.3337 2.22708L11.2731 1.16641L0.666331 11.7729L1.72698 12.8336Z"
                                fill="#041827" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ url('/img/logo.svg') }}" alt="" class="mb-3">
                        <div class="reguler-text">
                            +62 857-0275-0455 <br>
                            cinurawa@gmail.com <br>
                            info.cinurawa@gmail.com
                        </div>
                        <div class="medsos">
                            <a href="#">
                                <img src="{{ url('/img/icon-medsos/facebook.svg') }}" alt="" class="icon-medsos">
                            </a>
                            <a href="#">
                                <img src="{{ url('/img/icon-medsos/twitter.svg') }}" alt="" class="icon-medsos">
                            </a>

                            <a href="#">
                                <img src="{{ url('/img/icon-medsos/instagram.svg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3>Our Address</h3>
                        <div class="reguler-text mt-24">
                            Teaching Industry Learning Center UGM, <br> Sleman, Daerah Istimewa Yogyakarta <br>
                            55281
                        </div>
                    </div>

                    <div class="col-lg-4 mt-24">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1510599545036!2d110.36996687464045!3d-7.773801877118019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a883bb28fb%3A0x71c2d1a3cabf9775!2sTeaching%20Industry%20Learning%20Center%20(TILC-UGM)!5e0!3m2!1sid!2sid!4v1695021286547!5m2!1sid!2sid"
                            width="100%" height="100%" style="border: 1px;;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ url('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/js/script.js') }}"></script>
</body>

</html>