@extends('back.bmaster')
@section('page_title')
    <title>Article Insert :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Article Insert</h1>
@endsection
@section('back_layout')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-sm-12">
				<div class="box-content">
					<form data-toggle="validator" class="row" action="{{ Route('admin.articleEdit',$articleData->id) }}" method="POST" enctype="multipart/form-data"> @csrf
						{{-- headline --}}
						<div class="form-group col-sm-12">
							<label for="inputHeadline" class="control-label">Headline</label>
							<input type="text" name="headline" value="{{ $articleData->headline }}" class="form-control" id="inputHeadline" required>
						</div>
						{{-- article_cat --}}
						<div class="form-group col-sm-12">
							<label for="inputArticleCat" class="control-label">Article Category</label>
							<select name="article_cat" id="inputArticleCat"class="form-control">
								<option value=""> Chooce One </option>
								@foreach ($serviceData as $item)
									<option value="{{ $item->id }}" {{ $articleData->article_cat==$item->headline ? 'selected':'' }}>== {{ $item->headline }} ==</option>
								@endforeach
							</select>
							{{-- Status --}}
							<div class="col-sm-12">
								<div class="form-group">
									<h5 for="inputScreenshot">Status</h5>
									<div class="form-group">
										<input type="radio" name="status" id="Public" value="Public" {{ $articleData->status== 'Public' ? 'checked':'' }}>
										<label for="Public">Public</label>
										<input type="radio" name="status" id="private" value="Private" {{ $articleData->status== 'Private' ? 'checked':'' }}>
										<label for="private">Private</label>
									</div>
								</div>
							</div>
						</div>
						{{-- thumbnail --}}
						<div class="col-sm-10">
							<div class="form-group">
								<label for="inputThumbnail">Thumbnail</label>
								<input type="file" name="thumbnail" id="inputThumbnail" class="form-control">
							</div>
						</div>
						<div class="col-sm-2">
							<img src="{{ asset($articleData->thumbnail)}}" alt="{{ $articleData->headline }}" width="120">
						</div>
						
						{{-- article_Content --}}
						<div class="form-group col-sm-12">
							<label for="inputArticleCat" class="control-label">Article Content</label>
							<textarea class="ckeditor form-control" name="content">{!! $articleData->content !!}</textarea>
						</div>
						{{-- Meta Tags --}}
						<div class="form-group col-sm-12">
							<label for="inputHeadline" class="control-label">Meta Tags</label>
							<textarea class="form-control" name="meta_tags">{{ $articleData->meta_tags }}</textarea>
						</div>
						{{-- Meta Desc --}}
						<div class="form-group col-sm-12">
							<label for="inputHeadline" class="control-label">Meta Desc</label>
							<textarea class="form-control" name="meta_desc">{{ $articleData->meta_desc }}</textarea>
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
	</div>
</div>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script> --}}

<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
    	height: 400,
    	baseFloatZIndex: 10005,
    	removeButtons: 'PasteFromWord'
    });
</script>
@endsection