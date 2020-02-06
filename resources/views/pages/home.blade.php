@extends('layouts.app')

@section('title')
Al - FATH    
@endsection

@section('content')
    
        <!-- header -->
        <header class="text-center ">
            <h1>Start Your Life Journey
                <br>
                Goodness
            </h1>
            <p class="mt-3">
                get your journey experience
                <br>
                with our goodness
            </p>
            <a href="#popularContent" class="btn btn-get-started px-4 mt-4">
                GET STARTED
            </a>

        </header>

        <!-- main -->
        <main>
            <!-- statistik -->
            <div class="container">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="col-6 col-md-3 stats-detail">
                        <h2>2K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-6 col-md-3 stats-detail">
                        <h2>Many Places</h2>
                        <p>50+ Destination</p>
                    </div>
                    <div class="col-6 col-md-3 stats-detail">
                        <h2>100+</h2>
                        <p>Partnership</p>
                    </div>
                    <div class="col-6 col-md-3 stats-detail">
                        <h2>Best Quality</h2>
                        <p>Service anda Facility</p>
                    </div>
                </section>
            </div>

            <!-- popular heading-->
            <section class="section-popular" id="popular">
                <div class="container">
                    <div class="row">
                        <div class="col text-center section-popular-heading">
                            <h2>Wisata Populer</h2>
                            <p>dengan pelayanan terbaik
                                <br>
                                hadirkan pengalaman yang tak terlupakan</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- contnt poular -->
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel d-flex flex-column text-center"
                                style="background-image: url('frontend/images/bromo.jpg');">
                                <div class="travel-country">Indonesia</div>
                                <div class="travel-location">Bromo, Jawa Timur</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel d-flex flex-column text-center"
                                style="background-image: url('frontend/images/bali.jpg');">
                                <div class="travel-country">Indonesia</div>
                                <div class="travel-location">Bali</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel d-flex flex-column text-center"
                                style="background-image: url('frontend/images/mekah.jpg');">
                                <div class="travel-country">Saudi Arabia</div>
                                <div class="travel-location">Mekah</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel d-flex flex-column text-center"
                                style="background-image: url('frontend/images/kyoto.jpg');">
                                <div class="travel-country">Jepang</div>
                                <div class="travel-location">Kyoto</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- our networks -->
            <section class="section-network">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Our Networks</h2>
                            <p>Companies trusted us
                                <br>
                                more than just a trip</p>
                        </div>
                        <div class="col-md-8 text-center">
                            <img src="{{url('frontend/images/partner.png')}}" alt="logo partner" class="image-partner">
                        </div>
                    </div>
                </div>
            </section>

            <!-- testimonial heading -->
            <section class="section-testimonial-heading">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>They Are Loving Us</h2>
                            <p>Moments were giving them
                                <br>
                                Best Experience</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section testimonial content -->
            <section class="section section-testimonial-content" id="testimonialContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="{{url('frontend/images/testimonial.png')}}" alt="user" class="mb-4 rounded-circle">
                                    <h2 class="mb-4">Dicky Setiawan</h2>
                                    <p class="testimonial">"this trip, so
                                        addicted me
                                        haha,, where's Next?"</p>
                                    <hr>
                                    <p class="trip-to mt-auto">
                                        Trip to Bromo, Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="{{url('frontend/images/testimonial.png')}}" alt="user" class="mb-4 rounded-circle">
                                    <h2 class="mb-4">Dicky Setiawan</h2>
                                    <p class="testimonial">"this trip, so addicted me
                                        haha,, where's Next?"</p>
                                    <hr>
                                    <p class="trip-to mt-auto">
                                        Trip to Bromo, Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="{{url('frontend/images/testimonial.png')}}" alt="user" class="mb-4 rounded-circle">
                                    <h2 class="mb-4">Dicky Setiawan</h2>
                                    <p class="testimonial">"this trip, so addicted me
                                        haha,, where's Next?"</p>
                                    <hr>
                                    <p class="trip-to mt-auto">
                                        Trip to Bromo, Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1"> Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1"> Get Started</a>
                    </div>
                </div>
            </section>
        </main>
@endsection