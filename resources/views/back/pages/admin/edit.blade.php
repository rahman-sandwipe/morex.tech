@extends('back.bmaster')
@section('page_title')
    <title>Modeify Service :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Modeify Service</h1>
@endsection
@section('back_layout')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-sm-12">
				<div class="box-content">
					<form data-toggle="validator" class="row" action="{{ Route('admin.editService',$service->id) }}" method="POST" enctype="multipart/form-data"> @csrf
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="headline" class="form-control" id="inputTitle" value="{{ $service->headline }}" required>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputSummary" class="control-label">Sort Description</label>
							<textarea name="sort_desc" id="inputSummary" rows="3" class="form-control">{!! $service->sort_desc !!}</textarea>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputContent" class="control-label">Description</label>
							<textarea name="content" id="summernote" rows="3" class="form-control">{!! $service->content !!}</textarea>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<label for="inputPhoto">Photo</label>
								<input type="file" name="thumbnail" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="inputStatus">Status</label>
								<select class="form-control"  name="status" id="inputStatus">
									<option value="active" {{ $service->status=='active' ? 'selected':''}}>Active</option>
									<option value="inactive" {{ $service->status=='inactive' ? 'selected':''}}>Inactive</option>
								</select>
							</div>
						</div>
						
						<div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">Update</button>
						</div>
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-12 -->
		</div>
		<!-- /.row small-spacing -->		
		@include('back.inc.footer')
	</div>
	<!-- /.main-content -->
</div>
@endsection
@section('page_script')
<!-- include libraries(jQuery, bootstrap) -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('back/plugin/summernote/summernote-lite.js') }}"></script>
<script>
	$('#summernote').summernote({
	  placeholder: 'This filed is details',
	  tabsize: 2,
	  height: 100,
	  toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']]
        ]
	});
  </script>
@endsection
@section('page_style')
<link rel="stylesheet" href="{{ asset('back/plugin/summernote/summernote-lite.css') }}">
@endsection