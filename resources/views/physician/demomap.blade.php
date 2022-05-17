@extends('layouts.vertical-menu.master')
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
        
 
<input id="SearchTerm" type="text" placeholder="Enter a location to get lat/long" autocomplete="on" />  <br/>
Lat : <input type="text" id="latitude" name="latitude" /> <br/>
Long : <input type="text" id="longitude" name="longitude" />  <br/>
   
 <!--  <script src="//maps.googleapis.com/maps/api/js?Key=AIzaSyAOK58ALCIivy-NRIRcCtRbUbEC22H0MTI&libraries=places" type="text/javascript"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&key=AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E" async="" defer="defer" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('SearchTerm');
        var autocomplete = new google.maps.places.Autocomplete(input);

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();  
            // get lat/long using place.geometry.location      
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
         
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>




						
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




