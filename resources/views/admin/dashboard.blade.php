@extends('layout.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="container-header">
<div class="container-fluid">
		<div class="row">
			<!-- Main Sidebar -->

	        <!-- / .main-navbar -->
	          <div class="main-content-container container-fluid px-4">
	            <!-- Page Header -->
	            <div class="page-header row no-gutters py-4">
	              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
	                <!-- <span class="text-uppercase page-subtitle">Dashboard</span> -->
	                <h3 class="page-title">Dashboard</h3>
	              </div>
	            </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="pt-1">	            	
		            <div class="row">
		              <div class="col-lg col-md-6 col-sm-6 mb-4">
		                <div class="stats-small stats-small--1 card card-small">
		                  <div class="card-body p-0 d-flex">
		                    <div class="d-flex flex-column m-auto">
		                      <div class="stats-small__data text-center">
		                        <span class="stats-small__label text-uppercase">Jumlah Penyewaan</span>
		                        <h6 class="stats-small__value count my-3">ASDASDASDAS</h6>
		                      </div>
		                      <div class="stats-small__data">
		                        <span class="stats-small__percentage stats-small__percentage--increase"> </span>
		                      </div>
		                    </div>
		                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
		                  </div>
		                </div>
		              </div>
		              <div class="col-lg col-md-6 col-sm-6 mb-4">
		                <div class="stats-small stats-small--1 card card-small">
		                  <div class="card-body p-0 d-flex">
		                    <div class="d-flex flex-column m-auto">
		                      <div class="stats-small__data text-center">
		                        <span class="stats-small__label text-uppercase">Jumlah Kendaraan</span>
		                        <h6 class="stats-small__value count my-3">ASDASDSA</h6>
		                      </div>
		                      <div class="stats-small__data">
		                        <span class="stats-small__percentage "></span>
		                      </div>
		                    </div>
		                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
		                  </div>
		                </div>
		              </div>
		              <div class="col-lg col-md-4 col-sm-6 mb-4">
		                <div class="stats-small stats-small--1 card card-small">
		                  <div class="card-body p-0 d-flex">
		                    <div class="d-flex flex-column m-auto">
		                      <div class="stats-small__data text-center">
		                        <span class="stats-small__label text-uppercase">Jumlah Customer</span>
		                        <h6 class="stats-small__value count my-3"> ASDSADSAD</h6>
		                      </div>
		                      <div class="stats-small__data">
		                        <span class="stats-small__percentage"></span>
		                      </div>
		                    </div>
		                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
		                  </div>
		                </div>
		              </div>	              
		            </div>		                        	
	            </div>
    </section>
    <!-- /.content -->

    
	
    @endsection
  
