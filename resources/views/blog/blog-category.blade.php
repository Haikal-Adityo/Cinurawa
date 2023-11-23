<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <title>Blog Page Cinurawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="nav-link active" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="search" class="search-margin-top">
        <div class="container">
            <div class="row search-container">
                <div class="col-md-8">
                    <div class="row row-search">
                        <div class="col"><a href="{{ route('blog.index') }}">Home</a></div>
                        @foreach($categories as $navCategory)
                            <div class="col"><a href="{{ route('blog.category', ['category' => $navCategory->name]) }}">{{ $navCategory->name }}</a></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="{{ route('blog.search')}}" method="GET">
                        @csrf
                        <div class="search">
                            <input type="text" class="search-input" placeholder="search..." name="query">
                            <button type="submit" class="search-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z"
                                        fill="#4A5A67" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            @if($posts->count() > 0)
                <div class="d-flex mb-5">
                    <div class="me-24"><img src="{{ url('/img/blogs/blog-category.png') }}" alt=""></div>
                    <div>
                        <h2>{{ $categoryModel->name }}</h2>
                    </div>
                </div>
                
                @foreach($posts->where('is_published', true)->sortByDesc('created_at') as $post)
                <div class="row mt-5">
                    <div class="col-md-4">
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid img-blog">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-9">
                            <div>
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"><h3>{{ $post->title }}</h3></a> 
                            </div>
                                <div class="blog-category-subtitle mb-3">{!! $post->content !!}</div>
                                <div class="blog-category-time d-flex">
                                    
                                    <a href="{{ route('blog.category', ['category' => $post->category->name]) }}">
                                        @if($post->category && $post->category->name == 'Property')
                                            <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label">
                                        @elseif($post->category && $post->category->name == 'Financial')
                                            <img src="{{ url('/img/blogs/financial-label.png') }}" alt="" class="img-blog-label">
                                        @elseif($post->category && $post->category->name == 'Architecture')
                                            <img src="{{ url('/img/blogs/architecture-label.png') }}" alt="" class="img-blog-label">
                                        @elseif($post->category && $post->category->name == 'Creativity')
                                            <img src="{{ url('/img/blogs/creativity-label.png') }}" alt="" class="img-blog-label">
                                        @elseif($post->category && $post->category->name == 'Lifestyle')
                                            <img src="{{ url('/img/blogs/lifestyle-label.png') }}" alt="" class="img-blog-label">
                                        @elseif($post->category && $post->category->name == 'Culture')
                                            <img src="{{ url('/img/blogs/culture-label.png') }}" alt="" class="img-blog-label">
                                        @else
                                            <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label">
                                        @endif
                                    </a>

                                    <div class="reguler-text ms-4">
                                        {{ $post->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="d-flex pb-5">
                <div class="me-24"><img src="{{ url('/img/blogs/category icon.png') }}" alt=""></div>
                <div>
                    <h2>{{ $categoryModel->name }}</h2>
                    <div class="sub-heading pb-2">No blog content yet</div>
                </div>
            </div>
            @endif
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