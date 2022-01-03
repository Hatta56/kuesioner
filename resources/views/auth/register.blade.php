<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="{{ route('register') }}" method="POST" class="frm-single">
		@csrf
		<div class="inside">
			<div class="title"><strong>Kuesioner </strong>Mahasiswa</div>
			<!-- /.title -->
			<div class="frm-title">Register</div>
			<!-- /.frm-title -->
			<div class="frm-input">
                <input type="email" placeholder="Email" name="email" class="frm-inp @error('email') is-invalid @enderror" required autocomplete="email" autofocus><i class="fa fa-envelope frm-ico"></i>
            </div>
			<!-- /.frm-input -->
            <div class="frm-input"><input type="text" name="name" placeholder="Username" class="frm-inp @error('name') is-invalid @enderror" required autocomplete="name" autofocus><i class="fa fa-user frm-ico" ></i>
                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
			<!-- /.frm-input -->
            <div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp @error('password') is-invalid @enderror" required autocomplete="password"><i class="fa fa-lock frm-ico"></i>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="frm-input"><input type="password" name="password_confirmation" placeholder="Confirm Password" class="frm-inp @error('password') is-invalid @enderror" required autocomplete="new-password"><i class="fa fa-lock frm-ico"></i>
            </div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="checkbox primary" required autocomplete="accept"><input type="checkbox" id="accept"><label for="accept" >I accept Terms and Conditions</label></div>
				<!-- /.checkbox -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>
		
			<!-- /.row -->
			<a href="/login" class="a-link"><i class="fa fa-sign-in"></i>Sudah Punya Akun? Login.</a>
			<div class="frm-footer">Kuesioner UNBAJA © 2020.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>