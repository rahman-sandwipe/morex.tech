@extends('back.bmaster')
@section('page_title')
    <title>Project Modify :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Project Modify</h1>
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
    
					<form data-toggle="validator" class="row" action="{{ Route('admin.projectEdit',$projectData->id) }}" method="POST" enctype="multipart/form-data"> @csrf
						{{-- project_name --}}
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Project Name</label>
							<input type="text" name="project_name" class="form-control" value="{{ $projectData->project_name }}" id="inputTitle" required>
						</div>
						{{-- domain_link --}}
						<div class="form-group col-sm-12">
							<label for="inputDomain" class="control-label">Domain Name</label>
							<input type="text" name="domain_link" class="form-control" value="{{ $projectData->domain_link }}" id="inputDomain" required>
						</div>
						{{-- domain_link --}}
						<div class="form-group col-sm-12">
							<label for="inputDomain" class="control-label">Project iframe</label>
							<input type="text" name="project_screenshot" value="{{ $projectData->project_screenshot }}" class="form-control" id="inputDomain" required>
						</div>
						{{-- brand_logo --}}
						<div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputbrand_logo">Brand Logo</label>
								<input type="file" name="brand_logo" id="inputbrand_logo" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
							<img src="{{ asset($projectData->brand_logo) }}" alt="{{ $projectData->project_name }}">
						</div>
						{{-- project_src --}}
						<div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputproject_src">Project SRC</label>
								<input type="file" name="project_src" id="inputproject_src" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
							<img src="{{ asset($projectData->project_src) }}" alt="{{ $projectData->project_name }}" style="width: 100; height: 120px">
						</div>
						{{-- project_display --}}
						<div class="col-sm-12">
                            <div class="form-group">
								<h5 for="inputScreenshot">Project Display</h5>
								<div class="form-group">
									<input type="radio" name="project_display" id="Public" value="public" {{ $projectData->project_display == 'public' ? 'checked':'' }}>
									<label for="Public">Public</label>
									<input type="radio" name="project_display" id="private" value="private" {{ $projectData->project_display == 'private'? 'checked':' '}}>
									<label for="private">Private</label>
								</div>
							</div>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">UPDATE</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection