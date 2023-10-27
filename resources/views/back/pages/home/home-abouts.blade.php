@extends('back.bmaster')
@section('page_title')
    <title>Home Abouts :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Home Abouts</h1>
@endsection
@section('back_layout')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-sm-12">
				<div class="box-content">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
    
					<form data-toggle="validator" class="row" action="{{ Route('admin.homeAbouts') }}" method="POST" enctype="multipart/form-data"> @csrf
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title" class="form-control" id="inputTitle" value="{{ $homeAbouts->title }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label for="inputContent" class="control-label">Description</label>
							<textarea name="sort_desc" id="summernote" rows="2" class="form-control">{!! $homeAbouts->sort_desc !!}</textarea>
						</div>
						<div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPhoto">Photo</label>
								<input type="file" name="image" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPhoto">Photo</label>
								<img src="{{ asset($homeAbouts->image) }}" alt="" width="100">
							</div>
						</div>
						
                        <div class="form-group col-sm-12">
                            <label for="button" class="control-label">Button 1</label>
                            <input type="text" name="button" class="form-control" id="button" value="{{ $homeAbouts->button }}">
                        </div>
                        
                        <div class="form-group col-sm-12">
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
	  height: 100
	});
  </script>
@endsection
@section('page_style')
<link rel="stylesheet" href="{{ asset('back/plugin/summernote/summernote-lite.css') }}">
@endsection