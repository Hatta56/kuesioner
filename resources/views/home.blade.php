{{-- @extends('layouts.app') --}}

@extends('layout.app')

@section('content')
 <div class="row small-spacing">
			
			<!-- /.col-lg-3 col-xs-12 -->
			<div class="col-lg-16 col-xs-12">
				<div class="box-content">
					<h4 class="box-title"></h4>
					<div class=" text-center"><img src="{{asset('landingtemplate/HTML/images/welcm.png')}}" />
					</div>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div id="svg-animation-chartist-chart" class="chartist-chart" style="height: 100px"></div>
					<!-- /#svg-animation-chartist-chart.chartist-chart -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		<div class="row small-spacing">

			<div class="col-lg-4 col-xs-12">
				<div class="container">
					
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
        </div>
    @endsection    

