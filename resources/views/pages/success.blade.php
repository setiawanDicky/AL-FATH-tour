@extends('layouts.success')
@section('title', 'Success Page')

@section('content')
     <main>
            <section class=" section-details-header success-page ">
            </section>

            <section class="section-success-page  align-items-center mb-2">
                <div class="container">
                    <div class="col text-center">
                        <img src="{{url('frontend/images/icon_success.png')}}" class="col-auto" alt="">
                        <h1 class="col-auto">Yaay! Success </h1>
                        <p class="col-auto"> we've send receipt and detail
                            trip instruction
                            <br>
                            please check your email</p>
                        <a href="{{route('home')}}" class="btn btn-home mt-3 px-5 ">Home</a>
                    </div>
                </div>

            </section>

        </main>
@endsection