@extends('front.fmaster')
@section('page_title')
    <title>More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="banner-area content-bg circle-shape">
    <!-- Background -->
    <div class="bg" style="background-image: url( {{ asset($homeBanners->image) }} );"></div>
    <!-- End Background -->
    <div class="item">
        <div class="container">
            <div class="row align-center">              
                <div class="col-lg-7 offset-lg-5">
                    <div class="content">
                        <h4 class="wow fadeInUp">{{ $homeBanners->sub_title }}</h4>
                        <h2 class="wow fadeInDown">{{ $homeBanners->title }}</h2>
                        <p class="wow fadeInLeft">{!! $homeBanners->sort_desc !!}</p>
                        <a href="#" class="btn-animate wow fadeInRight">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Get started</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================== End Banner ====================== -->
<div class="fun-fact-area text-light text-center default-padding bg-gradient">
    <div class="container">
        <div class="fun-fact-items">
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="counter">
                            <div class="timer" data-to="58" data-speed="5000">58</div>
                            <div class="operator">K</div>
                        </div>
                        <span class="medium">Happy Clients</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="counter">
                            <div class="timer" data-to="875" data-speed="5000">875</div>
                            <div class="operator">+</div>
                        </div>
                        <span class="medium">Finished Projects</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="counter">
                            <div class="timer" data-to="42" data-speed="5000">42</div>
                            <div class="operator">+</div>
                        </div>
                        <span class="medium">Skilled Experts</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="counter">
                            <div class="timer" data-to="100" data-speed="5000">100</div>
                            <div class="operator">%</div>
                        </div>
                        <span class="medium">Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================== End Fun Factor Area ====================== -->
<div class="about-area half-bg default-padding overflow-hidden">
    <div class="container">
        <div class="about-content">
            <div class="row">
                <div class="col-lg-7 info">
                    <div class="top-info">
                        <h5>Discover Our Company</h5>
                        <h2 class="area-title">{{ $homeAbouts->title }}</h2>
                        <p>{!! $homeAbouts->sort_desc !!}</p>
                        <a class="btn circle btn-gradient effect btn-md" href="{{ URL::to($homeAbouts->button) }}">Learn More</a>
                    </div>
                    <div class="bottom-info inc-bg">
                        <h2>client’s interactions!</h2>
                        <div class="clients-carousel-3-col owl-carousel owl-theme">
                            @foreach ($brandCollection as $item)
                                <a href="{{ $item->domain_link }}"><img src="{{ asset($item->brand_logo) }}" alt="{{ $item->project_name }}"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 thumbs">
                    <div class="thumb-items">
                        <img src="{{ asset('front/img/about/4.jpg') }}" alt="Thumb">
                        <div class="video">
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube">
                                <div class="relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </div>
                                 <span>Watch Our Story</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================== End About Area ====================== -->

<div class="work-process-area default-padding-top">
    <!-- Shape -->
    <div class="fixed-shape">
        <img src="{{ asset($homeWorkprocess->bg_image) }}" alt="Shape">
    </div>
    <!-- End Shape -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Work Process</h5>
                    <h2 class="area-title">{{ $homeWorkprocess->title }}</h2>
                    <div class="devider"></div>
                    <p>{{ $homeWorkprocess->sort_desc }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="process-items">
            <div class="row">
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="top">
                            <span>01</span>
                            <i class="flaticon-select"></i>
                        </div>
                        <h5>{{ $homeWorkprocess->title_01 }}</h5>
                        <p>{!! $homeWorkprocess->sort_desc_01 !!}</p>
                    </div>
                </div>
                <!-- End Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <h5>{{ $homeWorkprocess->title_02 }}</h5>
                        <p>{!! $homeWorkprocess->sort_desc_02 !!}</p>
                        <div class="top">
                            <span>02</span>
                            <i class="flaticon-video-call"></i>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="top">
                            <span>03</span>
                            <i class="flaticon-strategy"></i>
                        </div>
                        <h5>{{ $homeWorkprocess->title_03 }}</h5>
                        <p>{!! $homeWorkprocess->sort_desc_03 !!}}</p>
                    </div>
                </div>
                <!-- End Single Item -->
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <h5>{{ $homeWorkprocess->title_04 }}</h5>
                        <p>{!! $homeWorkprocess->sort_desc_04 !!}</p>
                        <div class="top">
                            <span>04</span>
                            <i class="flaticon-solution"></i>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- ====================== End Work Process Area ====================== -->


<div class="testimonials-area carousel-shadow default-padding-top">
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-6">
                    <h5>Our Client's Review </h5>
                    <h2>
                        What client say about us?
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('front/img/teams/1.jpg') }}" alt="Thumb">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="info">
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating long. departure ourselves very extreme.
                            </p>
                            <div class="bottom">
                                <div class="provider">
                                    <h5>Spark Bones</h5>
                                    <span>Product Designer</span>
                                </div>
                                <div class="raging">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('front/img/teams/2.jpg') }}" alt="Thumb">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="info">
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating long. departure ourselves very extreme.
                            </p>
                            <div class="bottom">
                                <div class="provider">
                                    <h5>Pusal Enum</h5>
                                    <span>Marketing executive</span>
                                </div>
                                <div class="raging">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('front/img/teams/3.jpg') }}" alt="Thumb">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="info">
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating long. departure ourselves very extreme.
                            </p>
                            <div class="bottom">
                                <div class="provider">
                                    <h5>Spark Bones</h5>
                                    <span>Product Designer</span>
                                </div>
                                <div class="raging">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================== End Testimonials Area ====================== -->

<div class="contact-area bg-gray half-bg default-padding-top">
    <div class="container">
        <div class="contact-box">
            <div class="row">
                <div class="col-lg-5 left-info">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="info">
                            <h5>Office Location</h5>
                            <p>{{ $homeContacts->address }}</p>
                            <p>{{ $homeContacts->addresstwo }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info">
                            <h5>Phone</h5>
                            <p>{{ $homeContacts->phone }}</p>
                            <p>{{ $homeContacts->number }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-envelope-open"></i>
                        </div>
                        <div class="info">
                            <h5>Email</h5>
                            <p>{{ $homeContacts->email }}</p>
                            <p>{{ $homeContacts->webmail }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="content">
                        <div class="heading">
                            <h2>Need Help?</h2>
                            <p>Reach out to the world’s most reliable IT services.</p>
                        </div>
                        <form action="https://validthemes.net/site-template/solion/assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Get a free consultation
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================== End Contact Area ====================== -->
@endsection
