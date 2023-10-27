@extends('front.fmaster')
@section('page_title')
    <title>404 :: More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="error-page-area default-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6 thumb">
                <img src="{{ asset('front/img/illustration/5.png') }}" alt="Thumb">
            </div>
            <div class="col-lg-6">
                <div class="error-box">
                    <h1>404</h1>
                    <h2>Sorry page was not Found!</h2>
                    <p>
                        Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous.
                    </p>
                    <a class="btn circle btn-gradient effect btn-md" href="{{ url('/')}}">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection