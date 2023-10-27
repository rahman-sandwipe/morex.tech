@php
$settings=App\Models\Settings::latest()->first();
$homeContacts=App\Models\Contact::latest()->first();
@endphp
<div class="top-bar-area inc-pad bg-gradient text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6 info">
                <ul>
                    <li><i class="fas fa-copyright"></i>{{ $homeContacts->phone }}</li>
                    <li><i class="fas fa-envelope-open"></i>{{ $homeContacts->email }}</li>
                </ul>
            </div>
            <div class="col-lg-6 text-right item-flex">
                <div class="info">
                    <ul>
                        <li><i class="fas fa-clock"></i> Office Hours: 10:00 AM – 08:00 PM</li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====================== End Header Top ====================== -->
<header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="ti-search"></i>
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav inc-border">
                <ul>
                    <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>        
            <!-- End Atribute Navigation -->
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ URL('/') }}">
                    <img src="{{ asset($settings->logo) }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->
            
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ Route('abouts')}}" class="{{ Request::routeIs('abouts') ? 'active' : '' }}">Abouts</a>
                    </li>
                    <li>
                        <a href="{{ Route('service')}}" class="{{ Request::routeIs('service') ? 'active' : '' }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ Route('projects')}}" class="{{ Request::routeIs('projects') ? 'active' : '' }}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ Route('blogs')}}" class="{{ Request::routeIs('blogs') ? 'active' : '' }}">Article</a>
                    </li>
                    <li>
                        <a href="{{ Route('teams')}}" class="{{ Request::routeIs('teams') ? 'active' : '' }}">Teams</a>
                    </li>
                    <li>
                        <a href="{{ Route('contacts')}}" class="{{ Request::routeIs('contacts') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>