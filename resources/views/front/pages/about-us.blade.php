@extends('front.fmaster')
@section('page_title')
    <title>About Us :: More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url({{ $aboutsData->bg_image }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>About Us</h2>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ================ End Breadcrumb ================ -->
<div class="about-area center-responsive default-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="{{ asset($aboutsData->image) }}" alt="Thumb">
                </div>
            </div>
            <div class="col-lg-6 info">
                <h5>Discover Our Company</h5>
                <h2 class="area-title">{{ $aboutsData->title }}</h2>
                <p>{!! $aboutsData->sort_desc !!}</p>
                <ul class="achivement">
                    <li>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="{{ $aboutsData->global_presence }}" data-speed="5000">{{ $aboutsData->global_presence }}</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Global Presence</span>
                        </div>
                    </li>
                    <li>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="100" data-speed="5000">100</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Satisfaction</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ================ End About Area ================ -->
<div class="choose-us-area overflow-hidden reverse default-padding bg-gray">
    <div class="container">
        <div class="row align-center">
            
            <div class="col-lg-6 info wow fadeInUp">
                <h5>Why Choose Us</h5>
                <h2 class="area-title">{{ $aboutsData->title_02 }}</h2>
                <p>{{ $aboutsData->sort_desc_02 }}</p>
                <ul>
                    <li>Experts around  the world</li>
                    <li>Best Practice for industry</li>
                </ul>
                <div class="contact">
                    <p>Join our team – come work with us.</p>
                    <h4><i class="fas fa-phone"></i> {{ $settingsData->author_phone }}</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumb wow fadeInRight" data-wow-delay="0.6s">
                    <img src="{{ asset($aboutsData->image_02)}}" alt="Thumb">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ================ End Why Choose Us Area ================ -->
<div class="faq-area overflow-hidden rectangular-shape default-padding">
    <div class="container">
        <div class="faq-items">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="{{ asset($aboutsData->faq_bg_image) }}" alt="Thumb">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-content">
                        <h5>faq</h5>
                        <h2 class="area-title">{{ $aboutsData->faq_title }}</h2>
                        <div class="accordion" id="accordionExample">
                            @foreach ($FAQData as $item)
                            <div class="card">
                                <div class="card-header" id="heading{{$item->id}}">
                                    <h4 class="mb-0" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">{{ $item->question }}</h4>
                                </div>

                                <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="heading{{$item->id}}" data-parent="#accordionExample">
                                    <div class="card-body"><p>{!! $item->answer !!}</p></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================ End Faq ================ -->
@endsection