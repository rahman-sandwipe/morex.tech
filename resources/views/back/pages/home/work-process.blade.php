@extends('back.bmaster')
@section('page_title')
    <title>Work Process :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Work Process</h1>
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
					<form data-toggle="validator" class="row" action="{{ Route('admin.Workprocess') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h3 class="text-center"><strong>Page Content</strong></h3>
                        <div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title" class="form-control" id="inputTitle" value="{{ $Workprocess->title }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label for="inputContent" class="control-label">Description</label>
							<textarea name="sort_desc" class="form-control">{!! $Workprocess->sort_desc !!}</textarea>
						</div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPhoto">Background Image</label>
								<input type="file" name="bg_image" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPhoto">Image</label>
								<img src="{{ asset($Workprocess->bg_image) }}" alt="bg_image" width="100">
							</div>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">Update</button>
                        </div>
					</form>
				</div>
			</div>
            {{-- Choose a Service --}}
			<div class="col-sm-6">
				<div class="box-content">
                    <form data-toggle="validator" class="row" action="{{ Route('admin.WorkprocessOne') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h3 class="text-center"><strong>Choose a Service</strong></h3>
                        <div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title_01" class="form-control" id="inputTitle" value="{{ $Workprocess->title_01 }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label class="control-label">Description</label>
							<textarea name="sort_desc_01" class="form-control">{!! $Workprocess->sort_desc_01 !!}</textarea>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">UPDATE</button>
                        </div>
					</form>
				</div>
			</div>
            {{-- Request a Meeting --}}
			<div class="col-sm-6">
				<div class="box-content">
					<form data-toggle="validator" class="row" action="{{ Route('admin.WorkprocessTwo') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h3 class="text-center"><strong>Request a Meeting</strong></h3>
                        <div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title_02" class="form-control" id="inputTitle" value="{{ $Workprocess->title_02 }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label class="control-label">Description</label>
							<textarea name="sort_desc_02" class="form-control">{!! $Workprocess->sort_desc_02 !!}</textarea>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">Update</button>
                        </div>
					</form>
				</div>
			</div>
            {{-- Receive Custom Plan --}}
			<div class="col-sm-6">
				<div class="box-content">
					<form data-toggle="validator" class="row" action="{{ Route('admin.WorkprocessThree') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h3 class="text-center"><strong>Receive Custom Plan</strong></h3>
                        <div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title_03" class="form-control" id="inputTitle" value="{{ $Workprocess->title_03 }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label class="control-label">Description</label>
							<textarea name="sort_desc_03" class="form-control">{!! $Workprocess->sort_desc_03 !!}</textarea>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">Update</button>
                        </div>
					</form>
				</div>
			</div>
			{{-- Let’s Make it Happen --}}
            <div class="col-sm-6">
				<div class="box-content">
                    <h3 class="text-center"><strong>Let’s Make it Happen</strong></h3>
					<form data-toggle="validator" class="row" action="{{ Route('admin.WorkprocessFour') }}" method="POST" enctype="multipart/form-data"> @csrf
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title_04" class="form-control" id="inputTitle" value="{{ $Workprocess->title_04 }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label class="control-label">Description</label>
							<textarea name="sort_desc_04" class="form-control">{!! $Workprocess->sort_desc_04 !!}</textarea>
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