@extends('back.bmaster')
@section('page_title')
    <title>Project Insert :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Project Insert</h1>
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
    
					<form data-toggle="validator" class="row" action="{{ Route('admin.projectCreate') }}" method="POST" enctype="multipart/form-data"> @csrf
						{{-- project_name --}}
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Project Name</label>
							<input type="text" name="project_name" class="form-control" id="inputTitle" required>
						</div>
						{{-- domain_link --}}
						<div class="form-group col-sm-12">
							<label for="inputDomain" class="control-label">Domain Name</label>
							<input type="text" name="domain_link" class="form-control" id="inputDomain" required>
						</div>
						{{-- domain_link --}}
						<div class="form-group col-sm-12">
							<label for="inputDomain" class="control-label">Project iframe</label>
							<input type="text" name="project_screenshot" class="form-control" id="inputDomain" required>
						</div>
						{{-- brand_logo --}}
						<div class="col-sm-12">
                            <div class="form-group">
                                <label for="inputbrand_logo">Brand Logo</label>
								<input type="file" name="brand_logo" id="inputbrand_logo" class="form-control">
							</div>
						</div>
						{{-- project_src --}}
						<div class="col-sm-12">
                            <div class="form-group">
                                <label for="inputproject_src">Project SRC</label>
								<input type="file" name="project_src" id="inputproject_src" class="form-control">
							</div>
						</div>
						{{-- project_display --}}
						<div class="col-sm-12">
                            <div class="form-group">
								<h5 for="inputScreenshot">Project Display</h5>
								<div class="form-group">
									<input type="radio" name="project_display" id="Public" value="public">
									<label for="Public">Public</label>
									<input type="radio" name="project_display" id="private" value="private">
									<label for="private">Private</label>
								</div>
							</div>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">SAVE CHANGES</button>
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