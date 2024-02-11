<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/fav-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/fav-icon.png') }}" type="image/x-icon">
    <title>Blog Page - CINURAWA</title>
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
                        <a class="nav-link active" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container bg-hero-blog hero-services scroll1">
            <div class="sub-heading-blog">Our Blog</div>
            <h1 class="text-center">Explore Our <span class="insight">Insights</span></h1>
        </div>
    </section>

    <section id="search" class="search-blog scroll2">
        <div class="container">
            <div class="row search-container">
                <div class="col-md-8">
                    <div class="row row-search">
                        <div class="col"><a href="#">Home</a></div>
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

    {{-- *LATEST POST ====================================================================================--}}

    <section id="blog-content">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-6 scroll1">
                    <a href="{{ route('blog.latest') }}">
                        <h2 class="mb-1">Latest</h2>
                    </a>
                </div>
                <div class="col-md-6 col-6 text-end see">
                    <a href="{{ route('blog.latest') }}">
                        See All
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="15" viewBox="0 0 33 15" fill="none">
                            <path
                                d="M32.7071 8.20711C33.0976 7.81658 33.0976 7.18342 32.7071 6.79289L26.3431 0.428932C25.9526 0.0384078 25.3195 0.0384078 24.9289 0.428932C24.5384 0.819457 24.5384 1.45262 24.9289 1.84315L30.5858 7.5L24.9289 13.1569C24.5384 13.5474 24.5384 14.1805 24.9289 14.5711C25.3195 14.9616 25.9526 14.9616 26.3431 14.5711L32.7071 8.20711ZM0 8.5H32V6.5H0V8.5Z"
                                fill="#041827" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="row scroll2">
                @foreach($posts->sortByDesc('created_at')->where('is_published', true)->take(3) as $post)
                    <div class="col-md-4 mt-5">
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid img-blog">
                        </a>

                        <a href="{{ route('blog.category', ['category' => $post->category->name]) }}">
                            @if($post->category && $post->category->name == 'Property')
                                <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @elseif($post->category && $post->category->name == 'Financial')
                                <img src="{{ url('/img/blogs/financial-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @elseif($post->category && $post->category->name == 'Architecture')
                                <img src="{{ url('/img/blogs/architecture-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @elseif($post->category && $post->category->name == 'Creativity')
                                <img src="{{ url('/img/blogs/creativity-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @elseif($post->category && $post->category->name == 'Lifestyle')
                                <img src="{{ url('/img/blogs/lifestyle-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @elseif($post->category && $post->category->name == 'Culture')
                                <img src="{{ url('/img/blogs/culture-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @else
                                <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                            @endif
                        </a>

                        <div>
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"><h3>{{ $post->title }}</h3></a> 
                        </div>
                        <div class="sub-title">{{ $post->created_at->diffForHumans() }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- *POST CATEGORIES ====================================================================================--}}

    @foreach($categories as $category)
    @php
        $publishedPosts = $category->posts->where('is_published', true);
    @endphp
    @if($publishedPosts->count() > 0)
        <section id="blog-content">
            <div class="container pb-5 scroll1">
                <div class="row">
                    <div class="col-md-6 col-6">
                        <a href="{{ route('blog.category', ['category' => $category->name]) }}">
                            <h2 class="mb-1">{{ $category->name }}</h2>
                        </a>
                    </div>
                    <div class="col-md-6 col-6 text-end see">
                        <a href="{{ route('blog.category', ['category' => $category->name]) }}">
                            See All
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="15" viewBox="0 0 33 15" fill="none">
                                <path
                                    d="M32.7071 8.20711C33.0976 7.81658 33.0976 7.18342 32.7071 6.79289L26.3431 0.428932C25.9526 0.0384078 25.3195 0.0384078 24.9289 0.428932C24.5384 0.819457 24.5384 1.45262 24.9289 1.84315L30.5858 7.5L24.9289 13.1569C24.5384 13.5474 24.5384 14.1805 24.9289 14.5711C25.3195 14.9616 25.9526 14.9616 26.3431 14.5711L32.7071 8.20711ZM0 8.5H32V6.5H0V8.5Z"
                                    fill="#041827" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="row">
                    @foreach($category->posts->sortByDesc('created_at')->where('is_published', true)->take(2) as $post)
                        <div class="col-md-6 mt-5" id="row-1" >
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid img-blog">
                            </a>

                            <a href="{{ route('blog.category', ['category' => $post->category->name]) }}">
                                @if($post->category && $post->category->name == 'Property')
                                    <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Financial')
                                    <img src="{{ url('/img/blogs/financial-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Architecture')
                                    <img src="{{ url('/img/blogs/architecture-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Creativity')
                                    <img src="{{ url('/img/blogs/creativity-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Lifestyle')
                                    <img src="{{ url('/img/blogs/lifestyle-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Culture')
                                    <img src="{{ url('/img/blogs/culture-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @else
                                    <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @endif
                            </a>

                            <div>
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"><h3>{{ $post->title }}</h3></a> 
                            </div>
                            <div class="sub-title">{{ $post->created_at->format('d F Y') }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    @foreach($category->posts->sortByDesc('created_at')->where('is_published', true)->skip(2)->take(3) as $post)
                        <div class="col-md-4 mt-5">
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid img-blog">
                            </a>

                            <a href="{{ route('blog.category', ['category' => $post->category->name]) }}">
                                @if($post->category && $post->category->name == 'Property')
                                    <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Financial')
                                    <img src="{{ url('/img/blogs/financial-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Architecture')
                                    <img src="{{ url('/img/blogs/architecture-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Creativity')
                                    <img src="{{ url('/img/blogs/creativity-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Lifestyle')
                                    <img src="{{ url('/img/blogs/lifestyle-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @elseif($post->category && $post->category->name == 'Culture')
                                    <img src="{{ url('/img/blogs/culture-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @else
                                    <img src="{{ url('/img/blogs/property-label.png') }}" alt="" class="img-blog-label mt-3 mb-3">
                                @endif
                            </a>

                            <div>
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"><h3>{{ $post->title }}</h3></a> 
                            </div>
                            <div class="sub-title">{{ $post->created_at->format('d F Y') }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
    @endforeach

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