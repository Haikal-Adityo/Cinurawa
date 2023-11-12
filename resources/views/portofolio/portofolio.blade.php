<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <title>Portfolio - CINURAWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="icon" href="{{ url('/img/logo-black.png') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">
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
                        <a class="nav-link active" href="#">Portofolio</a>
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
        <div class="container bg-hero-portofolio pt-5 pb-5 hero-services">
            <h1 class="text-center">Journey Through Our <span>Works</span></h1>
            <div class="reguler-text text-center mt-4 pb-5">
                lorem ipsum dolor sit amet megalodon lorem ipsum dolor sit amet megalodon lorem ipsum dolor sit amet
                megalodon lorem ipsum dolor sit amet
            </div>
        </div>
    </section>

    <div class="content">
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sub-heading">
                            Our Portfolio
                        </div>
                        <h2>Sample of portofolio header</h2>
                        <div class="reguler-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>

                <div class="row">

                    @foreach($portfolios->sortByDesc('created_at') as $portfolio)
                        <div class="col-md-4 frame">
                            <a href="{{ route('portofolio.show', ['slug' => $portfolio->slug]) }}">
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid rounded">
                                <h3 class="title">{{ $portfolio->title }}</h3>
                                <div class="reguler-text sub-title">
                                    {{ $portfolio->created_at->format('d F Y') }}
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>

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