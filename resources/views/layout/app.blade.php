<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - SpaceX Template</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{asset ('assets/styles/style.min.css')}} ">
	
	<!-- Themify Icon -->
	<link rel="stylesheet" href="{{asset ('assets/fonts/themify-icons/themify-icons.css')}} ">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{asset ('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset ('assets/plugin/waves/waves.min.css')}}">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{asset ('assets/plugin/sweet-alert/sweetalert.css')}}">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{asset ('assets/plugin/percircle/css/percircle.css')}}">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{asset ('assets/plugin/chart/chartist/chartist.min.css')}}">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{asset ('assets/plugin/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset ('assets/plugin/fullcalendar/fullcalendar.print.css')}}" media='print'>

	<!-- datatable -->
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
	
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>

<body>
@include('layout.sidebar')
@include('layout.header')

<!-- /.content -->
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		@yield('content')	
		@include('layout.footer')	
	</div>
	<!-- /.main-content -->
</div>

<!--/#wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	{{-- <script src="assets/scripts/jquery.min.js"></script> --}}
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Sparkline Chart -->
	<script src="assets/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/scripts/chart.sparkline.init.min.js"></script>

	<!-- Percent Circle -->
	<script src="assets/plugin/percircle/js/percircle.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="assets/plugin/chart/chartist/chartist.min.js"></script>
	<script src="assets/scripts/jquery.chartist.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="assets/plugin/moment/moment.js"></script>
	<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/scripts/fullcalendar.init.js"></script>
<!-- datatable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


	<script src="assets/scripts/main.min.js"></script>
</body>
</html>