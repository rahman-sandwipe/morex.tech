@extends('back.bmaster')
@section('page_title')
<title>Active Team Members :: More X - IT Solutions and Services Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Active Members</h1>
@endsection
@section('back_layout')
<!-- /.fixed-navbar & -- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Active Users</h4>
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
							@foreach ($activemembers as $item)   
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
		</div>
		<!-- /.row small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div>
@endsection