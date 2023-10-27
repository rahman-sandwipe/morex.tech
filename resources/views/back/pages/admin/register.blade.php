@extends('back.bmaster')
@section('page_title')
    <title>Add New Members :: More X - IT Solutions and Services Company</title>
@endsection
@section('page_name')
    <h1 class="page-title">Insert Members</h1>
@endsection
@section('back_layout')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-12">
				<div class="box-content">
					<form data-toggle="validator" class="row" action="{{ Route('admin.register') }}" method="POST" enctype="multipart/form-data"> @csrf
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName" class="control-label">Name</label>
								<input type="text" name="name" class="form-control" id="inputName" placeholder="eg. Name" required>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label">Email</label>
								<input type="email" name="email" class="form-control" id="inputEmail" placeholder="eg. Email" data-error="Bruh, that email address is invalid" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<label for="inputRole">Role</label>
								<select class="form-control"  name="role" id="inputRole">
									<option value="user">Student</option>
                                    <option value="admin">Admin</option>
									<option value="teacher">Instroctor</option>
									<option value="creator">Blogger</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputUsername" class="control-label">User Name</label>
								<input type="text" name="username" class="form-control" id="inputUsername" placeholder="eg. Username" required>
							</div>
							<div class="form-group">
								<label for="inputPhpne">Phone Number</label>
								<input type="text" name="phone" id="inputPhpne" class="form-control" placeholder="eg. Phone Number">
							</div>
							<div class="form-group">
								<label for="inputStatus">Status</label>
								<select class="form-control"  name="status" id="inputStatus">
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
								</select>
							</div>
						</div>
						
                        <div class="form-group col-sm-12">
                            <label for="inputPhoto">Photo</label>
                            <input type="file" name="photo" id="inputPhoto" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputPassword" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="eg. Password..." required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputConfirmation" class="control-label">Conrifm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputConfirmation" placeholder="eg. Confirmation password..." required>
                        </div>
						<div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Register</button>
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