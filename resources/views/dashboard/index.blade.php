@extends('layouts.master')
@section('title', 'Echarts')

@section('css')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/echart.css') }}">
@endsection

@section('breadcrumb-title')
<h3>Echarts</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active"></li>
@endsection

@section('content')
<div class="col-xxl-8 col-lg-12 box-col-12">
		<div class="card">
		  <div class="card-header card-no-border"> 
			<h5>Overall</h5>
		  </div>
		  <div class="card-body pt-0">
			<div class="row m-0 overall-card">
			  <div class="col-xl-18 col-md-12 col-sm-7 p-0">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
				<div class="chart-right">
				  <div class="row">
					<div class="col-xl-18">
					  <div class="card-body p-0">
						<ul class="balance-data"> 
						  <li><span class="circle bg-warning"> </span><span class="f-light ms-1">UnRecover</span></li>
						  <li><span class="circle bg-primary"> </span><span class="f-light ms-1">Recovered</span></li>
						</ul>
						<div class="current-sale-container">
						  <div id="chart-currently"></div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-xxl-8 col-lg-12 box-col-12">
			<div class="card">
				<div class="card-header">
					<h5>Charts</h5>
				</div>
				<div class="card-body">
					<div class="apache-container" id="echart-pierich"></div>
				</div>
			</div>
		</div>

@endsection

<script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>

@section('script')
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
<script src="{{asset('assets/js/chart/echart/esl.js')}}"></script>
<script src="{{asset('assets/js/chart/echart/config.js')}}"></script>
<script src="{{asset('assets/js/chart/echart/pie-chart/facePrint.js')}}"></script>
<script src="{{asset('assets/js/chart/echart/pie-chart/testHelper.js')}}"></script>
<script src="{{asset('assets/js/chart/echart/pie-chart/custom-transition-texture.js')}}"></script>
<script src="{{asset('assets/js/chart/echart/data/symbols.js')}}"></script>
<script src="{{asset('assets/js/chart/echart/custom.js')}}"></script>

@endsection