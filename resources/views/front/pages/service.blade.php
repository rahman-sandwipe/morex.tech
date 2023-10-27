@extends('front.fmaster')
@section('page_title')
    <title>Services :: More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="services-area default-padding">
    <div class="container">
        <div class="services-content text-center">
            <div class="row">
                <!-- Single Item -->
                @foreach ($serviceData as $item)    
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <img src="{{ asset($item->thumbnail) }}" alt="Thumb">
                        <h5><a href="#">{{ $item->headline }}</a></h5>
                        <p>{!! $item->sort_desc !!}</p>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->
            </div>
            <div class="bottom-content text-center">
                <div class="d-felx justify-content-center">
                    {{ $serviceData->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============== End Services Area =============== -->

<div id="pricing" class="pricing-area half-bg default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-light light text-center">
                    <h2 class="area-title">Our Packages</h2>
                    <div class="devider"></div>
                    <p>
                        Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="pricing text-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h5>Trial Version</h5>
                                <h2><sup>$</sup>0 <sub>/ Monthly</sub></h2>
                            </li>
                            <li><i class="fas fa-check-circle"></i> Demo file</li>
                            <li><i class="fas fa-minus-circle"></i> Update</li>
                            <li><i class="fas fa-check-circle"></i> File compressed</li>
                            <li><i class="fas fa-check-circle"></i> Commercial use</li>
                            <li class="footer">
                                <a class="btn circle btn-theme border btn-sm" href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h5>Regular</h5>
                                <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                            </li>
                            <li><i class="fas fa-check-circle"></i> Demo file</li>
                            <li><i class="fas fa-check-circle"></i> Update</li>
                            <li><i class="fas fa-check-circle"></i> File compressed</li>
                            <li><i class="fas fa-minus-circle"></i> Commercial use</li>
                            <li class="footer">
                                <a class="btn circle btn-theme effect btn-sm" href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h5>Extended</h5>
                                <h2><sup>$</sup>59 <sub>/ Monthly</sub></h2>
                            </li>
                            <li><i class="fas fa-check-circle"></i> Demo file</li>
                            <li><i class="fas fa-check-circle"></i> Update</li>
                            <li><i class="fas fa-minus-circle"></i> File compressed</li>
                            <li><i class="fas fa-check-circle"></i> Commercial use</li>
                            <li class="footer">
                                <a class="btn circle btn-theme border btn-sm" href="#">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============== End Pricing Area =============== -->

<div class="clients-area default-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    @foreach ($projectData as $item)
                    <a href="#"><img src="{{ asset($item->brand_logo) }}" alt="Client"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============== End Clients Area =============== -->
@endsection