@extends('layouts.checkout')
@section('title', 'Checkout Page')
    
@section('content')
      <main>
            <section class=" section-details-header">
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
                                    <li class="breadcrumb-item">
                                        Details
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Checkout
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h2>Who's Going ?</h2>
                                <p>
                                    Trip to Bromo, Jawa Timur, Indonesia
                                </p>
                                <div class="attendee px-0">
                                    <table class="table table-responsive-sm table-borderless text-center ">
                                        <thead>
                                            <tr class="col-lg-12  col-sm-2">
                                                <th scope="col">Picture</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Address/Nationality</th>
                                                <th scope="col">Visa</th>
                                                <th scope="col">Passport</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="col"><img src="{{url('frontend/images/testimonial.png')}}" height="60">
                                                </td>
                                                <td class="align-middle">
                                                    Dicky Setiawan
                                                </td>
                                                <td class="align-middle">
                                                    Bandung
                                                </td>
                                                <td class="align-middle">
                                                    N/A
                                                </td>
                                                <td class="align-middle">
                                                    Activate
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img src="{{url('frontend/images/remove.png')}}" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{url('frontend/images/testimonial.png')}}" height="60">
                                                </td>
                                                <td class="align-middle">
                                                    Dicky Setiawan
                                                </td>
                                                <td class="align-middle">
                                                    Bandung
                                                </td>
                                                <td class="align-middle">
                                                    N/A
                                                </td>
                                                <td class="align-middle">
                                                    Activate
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img src="{{url('frontend/images/remove.png')}}" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{url('frontend/images/testimonial.png')}}" height="60">
                                                </td>
                                                <td class="align-middle">
                                                    Dicky Setiawan
                                                </td>
                                                <td class="align-middle">
                                                    Bandung
                                                </td>
                                                <td class="align-middle">
                                                    N/A
                                                </td>
                                                <td class="align-middle">
                                                    Activate
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img src="{{url('frontend/images/remove.png')}}" alt=""></a>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="add-member mt-3">
                                    <h2>Add Member</h2>
                                    <form class="form-inline">
                                        <label class="sr-only" for="formInputUsername">
                                            Username
                                        </label>
                                        <input type="text" class="form-control mr-sm-2 mb-2" id="formInputUsername"
                                            placeholder="Username">

                                        <label class="sr-only" for="formInputVisa">
                                            Visa
                                        </label>
                                        <select class="custom-select mr-sm-2 mb-2" id="formInputVisa"
                                            name="formInputVisa">
                                            <option selected class="text-muted" value="visa"> Visa</option>
                                            <option value="30 Days">30 Days</option>
                                            <option value="N/A">N/A</option>
                                        </select>

                                        <label class="sr-only" for="formInputPassport">
                                            DOE Passport
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker" id="formInputPassport"
                                                placeholder="DOE Passport">
                                        </div>
                                        <button type="submit" class="btn btn-add-member mb-2 px-4">Add Member</button>
                                    </form>
                                    <h2 class="mt-3 mb-0">Note :</h2>
                                    <p class="disclaimer mb-0">Youre only able to invite member that has registered as
                                        ALFATH
                                        account</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-details card-right">
                                <h2 class="text-center py-0">Check Out Information</h2>
                                <hr>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">3 Person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional Visa</th>
                                        <td width="50%" class="text-right">-</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Price</th>
                                        <td width="50%" class="text-right">IDR 300.000/person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total Price</th>
                                        <td width="50%" class="text-right">IDR 900.000</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+ unic code)</th>
                                        <td width="50%" class="text-right text-total">
                                            <span class="text-blue"> IDR 900. </span> <span class="text-orange">
                                                022</span>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <h2>Payments</h2>
                                <p>Please complete your payment before
                                    continue the trip</p>
                                <table class="payment col-12">
                                    <tr>
                                        <td class="align-middle">
                                            <img src="{{url('frontend/images/icon_atm.png')}}" alt="">
                                        </td>
                                        <td class="align-middle">
                                            <h2>PT. Al Fath Jaya</h2>
                                            <p class="p-0">BNI Syariah
                                                <br>
                                                0768 98625 5845</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            <div class="join-container text-center">
                                <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2"> I Have Made
                                    Payment</a>
                                <a href="{{route('home')}}" class="cancel-booking">Cancel Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
@push('prepend-style')
      <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush
@push('addon-script')
        <script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
        <script>
        $('.datepicker').datepicker({
                    uiLibrary: 'bootstrap4',
                    icons: {
                        rightIcon: '<img src="{{url('frontend/images/icon_date.png')}}" >'
                    }

                });
        </script>
@endpush
