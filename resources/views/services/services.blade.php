<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - CINURAWA</title>
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
                        <a class="nav-link active" href="#">Services</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('portofolio.index') }}">Portofolio</a>
                    </li>
                    <li class="nav-item" style="margin-right: 32px;">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container bg-hero-services pt-5 hero-services">
            <h1 class="text-center">Discover Our <span>Solutions</span> to Realize Your Dreams</h1>
            <div class="reguler-text text-center mt-4 pb-5">
                With CINURAWA, your dreams come to life. Explore our innovative solutions that surpass expectations,
                shaping your vision into reality. Let's bring your dreams to fruition with CINURAWA.
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-heading">
                        Our Services
                    </div>
                    <h2>Turn Imagination into Reality with Us</h2>
                    <!-- <div class="reguler-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </div> -->
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6">
                    <a href="{{ route('services.augmented-reality') }}">
                        <h3>Augmented Reality</h3>
                        <div class="reguler-text">
                            Bring your products directly into customers' lives with real-time information and
                            interactive guidance. <span class="hidden">Customers can virtually see and feel the products
                                in their physical
                                environment, providing an amazing experience and aiding them in making more confident
                                decisions.</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('services.augmented-reality') }}">
                        <center>
                            <img src="{{ url('/img/ar.png') }}" alt="" class="img-fluid">
                        </center>
                    </a>
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6 order2">
                    <a href="{{ route('services.virtual-reality') }}">
                        <center>
                            <img src="{{ url('/img/vr.png') }}" alt="" class="img-fluid">
                        </center>
                    </a>
                </div>
                <div class="col-md-6 order1">
                    <a href="{{ route('services.virtual-reality') }}">
                        <h3>Virtual Reality</h3>
                        <div class="reguler-text">
                            Embark on a captivating VR journey, from mesmerizing employee training to interactive
                            product presentations. <span class="hidden"> Create an awe-inspiring and lifelike atmosphere
                                at every step. With
                                VR, your brilliant ideas transform into unforgettable experiences.</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6 order1">
                    <a href="{{ route('services.mixed-reality') }}">
                        <h3>Mixed Reality</h3>
                        <div class="reguler-text">
                            Enhance construction project efficiency by blending the virtual and real worlds. <span
                                class="hidden"> Share
                                product concepts directly with clients, creating a captivating experience and delivering
                                tangible added value at every project stage. </span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 text-end order2">
                    <a href="{{ route('services.mixed-reality') }}">
                        <center>
                            <img src="{{ url('/img/mr2.png') }}" alt="" class="img-fluid">
                        </center>
                    </a>
                </div>
            </div>

            <div class="row content-services">
                <div class="col-md-6 order2">
                    <a href="{{ route('services.propertio') }}">
                        <center>
                            <img src="{{ url('/img/propertio.png') }}" alt="" class="img-fluid">
                        </center>
                    </a>
                </div>
                <div class="col-md-6 order1">
                    <a href="{{ route('services.propertio') }}">
                        <h3>Propertio</h3>
                    </a>
                    <div class="reguler-text">
                        <a href="https://propertio.id/"><span style="color: #449eec;">Propertio.id</span></a>
                        adalah sebuah aplikasi inovatif yang menyediakan solusi komprehensif di bidang
                        properti <span class="hidden">, mencakup kebutuhan pencari properti, pelaku usaha properti,
                            pembeli furnitur, </span> dan
                        individu yang berencana untuk membangun atau merenovasi properti. <span class="hidden"> Aplikasi
                            ini menyajikan
                            berbagai fitur yang dirancang untuk memudahkan pengguna dalam menjalankan berbagai aspek
                            yang terkait dengan dunia properti.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-detail">
        @include("layout.footer")
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>