@extends('back.bmaster')
@section('page_title')
<title>Services :: More X - IT Solutions and Services Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Services</h1>
@endsection
@section('back_layout')
<!-- /.fixed-navbar & -- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Services</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="{{ route('admin.createservice') }}" class="btn btn-success mb-5">INSERT</a></li>
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example-edit" class="display" style="width: 100%">
						<thead>
							<tr>
								<th>#ID</th>
								<th>Font Icon</th>
								<th>Course Title</th>
								<th>Status</th>
								<th>Active</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#ID</th>
								<th>Font Icon</th>
								<th>Course Title</th>
								<th>Status</th>
								<th>Active</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ($serviceData as $item)   
							<tr>
								<td># MX_{{ $item->id }}</td>
								<td><i class="{{ $item->icon }}"></i></td>
								<td><img src="{{ asset($item->thumbnail) }}" alt="" width="100"> {{ $item->headline }}</td>
								<td><button class="btn btn-success">{{ $item->status }}</button></td>
								<td>
                                    <ul class="list-inline">
                                        <li><a href="{{ Route('admin.statusService',$item->id) }}" class="btn btn-social waves-effect waves-light btn-success"><i class="ico fa fa-eye"></i></a></li>    
                                        <li><a href="{{ Route('admin.editService',$item->id) }}" class="btn btn-social waves-effect waves-light btn-primary"><i class="ico fa fa-edit"></i></a></li>
                                        <li><a href="{{ Route('admin.deleteService',$item->id) }}" class="btn btn-social waves-effect waves-light btn-danger"><i class="ico fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
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