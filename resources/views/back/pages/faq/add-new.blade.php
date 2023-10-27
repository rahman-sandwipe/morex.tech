@extends('back.bmaster')
@section('page_title')
    <title>FAQ Insert :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">FAQ Insert</h1>
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
    
					<form data-toggle="validator" class="row" action="{{ Route('admin.FAQCreate') }}" method="POST" enctype="multipart/form-data"> @csrf
						{{-- question --}}
						<div class="form-group col-sm-12">
							<label for="inputTitle" class="control-label">Question</label>
							<input type="text" name="question" class="form-control" id="inputTitle" required>
						</div>
						{{-- answer --}}
						<div class="form-group col-sm-12">
							<label for="inputAnswer" class="control-label">Answer</label>
							<textarea name="answer" id="inputAnswer" rows="2" class="form-control"></textarea>
						</div>
						{{-- Status --}}
						<div class="col-sm-12">
                            <div class="form-group">
								<h5 for="inputScreenshot">Status</h5>
								<div class="form-group">
									<input type="radio" name="status" id="Public" value="public" checked>
									<label for="Public">Public</label>
									<input type="radio" name="status" id="private" value="private">
									<label for="private">Private</label>
								</div>
							</div>
						</div>
                        
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-primary waves-light btn-block">INSERT</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection