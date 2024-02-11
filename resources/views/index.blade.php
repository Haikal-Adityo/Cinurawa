<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <title>Immersive Technology in Property - CINURAWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/owl.carousel.min.css') }}" />
    <link rel="icon" href="{{ url('/img/logo-black.png') }}">
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-card hero1 scroll1">
                    <h1>
                        Extraordinary imaginations come true
                    </h1>
                    <p>
                        Join CINURAWA, the pioneer in immersive technology, bringing digital wonders to the real world.
                        Your brilliant ideas deserve realization. As passionate partners, we assist in crafting
                        revolutionary experiences. <span class="hidden">With our immersive technology, turn your
                            imagination into
                            unforgettable reality.
                        </span>
                    </p>
                    <a href="https://wa.me/6285702750455" />
                    <button class="button-primary me-3">Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                            <path
                                d="M12.3567 1.69675C12.3567 1.28254 12.0209 0.946749 11.6067 0.946744L4.85673 0.946666C4.44252 0.946661 4.10673 1.28244 4.10672 1.69666C4.10672 2.11087 4.4425 2.44666 4.85671 2.44667L10.8567 2.44674L10.8566 8.44673C10.8566 8.86095 11.1924 9.19674 11.6066 9.19674C12.0209 9.19675 12.3566 8.86097 12.3566 8.44675L12.3567 1.69675ZM1.53032 12.8336L12.137 2.22708L11.0764 1.16641L0.469676 11.7729L1.53032 12.8336Z"
                                fill="white" />
                        </svg>
                    </button>
                    </a>

                    <a href="#introduction">
                        <button class="button-secondary">Explore Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13"
                                fill="none">
                                <path
                                    d="M11.9634 11.3032C11.9634 11.7175 11.6276 12.0533 11.2134 12.0533L4.46342 12.0533C4.04921 12.0533 3.71342 11.7176 3.71341 11.3033C3.71341 10.8891 4.04919 10.5533 4.4634 10.5533L10.4634 10.5533L10.4633 4.55327C10.4633 4.13905 10.7991 3.80326 11.2133 3.80326C11.6275 3.80325 11.9633 4.13903 11.9633 4.55325L11.9634 11.3032ZM1.13701 0.166441L11.7437 10.7729L10.6831 11.8336L0.0763655 1.22711L1.13701 0.166441Z"
                                    fill="#041827" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="col-md-6 hero2 scroll3">
                    <div class="hero-card">
                        <img src="{{ url('/img/hero.png') }}" alt="Judul Profil" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="introduction">
        <div class="container">
            <div class="scroll1">
                <div class="sub-heading text-center">
                    Introduction
                </div>
                <h2 class="text-center mb-3">Who we are</h2>
                <div class="reguler-text text">
                    CINURAWA is a leading innovator in the realm of immersive technology, dedicated to turning digital
                    wonders into tangible reality. <span class="hidden">Our passion lies in making extraordinary ideas a
                        reality, firmly
                        believing that every great idea deserves to come to life.

                        As enthusiastic partners, we collaborate closely with you to craft revolutionary experiences
                        using
                        cutting-edge immersive technology. Our team is not just a solution provider; we are your
                        dedicated
                        allies, guiding you step by step in bringing your visions to life.</span>
                </div>
            </div>

            <div class="row scroll4">
                <div class="col-md-12 text-center">
                    <iframe width="888" height="514" src="https://www.youtube.com/embed/swK-sxvbXRI?si=Z3yF_Xkbk5QJgDP0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen class="mx-auto">
                    </iframe>
                </div>
            </div>

        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="scroll1">
                <div class="sub-heading text-center">
                    Our Services
                </div>
                <h2 class="text-center">Turn Imagination into Reality with Us</h2>
            </div>

            <div class="row content-services scroll4">
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
                    <center>
                        <img src="{{ url('/img/ar.png') }}" alt="" class="img-fluid">
                    </center>
                </div>
            </div>

            <div class="row content-services scroll3">
                <div class="col-md-6 order2">
                    <center>
                        <img src="{{ url('/img/vr.png') }}" alt="" class="img-fluid">
                    </center>
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

            <div class="row content-services scroll4">
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
                    <center>
                        <img src="{{ url('/img/mr2.png') }}" alt="" class="img-fluid">
                    </center>
                </div>
            </div>

            <div class="row content-services scroll3">
                <div class="col-md-6 order2">
                    <center>
                        <img src="{{ url('/img/propertio.png') }}" alt="" class="img-fluid">
                    </center>
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

    <section id="why">
        <div class="container scroll1">
            <h2 class="text-center">Why Choose Us</h2>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card-why">
                        <img src="{{ url('/img/why-choose/Leading-Expertise.png') }}" alt="">
                        <h3>Leading Expertise</h3>
                        <div class="reguler-text">
                            Our team comprises experts in the field, ready to deliver outstanding solutions in immersive
                            technology.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-why">
                        <img src="{{ url('/img/why-choose/Boundless-Innovation.png') }}" alt="">
                        <h3>Boundless Innovation</h3>
                        <div class="reguler-text">
                            We don't just follow trends; we create them. With CINURAWA, you become a part of the digital
                            future.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-why">
                        <img src="{{ url('/img/why-choose//Client-Commitment.png') }}" alt="">
                        <h3>Client Commitment</h3>
                        <div class="reguler-text">
                            Client satisfaction is our top priority. We work closely with you to ensure every project
                            reaches its full potential.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row scroll1">
                <div class="col-md-8">
                    <div class="sub-heading">
                        Our Portfolio
                    </div>
                </div>

                <div class="col-md-4 text-end see">
                    <a href="{{ route('portofolio.index') }}">
                        See All
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="15" viewBox="0 0 33 15" fill="none">
                            <path
                                d="M32.7071 8.20711C33.0976 7.81658 33.0976 7.18342 32.7071 6.79289L26.3431 0.428932C25.9526 0.0384078 25.3195 0.0384078 24.9289 0.428932C24.5384 0.819457 24.5384 1.45262 24.9289 1.84315L30.5858 7.5L24.9289 13.1569C24.5384 13.5474 24.5384 14.1805 24.9289 14.5711C25.3195 14.9616 25.9526 14.9616 26.3431 14.5711L32.7071 8.20711ZM0 8.5H32V6.5H0V8.5Z"
                                fill="#041827" />
                        </svg>
                    </a>
                </div>

                <h2>Portfolio Showcase</h2>
                <div class="reguler-text">
                    Explore Our Diverse Range of Innovative Solutions
                </div>
            </div>

            <div class="row mb-3 scroll4">
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

    <section id="reviews">
        <div class="container">
            <div class="sub-heading text-center scroll1">
                Reviews
            </div>
            <h2 class="text-center scroll1">What They says</h2>
            <!-- <div class="reguler-text text-center text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </div> -->
            <div class="slider scroll3">
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
            <div class="scroll1">
                <div class="sub-heading text-center">
                    Our Partners
                </div>
                <h2 class="text-center">Research and Clients</h2>
                <div class="reguler-text text-center">
                    We’ve been working with teams around the world
                </div>
            </div>

            <div id="owl-demo" class="owl-carousel owl-theme scroll3">
                <img src="{{ url('/img/partner/bca.png') }}" alt="">
                <img src="{{ url('/img/partner/grab.png') }}" alt="">
                <img src="{{ url('/img/partner/blibli.png') }}" alt="">
                <img src="{{ url('/img/partner/gojek.png') }}" alt="">
                <img src="{{ url('/img/partner/meta.png') }}" alt="">
                <img src="{{ url('/img/partner/crisp.png') }}" alt="">
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container scroll1">
            <div class="card-contact">
                <h2 class="text-contact">Ready to Bring Your Imagination to Life? Get in Touch with Us
                </h2>
                <a href="https://wa.me/6285702750455">
                    <button class="button-light">Contact Us
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
        @include("layout.footer")
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="{{ url('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/js/script.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ url('/js/scroll-reveal.js') }}"></script>
</body>

</html>