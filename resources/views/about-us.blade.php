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
        <div class="container bg-hero-portofolio hero-services scroll1">
            <h1 class="text-center">Where Imagination Meets <span style="color: #D0920B;">Reality</span> </h1>
        </div>
    </section>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-3 scroll4">
                    <div class="sub-heading pt-5">
                        Introduction
                    </div>
                    <h2>We’ll Brings Imaginations Came True </h2>
                </div>
                <div class="col-md-9 scroll3">
                    <div class="reguler-text text-about">
                        <p>
                            CINURAWA stands at the forefront of immersive technology, leading the charge to transform
                            digital wonders into palpable reality. Rooted in our dedication to bringing extraordinary
                            ideas to life, we firmly believe that each brilliant concept deserves realization.
                        </p>
                        <span class="hidden">
                            <p>
                                As your devoted partners, our collaboration extends beyond mere solution provision. We
                                immerse ourselves in your vision, working hand in hand to shape revolutionary
                                experiences
                                through state-of-the-art immersive technology. Beyond being a team, we emerge as your
                                committed allies, providing meticulous guidance at every step of the journey to breathe
                                life
                                into your extraordinary visions.
                            </p>

                            <p>
                                At CINURAWA, we don't just embrace innovation; we define it, ensuring that your ideas
                                not
                                only flourish but leave an indelible mark on the evolving landscape of immersive
                                technology.
                                Join us as we embark on a transformative journey to turn the extraordinary into the
                                tangible, one visionary idea at a time.
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order2 scroll4">
                    <div class="card-vision">
                        <div class="d-flex">
                            <div><img src="{{ url('/img/abous-us/customer.png') }}" alt=""></div>
                            <div>
                                <h3>Customer-Centric Approach</h3>
                                <p class="reguler-text">Provide innovative and customer-oriented solutions to meet the
                                    needs and expectations of customers with a high standard of excellence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-vision mt-3">
                        <div class="d-flex">
                            <div><img src="{{ url('/img/abous-us/Fulfillment of Imagination.png') }}" alt=""></div>
                            <div>
                                <h3>Fulfillment of Imagination</h3>
                                <p class="reguler-text">Present products and services that not only meet but exceed the
                                    imagination of customers, crafting moments that linger in memory.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-vision mt-3">
                        <div class="d-flex">
                            <div><img src="{{ url('/img/abous-us/Collab.png') }}" alt=""></div>
                            <div>
                                <h3>Collaboration</h3>
                                <p class="reguler-text">Building partnerships and creative collaborations with
                                    individuals, companies, and institutions to stimulate the development of ideas and
                                    technology.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 our-vision order1 scroll1">
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
                <div class="col-md-7 scroll1">
                    <div class="sub-heading">
                        CEO & Founder of Cinurawa
                    </div>
                    <h2>Aryaputra F.A.</h2>
                    <p class="reguler-text">
                        CINURAWA emerges as a pioneering company and research institution in the field of Immersive
                        Technology, with a focus on providing solutions and transforming imagination into reality.
                    </p>
                </div>
                <div class="col-md-5 scroll3">
                    <img src="{{ url('/img/abous-us/ceo.png') }}" alt="" class="img-fluid ceo-img">
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5 pt-5 scroll1">
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
        <div class="container scroll1">
            <h2 class="text-center">Gallery</h2>
            <div class="reguler-text text-center text">
                Check out some exciting activities we've been up to!
            </div>

            <div class="row mt-5 scroll1">
                <div class="col-md-4 mb-5">
                    <img src="{{ url('/img/gallery/1.png') }}" alt="" class="img-fluid mx-auto">
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
        @include("layout.footer")
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ url('/js/scroll-reveal.js') }}"></script>
</body>

</html>