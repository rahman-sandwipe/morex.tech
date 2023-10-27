@extends('back.bmaster')
@section('page_title')
    <title>FAQ :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">FAQ</h1>
@endsection
@section('back_layout')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<table id="example-edit" class="display" style="width: 100%">
						<thead>
							<tr>
								<th>#ID</th>
								<th>Answer</th>
								<th>Question</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#ID</th>
								<th>Answer</th>
								<th>Question</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ($faqData as $item)	
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->question }}</td>
								<td>{{ $item->answer }}</td>
								<td>
									@if ($item->status=='public')
									<a href="{{ Route('admin.FAQstatus',$item->id) }}" class="btn btn-success">Public</a>
									@else	
									<a href="{{ Route('admin.FAQstatus',$item->id) }}" class="btn btn-warning">Private</a>
									@endif
								</td>
								<td>
									<a href="{{ Route('admin.FAQEdit',$item->id) }}" class="btn btn-primary">
										<i class="fa fa-edit"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="boostrapModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel-1">Project Overview</h4>
			</div>
			<div class="modal-body">
				<iframe src="https://www.statetribune.net/" style="border:2px #000 dashed;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="2px" marginwidth="2px" height="400px" width="840px" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
@endsection