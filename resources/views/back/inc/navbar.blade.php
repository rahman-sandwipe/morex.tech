{{-- @php
    $profile=App\Models\Profile::where('id','id')->first();
@endphp --}}
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		@yield('page_name')
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item ti-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle">
				<input type="search" placeholder="Search..." class="input-search">
				<button class="ti-search button-search" type="submit"></button>
			</form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item ti-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item ti-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
		<div class="ico-item">
			<i class="ti-user"></i>
            <span class="name">{{ Auth::user()->name }}</span>
			<ul class="sub-ico-item">
                <li><a href="{{ Route('admin.profile',auth::user()->username)}}">Profile</a></li>
                <li><a href="{{ Route('admin.editProfile',auth::user()->username)}}">Profile Settings</a></li>
                <li>
                    <a class="js__logout" href="{{route('admin.logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        Logout
                    </a>    
                    <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>


{{-- <div class="fixed-navbar">
    <div class="float-left">
        <button type="button" class="menu-mobile-button fas fa-bars js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.float-left -->
    <div class="float-right">
        <div class="ico-item">
            <a href="#" class="ico-item ti-search js__toggle_open" data-target="#searchform-header"></a>
            <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="ti-search button-search" type="submit"></button></form>
            <!-- /.searchform -->
        </div>
        <a href="{{ Route('home') }}" class="ico-item" target="blank">Web Home</a>
        <!-- /.ico-item -->
        <a href="#" class="ico-item ti-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
        <a href="#" class="ico-item ti-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
        <div class="ico-item">
            <i class="ti-user"></i>
            <span class="name">{{ Auth::user()->name }}</span>
            <ul class="sub-ico-item">
                <li><a href="{{ Route('admin.profile',auth::user()->username)}}">Profile</a></li>
                <li><a href="{{ Route('admin.editProfile',auth::user()->username)}}">Profile Settings</a></li>
                <li>
                    <a class="js__logout" href="{{route('admin.logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        Logout
                    </a>    
                    <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.sub-ico-item -->
        </div>
    </div>
    <!-- /.float-right -->
</div> --}}