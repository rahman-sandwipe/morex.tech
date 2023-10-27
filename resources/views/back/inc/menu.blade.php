<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo"><i class="ico ti-rocket"></i>moreX.tech</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{ Route('admin.dashboard')}}">
						<i class="menu-icon ti-dashboard"></i><span>Dashboard</span>
					</a>
				</li>
				{{-- Article --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-bar-chart"></i>
						<span>Article</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.articleIndex') }}">Article</a></li>
						<li><a href="{{ Route ('admin.articleCreate') }}">Add New</a></li>
					</ul>
				</li>
				{{-- Portfolio --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-bar-chart"></i>
						<span>Portfolios</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.projectIndex') }}">Portfolio</a></li>
						<li><a href="{{ Route ('admin.projectCreate') }}">Add New</a></li>
					</ul>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-bar-chart"></i>
						<span>HomePage</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.homeBanners') }}">Home Banners</a></li>
						<li><a href="{{ Route ('admin.homeAbouts') }}">Home Abouts</a></li>
						<li><a href="{{ Route ('admin.Workprocess') }}">Home Work Process</a></li>
					</ul>
				</li>
				{{-- All Pages --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-bar-chart"></i>
						<span>Pages</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.homeContacts') }}">Contact Us</a></li>
						<li><a href="{{ Route ('admin.Abouts') }}">Abouts Us</a></li>
						<li><a href="{{ Route ('admin.Workprocess') }}">Home Work Process</a></li>
					</ul>
				</li>
				{{-- FAQ --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-bar-chart"></i>
						<span>FAQ</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.FAQIndex') }}">FAQ</a></li>
						<li><a href="{{ Route ('admin.FAQCreate') }}">Add New</a></li>
					</ul>
				</li>
				{{-- Portfolio --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-bar-chart"></i>
						<span>Services</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.serviceIndex') }}">Services</a></li>
						<li><a href="{{ Route ('admin.createservice') }}">Add New</a></li>
					</ul>
				</li>
				{{-- User Lists --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-layers-alt"></i>
						<span>Teams</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.ActiveTeam') }}">Active Teams</a></li>
						<li><a href="{{ Route ('admin.InactiveTeam') }}">Inactive Teams</a></li>
						<li><a href="{{ Route ('admin.register') }}">Add New</a></li>
					</ul>
				</li>
				{{-- SettingsController --}}
				<li>
					<a class="waves-effect parent-item js__control" href="#">
						<i class="menu-icon ti-layers-alt"></i>
						<span>Settings</span>
						<span class="menu-arrow fa fa-angle-down"></span>
					</a>
					<ul class="sub-menu js__content">
						<li><a href="{{ Route ('admin.SettingsView') }}">Main Settings</a></li>
					</ul>
				</li>
			</ul>
			
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
