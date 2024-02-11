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
        <div class="container bg-hero-portofolio pt-5 pb-5 hero-services scroll1">
            <h1 class="text-center">Journey Through Our <span class="works">Works</span></h1>
            <div class="reguler-text text-center mt-4 pb-5">
                Embark on a visual odyssey through our diverse works and witness the transformative touch of CINURAWA.
                <span class="hidden">Explore a journey where innovation meets excellence, showcasing our commitment to
                    bringing unique and
                    impactful solutions to life. Discover the extraordinary with CINURAWA as your guide through our
                    creative
                    endeavors.
                </span>
            </div>
        </div>
    </section>

    <div class="content">
        <section id="portfolio">
            <div class="container">
                <div class="scroll1">
                    <div class="sub-heading text-center">
                        Our Portfolio
                    </div>
                    <h2 class="text-center">Portfolio Showcase</h2>
                    <div class="reguler-text text-center">
                        Explore Our Diverse Range of Innovative Solutions
                    </div>
                </div>
                <div class="row mt-4 scroll4">
                    @foreach($portfolios->sortByDesc('created_at') as $portfolio)
                    <div class="col-md-4 frame">
                        <a href="{{ route('portofolio.show', ['slug' => $portfolio->slug]) }}">
                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->title }}"
                                class="img-fluid img-portofolio">
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
        @include("layout.footer")
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ url('/js/scroll-reveal.js') }}"></script>
</body>

</html>