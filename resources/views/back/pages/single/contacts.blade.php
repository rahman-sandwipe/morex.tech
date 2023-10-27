@extends('back.bmaster')
@section('page_title')
    <title>Contacts :: MoreX - IT Support & Service Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Contacts</h1>
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
					<form data-toggle="validator" class="row" action="{{ Route('admin.homeContacts') }}" method="POST" enctype="multipart/form-data"> @csrf
						<div class="form-group col-sm-6">
							<label for="addressInput" class="control-label">Address</label>
							<input type="text" name="address" class="form-control" id="addressInput" value="{{ $dataContacts->address }}" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="addresstwoInput" class="control-label">Address (Optional)</label>
							<input type="text" name="addresstwo" class="form-control" id="addresstwoInput" value="{{ $dataContacts->addresstwo }}" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="phoneInput" class="control-label">Phone</label>
							<input type="text" name="phone" class="form-control" id="phoneInput" value="{{ $dataContacts->phone }}" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="numberInput" class="control-label">Number</label>
							<input type="text" name="number" class="form-control" id="numberInput" value="{{ $dataContacts->number }}" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="emailInput" class="control-label">Email</label>
							<input type="text" name="email" class="form-control" id="emailInput" value="{{ $dataContacts->email }}" required>
						</div>
						<div class="form-group col-sm-6">
							<label for="webmailInput" class="control-label">Webmail</label>
							<input type="text" name="webmail" class="form-control" id="webmailInput" value="{{ $dataContacts->webmail }}" required>
						</div>
						<div class="form-group col-sm-12">
							<label for="locationInput" class="control-label">Map Location</label>
							<input type="text" name="location" class="form-control" id="locationInput" value="{{ $dataContacts->location }}" required>
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