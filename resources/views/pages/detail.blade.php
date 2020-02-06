@extends('layouts.app')
@section('title', 'Detail Page')

@section('content')
      <main>
            <section class="section-details-header">
            </section>
            <section class="section-details-content">
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <nav>
                                <ol class="breadcrumb pl-lg-0 pl-md-0">
                                    <li class="breadcrumb-item">
                                        Home
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Details
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>Bromo</h1>
                                <p>Indonesia</p>
                                <div class="galery">
                                    <div class="xzoom-container">
                                        <img src="frontend/images/bromo/prev-1.jpg" alt="main" class="xzoom "
                                            id="xzoom-default" xoriginal="frontend/images/bromo/prev-1.jpg">
                                    </div>
                                    <div class="xzoom-thumbs">
                                        <a href="frontend/images/bromo/prev-1.jpg">
                                            <img src="frontend/images/bromo/prev-1.jpg" class="xzoom-galery" width="128"
                                                xpreview="frontend/images/bromo/prev-1.jpg">
                                        </a>

                                        <a href="frontend/images/bromo/prev-2.jpg">
                                            <img src="frontend/images/bromo/prev-2.jpg" class="xzoom-galery" width="128"
                                                xpreview="frontend/images/bromo/prev-2.jpg">
                                        </a>

                                        <a href="frontend/images/bromo/prev-3.jpg">
                                            <img src="frontend/images/bromo/prev-3.jpg" class="xzoom-galery" width="128"
                                                xpreview="frontend/images/bromo/prev-3.jpg">
                                        </a>

                                        <a href="frontend/images/bromo/prev-2.jpg">
                                            <img src="frontend/images/bromo/prev-2.jpg" class="xzoom-galery" width="128"
                                                xpreview="frontend/images/bromo/prev-2.jpg">
                                        </a>

                                        <a href="frontend/images/bromo/prev-3.jpg">
                                            <img src="frontend/images/bromo/prev-3.jpg" class="xzoom-galery" width="128"
                                                xpreview="frontend/images/bromo/prev-3.jpg">
                                        </a>
                                    </div>
                                </div>
                                <h2>Tentang Wisata</h2>
                                <p>adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki
                                    ketinggian 2.329 meter di atas permukaan
                                    laut
                                    dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten
                                    Pasuruan, Kabupaten Lumajang, dan
                                    Kabupaten Malang.
                                </p>
                                <p>Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek
                                    wisata, Bromo menjadi menarik
                                    karena statusnya sebagai gunung berapi yang masih aktif.
                                </p>
                                <div class="features row">
                                    <div class="col-md-4">
                                        <div class="description">
                                            <img src="frontend/images/icon_event.png" alt="features-image"
                                                class="features-img">
                                            <div class="description">
                                                <h3>Feature</h3>
                                                <p>Tari Kecak</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                        <div class="description">
                                            <img src="frontend/images/icon_language.png" alt="features-image"
                                                class="features-img">
                                            <div class="description">
                                                <h3>Language</h3>
                                                <p>Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                        <div class="description">
                                            <img src="frontend/images/icon_food.png" alt="features-image"
                                                class="features-img">
                                            <div class="description">
                                                <h3>Food</h3>
                                                <p>Local Foods</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-details card-right">
                                <h2>Members Are Going</h2>
                                <div class="members my-2">
                                    <img src="frontend/images/testimonial.png" alt="" class="member-img mr-1">
                                    <img src="frontend/images/member1.png" alt="" class="member-img mr-1">
                                    <img src="frontend/images/testimonial.png" alt="" class="member-img mr-1">
                                    <img src="frontend/images/member1.png" alt="" class="member-img mr-1">
                                    <img src="frontend/images/testimonial.png" alt="" class="member-img mr-1">
                                    <img src="frontend/images/member+.png" alt="" class="member-img mr-1">
                                </div>
                                <hr>
                                <h2>Trip Information</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Date of departure</th>
                                        <td width="50%" class="text-right">22, Dec 2019</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Duration</th>
                                        <td width="50%" class="text-right">3D 2N</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Type of trip</th>
                                        <td width="50%" class="text-right">Open public</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Price</th>
                                        <td width="50%" class="text-right">IDR 300.000/person</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="join-container">
                            <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2"> Join Trip Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}">
@endpush

@push('addon-script')
 <script src="{{url('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
        <script>
            $(function () {
                $('.xzoom, .xzoom-galery').xzoom({

                    zoomWidth: 500,
                    title: false,
                    tint: '#333',
                    xoffset: 15

                });
            });
        </script>
@endpush


    