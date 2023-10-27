@extends('front.fmaster')
@section('page_title')
    <title>Project :: More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="case-studies-area overflow-hidden grid-items default-padding">
    <div class="container">
        <div class="case-items-area">
            <div class="masonary">
                <div id="portfolio-grid" class="case-items colums-4">
                    <!-- Single Item -->
                    @foreach ($projectData as $item)
                    <div class="pf-item">
                        <div class="item border">
                            <div class="thumb">
                                <img src="{{ asset($item->project_src) }}" alt="{{ $item->project_name }}">
                                <a href="{{ $item->domain_link }}" class="item popup-gallery">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="info">
                                <p class="text-light"></p>
                                {{-- <div class="tags">
                                    <a href="#">Networking</a> / 
                                    <a href="#">Technology</a>
                                </div> --}}
                                <h4><a href="{{ $item->domain_link }}">{{ $item->project_name }}</a></h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
                <div class="d-felx justify-content-center">
                    {{ $projectData->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Case Studies Area -->
@endsection