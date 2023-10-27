@extends('back.bmaster')
@section('page_title')
    <title>Add New Service :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Add New Service</h1>
@endsection
@section('back_layout')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-sm-12">
				<div class="box-content">
					<form action="{{ Route('admin.createservice') }}" method="POST" data-toggle="validator" class="row" enctype="multipart/form-data">
						@csrf
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="headline" class="form-control" id="inputTitle" placeholder="eg. Title" required>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputIcon" class="control-label">Font Icon</label>
							<input type="text" name="icon" class="form-control" id="inputIcon" placeholder="eg. Font Icon...">
						</div>
						<div class="form-group col-sm-12">
							<label for="inputSummary" class="control-label">Sort Description</label>
							<textarea name="sort_desc" id="inputSummary" rows="3" class="form-control"></textarea>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputContent" class="control-label">Details</label>
							<textarea name="content" id="summernote" rows="3" class="form-control"></textarea>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<label for="inputPhoto">Photo</label>
								<input type="file" name="thumbnail" id="inputPhoto" class="form-control" placeholder="eg. Photo" required>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="inputStatus">Status</label>
								<select class="form-control"  name="status" id="inputStatus">
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
								</select>
							</div>
						</div>
						
						<div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Insert</button>
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