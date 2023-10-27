<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin Login</title>
        <link rel="stylesheet" href="{{ asset('back/styles/style.min.css') }}">
		<link rel="stylesheet" href="{{ asset('back/styles/custom.css') }}">
		<!-- Waves Effect -->
		<script src="{{ asset('back/plugin/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<link rel="stylesheet" href="{{ asset('back/plugin/bootstrap/js/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('back/plugin/waves/waves.min.css') }}">
	</head>

<body>

<div id="single-wrapper">
	<form action="{{ route('admin.login') }}" class="frm-single" method="post">@csrf
		<div class="inside">
			<div class="title">MORE<strong>X</strong> TECH</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input">
                <input type="text" name="email" placeholder="Username" class="frm-inp"><i class="fa fa-user frm-ico"></i>
            </div>
			<!-- /.frm-input -->
			<div class="frm-input">
                <input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
            </div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="float-left">
					<div class="checkbox primary">
                        <input type="checkbox" name="remember" id="rememberme"><label for="rememberme">Remember me</label>
                    </div>
					<!-- /.checkbox -->
				</div>
				{{-- <!-- /.float-left -->
				<div class="float-right">
                    <a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a>
                </div>
				<!-- /.float-right --> --}}
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<!-- /.row -->
			<div class="frm-footer">© 2023. All Rights Reserved</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div>
    <!--/#single-wrapper -->
	<script src="{{ asset('back/scripts/jquery.min.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
	<script src="{{ asset('back/scripts/modernizr.min.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
	<script src="{{ asset('back/plugin/bootstrap/js/bootstrap.min.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
	<script src="{{ asset('back/plugin/nprogress/nprogress.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
	<script src="{{ asset('back/plugin/waves/waves.min.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
	<script src="{{ asset('back/scripts/main.min.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
    <script src="{{ asset('back/scripts/mycommon.js') }}" type="c0492218347986f53e9532ce-text/javascript"></script>
    {{-- <script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c0492218347986f53e9532ce-|49" defer></script> --}}
</body>
</html>