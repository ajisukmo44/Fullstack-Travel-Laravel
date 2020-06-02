@extends('layouts.app')

@section('title')
NOMADS
@endsection

@section('content')
  <!-- header -->
  <header class="text-center">
    <h1>Explore the Beauty of Indonesia

        <br>
        With Just One Click</h1>
    <p>
        You will see beautiful scene<br>
        you never see before
    </p>
    <a href="#popular" class="btn btn-getstarted px-4 mt-4">TRAVEL NOW</a>

</header>
<!-- end header -->

<!-- main -->
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Patners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Popular Destinations</h2>
                    <p>Destinations that must be visited <br>
                        while in Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''  }}');">
                <div class="travel-country">{{ $item->location }}</div>
                <div class="travel-location">{{ $item->title }}</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ url('/detail',$item->slug) }}" class="btn btn-travel-details px-4">
                            View Details
                        </a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies are trusted us <br>
                        more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partner.png" alt="partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They are Loving Us
                    </h2>
                    <p>Moment were giving them <br>
                        the best experience</p>
                </div>
            </div>
        </div>

    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-testimonial-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testi.png" alt="testi" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Aji Sukmo</h3>
                            <p class="testimonial">
                                "The trip was amazing and I saw something mesmerizing in that mount that make me
                                want
                                to learn more"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Mount Bromo
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testi2.png" alt="testi" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Aji Sukmo</h3>
                            <p class="testimonial">
                                "The trip was amazing and I saw something mesmerizing in that mount that make me
                                want
                                to learn more"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Mount Bromo
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testi3.png" alt="testi" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Aji Sukmo</h3>
                            <p class="testimonial">
                                "The trip was amazing and I saw something mesmerizing in that mount that make me
                                want
                                to learn more"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Mount Bromo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- end main -->
@endsection
