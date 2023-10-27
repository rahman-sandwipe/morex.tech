@extends('back.bmaster')
@section('page_title')
    <title>Project Info Setting :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Project Info Setting</h1>
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
    
					<form data-toggle="validator" class="row" action="{{ Route('admin.SettingsView') }}" method="POST" enctype="multipart/form-data"> @csrf
						<div class="form-group col-sm-12">
							<label for="inputProject_name" class="control-label">Project Name</label>
							<input type="text" name="project_name" class="form-control" id="inputProject_name" value="{{ $Settings->project_name }}" required>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputProjectTagline" class="control-label">Project Tagline</label>
							<input type="text" name="project_tagline" class="form-control" id="inputProjectTagline" value="{{ $Settings->project_tagline }}" required>
						</div>

                        <div class="form-group">
                            <div class="col-sm-9">
                                <label for="inputFevicon">Fevicon</label>
                                <input type="file" name="fevicon" id="inputFevicon" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="inputFevicon">Fevicon</label>
                                <img src="{{ asset($Settings->fevicon) }}" alt="{{ $Settings->project_name }}" width="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <label for="inputLogo">Logo</label>
                                <input type="file" name="logo" id="inputLogo" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="inputLogo">Logo</label>
                                <img src="{{ asset($Settings->logo) }}" id="inputLogo" alt="{{ $Settings->project_name }}" width="100">
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputAuthor_name" class="control-label">Author Name</label>
                            <input type="text" name="author_name" class="form-control" id="inputAuthor_name" value="{{ $Settings->author_name }}" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="inputAuthor_email" class="control-label">Author Email</label>
                            <input type="text" name="author_email" class="form-control" id="inputAuthor_email" value="{{ $Settings->author_email }}" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="inputAuthor_phone" class="control-label">Author Phone</label>
                            <input type="text" name="author_phone" class="form-control" id="inputAuthor_phone" value="{{ $Settings->author_phone }}" required>
                        </div>

						<div class="form-group col-sm-12">
                            <label for="inputMeta_tags" class="control-label">Meta Tags</label>
							<textarea name="meta_tags" id="inputMeta_tags" rows="2" class="form-control">{!! $Settings->meta_tags !!}</textarea>
						</div>
						<div class="form-group col-sm-12">
                            <label for="inputMeta_Desc" class="control-label">Meta Desc</label>
							<textarea name="meta_desc" id="inputMeta_Desc" rows="1" class="form-control">{!! $Settings->meta_desc !!}</textarea>
						</div>

                        <div class="form-group col-sm-12">
							<label for="inputCopyrightIntro" class="control-label">Copyright Intro</label>
							<input type="text" name="copyright_text" class="form-control" id="inputCopyrightIntro" value="{{ $Settings->copyright_text }}" required>
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