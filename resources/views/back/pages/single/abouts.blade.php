@extends('back.bmaster')
@section('page_title')
    <title>Abouts :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Abouts</h1>
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
					<form data-toggle="validator" class="row" action="{{ Route('admin.Abouts') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h4 class="text-center">Abouts</h4>
                        <div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title" class="form-control" id="inputTitle" value="{{ $aboutsData->title }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label for="inputContent" class="control-label">Description</label>
							<textarea name="sort_desc" id="summernote" rows="2" class="form-control">{!! $aboutsData->sort_desc !!}</textarea>
						</div>
						<div class="form-group col-sm-12">
                            <label for="inputGP" class="control-label">Global Presence</label>
                            <input type="text" name="global_presence" class="form-control" id="inputGP" value="{{ $aboutsData->global_presence }}" required>
						</div>
						<div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPhoto">Image</label>
								<input type="file" name="image" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPhoto">Image</label>
								<img src="{{ asset($aboutsData->image) }}" alt="" width="100">
							</div>
						</div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPhoto">Background Image</label>
								<input type="file" name="bg_image" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPhoto">Background Image</label>
								<img src="{{ asset($aboutsData->bg_image) }}" alt="" width="100">
							</div>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">UPDATE</button>
                        </div>
					</form>

                    {{-- WHY CHOOSE US --}}
					<form data-toggle="validator" class="row" action="{{ Route('admin.chooseus') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h4 class="text-center">WHY CHOOSE US</h4>
                        <div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Title</label>
							<input type="text" name="title_02" class="form-control" id="inputTitle" value="{{ $aboutsData->title_02 }}" required>
						</div>
						<div class="form-group col-sm-12">
                            <label for="inputContent" class="control-label">Description</label>
							<textarea name="sort_desc_02" class="form-control">{!! $aboutsData->sort_desc_02 !!}</textarea>
						</div>
						<div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPhoto">Image</label>
								<input type="file" name="image_02" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPhoto">Image [Why Chooce us]</label>
								<img src="{{ asset($aboutsData->image_02) }}" alt="" width="100">
							</div>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">UPDATE</button>
                        </div>
					</form>
                    {{-- FAQ --}}
					<form data-toggle="validator" class="row" action="{{ Route('admin.faqAbouts') }}" method="POST" enctype="multipart/form-data"> @csrf
						<h4 class="text-center">FAQ</h4>
                        <div class="form-group col-sm-12">
							<label for="inputfaq_title" class="control-label">FAQ Title</label>
							<input type="text" name="faq_title" class="form-control" id="inputfaq_title" value="{{ $aboutsData->faq_title }}" required>
						</div>
						<div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPhoto">Image [FAQ]</label>
								<input type="file" name="faq_bg_image" id="inputPhoto" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPhoto">Image</label>
								<img src="{{ asset($aboutsData->faq_bg_image) }}" alt="" width="100">
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