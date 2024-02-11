@extends('services.services-detail')

@section('hero')
<div class="container">
    <div class="row">
        <div class="col-md-5 hero-card scroll1">
            <div class="sub-heading">
                Our Services
            </div>
            <h1>
                Mixed Reality
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
            </p>
        </div>
        <div class="col-md-7 text-end scroll3">
            <div class="hero-card">
                <img src="{{ url('/img/mr.png') }}" alt="Judul Profil" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
@section('services-detail')
<div class="scroll1">
    <div class="sub-heading">
        This is Subheader
    </div>
    <h2 class="mb-3">This is Header</h2>
    <div class="reguler-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur.
    </div>
</div>
<img src="{{ url('/img/detail-services/1.png') }}" alt="" class="img-fluid mt-4 scroll1">

<div class="scroll1">
    <div class="sub-heading pt-5">
        This is Subheader
    </div>
    <h2 class="mb-3">This is Header</h2>
    <div class="reguler-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur.
    </div>
</div>
<img src="{{ url('/img/detail-services/1.png') }}" alt="" class="img-fluid mt-4 scroll1">
@endsection

@section('services-value')
<div class="container">
    <div class="scroll1">
        <h2 class="text-center">Value Of Services</h2>
        <div class="reguler-text text-center text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et
            dolore magna aliqua.
        </div>
    </div>

    <div class="row mt-5 scroll3">
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
@endsection

@section('documentation')
<div class="container scroll1">
    <div class="detail-services text-center ">
        <h2>Documentation Section</h2>
        <div class="reguler-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et
            dolore magna aliqua.
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 frame">
            <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-4 frame">
            <img src="{{ url('/img/portfolio/portfolio2.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-4 frame">
            <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-4 frame">
            <img src="{{ url('/img/portfolio/portfolio2.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-4 frame">
            <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-4 frame">
            <img src="{{ url('/img/portfolio/portfolio1.png') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection