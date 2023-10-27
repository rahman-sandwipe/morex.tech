@php
    $settings=App\Models\Settings::latest()->first();    
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{!! $settings->meta_desc !!}">

    <!-- ========== Page Title ========== -->
    @yield('page_title')

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset($settings->fevicon) }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    @include('front.inc.styles')
    <!-- ========== End Stylesheet ========== -->
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header ================= -->
    @include('front.inc.header')
    <!-- End Header -->

    @yield('front_layout')

    <!-- footer area start -->
    @include('front.inc.footer')
    <!-- footer area end -->

    <!-- all plugins here -->
    <!-- jQuery Frameworks ====== -->
    @include('front.inc.scripts')
    </body>
</html>