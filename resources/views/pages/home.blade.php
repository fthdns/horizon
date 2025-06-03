@extends('layouts.app')

@section('title', 'Horizon')

@section('content')
    <div class="bg">
        <!-- Header -->
        <header class="text-center">
            <h1>
                Discover the Stunning World
                <br>
                With Just One Click
            </h1>
            <p class="mt-3">
                Experience breathtaking
                <br>
                moments like never before
            </p>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">
                Get Started
            </a>
        </header>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Section Stats -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail" id="stats-detail-1">
                    <h2>42K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail" id="stats-detail-2">
                    <h2>15</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail" id="stats-detail-3">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail" id="stats-detail-4">
                    <h2>78</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Section Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Popular Destinations</h2>
                        <p>Something you have never explored 
                        <br>
                        before in the world</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Popular Content -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''}}');">
                                <div class="travel-country">{{ $item->location }}</div>
                                <div class="travel-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Network -->
        <section class="section-network" id="network">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>Companies rely on us
                        <br>
                        for more than just a journey.</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/partners.png" alt="Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonial Heading -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>We provide them with
                        <br>
                        unforgettable experiences</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonial Content -->
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-1.png" alt="User" class="testimonial-pic mb-4 rounded-circle">
                                <h3 class="mb-4">Bannon Morris</h3>
                                <p class="testimonial">
                                    “It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankeeeeee”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-2.png" alt="User" class="testimonial-pic mb-4 rounded-circle">
                                <h3 class="mb-4">Sonny Jane</h3>
                                <p class="testimonial">
                                    “I loved it when the wind was shaking harder, I was scared too”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Cappadocia
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-3.png" alt="User" class="testimonial-pic mb-4 rounded-circle">
                                <h3 class="mb-4">Ronald Choman</h3>
                                <p class="testimonial">
                                    “The trip was amazing and I saw something beautiful view of buildings and beach”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Palm Jumeirah
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection