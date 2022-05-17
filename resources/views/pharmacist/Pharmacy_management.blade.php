@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<style>

</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">Pharmacy Management</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>

                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
    <div class="container">
        <div class="headdd" style="background-color: #7EC1EC">
            <div class="row">
				<div class="col-12">
                    <!-- card-body start -->
						<div class="card">
							<div class="card-header">
										


							</div>
							<div class="card-body">



							</div>
                            <!-- card-body end -->
						</div>
                    <!-- card end -->

				</div>
                <!-- col end -->
			</div>
            <!-- row end -->
                
        </div>
        <!-- headd end -->
    </div>
    <!-- container end -->
         





						
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
@endsection




