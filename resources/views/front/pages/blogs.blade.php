@extends('front.fmaster')
@section('page_title')
    <title>Article :: More X - IT Solutions and Services Company</title>
@endsection
@section('front_layout')
<div class="blog-area grid-colum default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        @foreach ($articleData as $item)
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item wow fadeInUp" data-wow-delay="500ms">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="{{ asset($item->thumbnail) }}" alt="Thumb">
                                    </a>
                                    <div class="date">{{ $item->created_at->format('d')}}<span>{{ $item->created_at->format('M/Y')}}</span></div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-user"></i>{{ $item->user->name }}</a></li>
                                            <li><a href="#"><i class="fas fa-comments"></i>{{ $item->service->headline }}</a></li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="">{{ $item->headline }}</a>
                                    </h4>
                                    <a class="btn-more" href="">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        @endforeach
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    {!! $articleData->links() !!}    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection