@extends('back.bmaster')
@section('page_name')
    <h1 class="page-title">Home</h1>
@endsection
@section('page_title')
<title>Dashboard :: More X - IT Solutions and Services Company</title>
@endsection
@section('back_layout')
<!-- /.fixed-navbar & -- /#message-popup -->
<div id="wrapper">
    <div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-3 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-apple text-inverse"></i>
						<h2 class="counter text-inverse">2561</h2>
						<p class="text">Product Sales</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->

				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-android text-success"></i>
						<h2 class="counter text-success">3562</h2>
						<p class="text">Visitors</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->

				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-user text-primary"></i>
						<h2 class="counter text-primary">283</h2>
						<p class="text">Members</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->
			<div class="col-lg-9 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Statistics</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div id="svg-animation-chartist-chart" class="chartist-chart" style="height: 314px"></div>
					<!-- /#svg-animation-chartist-chart.chartist-chart -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		<div class="row small-spacing">

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">Site Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
						<!-- /#traffic-sparkline-chart-1 -->
						<div class="right-content">
							<h2 class="counter text-info">278</h2>
							<!-- /.counter -->
							<p class="text text-info">Visitors Income</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Trade Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
						<!-- /#traffic-sparkline-chart-2 -->
						<div class="right-content">
							<h2 class="counter text-success">36%</h2>
							<!-- /.counter -->
							<p class="text text-success">Total Income</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Sales Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-3" class="left-content"></div>
						<!-- /#traffic-sparkline-chart-3 -->
						<div class="right-content">
							<h2 class="counter text-danger">849 <i class="fa fa-usd"></i></h2>
							<!-- /.counter -->
							<p class="text text-danger">Credit Earned</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		<div class="row small-spacing">

			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Users</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="{{ route('admin.register') }}">Register</a></li>
							<li><a href="{{ route('admin.ActiveTeam') }}">Active</a></li>
							<li><a href="{{ route('admin.InactiveTeam') }}">Inactive</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example-edit" class="display" style="width: 100%">
						<thead>
							<tr>
								<th>#SL</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Username</th>
								<th>Role</th>
								<th>Active</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Username</th>
								<th>Role</th>
								<th>Active</th>
							</tr>
						</tfoot>
						<tbody>
                            @foreach ($teamMembers as $item)   
							<tr>
                                <td># MX_{{ $item->id }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->email }}</td>
								<td>{{ $item->phone }}</td>
								<td>{{ $item->username }}</td>
								<td>{{ $item->role }}</td>
								<td>$320,800</td>
							</tr>
                            @endforeach
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
        <!-- /.row -->		
        @include('back.inc.footer')
    </div>
    <!-- /.main-content -->
</div>
@endsection