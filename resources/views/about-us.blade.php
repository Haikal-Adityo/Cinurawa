<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <title>About Us - CINURAWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="icon" href="{{ url('/img/logo-black.png') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <img src="{{ url('/img/logo.svg') }}" alt="Logo Cinurawa">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('portofolio.index') }}">Portofolio</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container bg-hero-portofolio hero-services">
            <h1 class="text-center">Where Imagination Meets <span>Reality</span> </h1>
            <div class="reguler-text text-center mt-4 pb-5">
                lorem ipsum dolor sit amet megalodon lorem ipsum dolor sit amet megalodon lorem ipsum dolor sit amet
                megalodon lorem ipsum dolor sit amet
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sub-heading">
                        About Us
                    </div>
                    <h2>We’ll Brings Imaginations Came True </h2>
                </div>
                <div class="col-md-9">
                    <div class="reguler-text text-about">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order2">
                    <div class="card-vision">
                        <div class="d-flex">
                            <div><img src="{{ url('/img/abous-us/1.png') }}" alt=""></div>
                            <div>
                                <h3>Customer-Centric Approach</h3>
                                <p class="reguler-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-vision mt-3">
                        <div class="d-flex">
                            <div><img src="{{ url('/img/abous-us/1.png') }}" alt=""></div>
                            <div>
                                <h3>Customer-Centric Approach</h3>
                                <p class="reguler-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-vision mt-3">
                        <div class="d-flex">
                            <div><img src="{{ url('/img/abous-us/1.png') }}" alt=""></div>
                            <div>
                                <h3>Customer-Centric Approach</h3>
                                <p class="reguler-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 our-vision order1">
                    <div class="sub-heading ">
                        Our Vision
                    </div>
                    <h2>Turning Imagination into Reality</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="name">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-heading">
                        CEO & Founder of Cinurawa
                    </div>
                    <h2>Aryaputra F.A.</h2>
                    <p class="reguler-text">
                        “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore “ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et. sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et.“
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('/img/abous-us/name.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="contact1">
                <h2 class="text-contact1">Ready to Bring Your Imagination to Life? Get in Touch with Us
                </h2>
                <a href="https://wa.me/6285702750455">
                    <button class="button-primary me-1">Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                            <path
                                d="M12.3567 1.69675C12.3567 1.28254 12.0209 0.946749 11.6067 0.946744L4.85673 0.946666C4.44252 0.946661 4.10673 1.28244 4.10672 1.69666C4.10672 2.11087 4.4425 2.44666 4.85671 2.44667L10.8567 2.44674L10.8566 8.44673C10.8566 8.86095 11.1924 9.19674 11.6066 9.19674C12.0209 9.19675 12.3566 8.86097 12.3566 8.44675L12.3567 1.69675ZM1.53032 12.8336L12.137 2.22708L11.0764 1.16641L0.469676 11.7729L1.53032 12.8336Z"
                                fill="white" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section id="gallery-name">
        <div class="container">
            <h2 class="text-center">Gallery</h2>
            <div class="reguler-text text-center text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </div>

            <div class="row">
                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/1.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/2.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/3.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/4.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/5.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/6.png') }}" alt="" class="img-fluid">
                </div>
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
                            <a href="https://www.facebook.com/">
                                <img src="{{ url('/img/icon-medsos/facebook.svg') }}" alt="" class="icon-medsos">
                            </a>
                            <a href="https://twitter.com/BirawaCitra">
                                <img src="{{ url('/img/icon-medsos/twitter.svg') }}" alt="" class="icon-medsos">
                            </a>
                            <a href="https://www.instagram.com/cinurawa.id/">
                                <img src="{{ url('/img/icon-medsos/instagram.svg') }}" alt="" class="icon-medsos">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>