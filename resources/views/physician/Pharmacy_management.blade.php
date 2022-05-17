@extends('layouts.vertical-menu.master')
@section('css')
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- map api script called here -->
 <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script>
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->
 




<script>

//    var searchInput = 'pac-input';

// $(document).ready(function () {

//     var lat,lng;
//     // var autocomplete;
//     // autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
//     //     types: ['geocode'],
//     // });
//     var autocomplete;
//     autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
//         types: ['geocode'],
//     });
    
//     google.maps.event.addListener(autocomplete, 'place_changed', function () {
//         var near_place = autocomplete.getPlace();
        
//         document.getElementById('psnt_lat').value = near_place.geometry.location.lat();
//         document.getElementById('psnt_long').value = near_place.geometry.location.lng();
        
//         document.getElementById('psnt_lat').innerHTML = near_place.geometry.location.lat();
//         document.getElementById('psnt_long').innerHTML = near_place.geometry.location.lng();
//     });
// });
// $(document).on('change', '#'+searchInput, function () {
//     document.getElementById('psnt_lat').innerHTML = '';
//     document.getElementById('psnt_long').innerHTML = '';
    
//     document.getElementById('psnt_lat').innerHTML = '';
//     document.getElementById('psnt_long').innerHTML = '';
// });
 



/*code for search ends here*/

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(-33.91722, 151.23064),
    zoom: 16,
  });

  
  const features = [
    {
      position: new google.maps.LatLng(-33.91721, 151.2263),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91539, 151.2282),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91747, 151.22912),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.9191, 151.22907),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91725, 151.23011),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91872, 151.23089),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91784, 151.23094),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91682, 151.23149),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.9179, 151.23463),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91666, 151.23468),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.916988, 151.23364),
      // type: "info",
    },
    {
      position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
      // type: "parking",
    },
    {
      position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
      // type: "library",
    },
  ];

  // Create markers.
//http://www.googlemapsmarkers.com/v1/FF0000/
 var pinImage = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/icons/red-dot.png");
  for (let i = 0; i < features.length; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      // icon: icons[features[i].type].icon,
      icon:pinImage,
      map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    });
    marker.addListener("click", toggleBounce);
  }
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
window.initMap = initMap;
</script>
<style>
#map {
  height: 100%;
  width: 100%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

    </style>
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
            <!-- <div class="headdd" style="background-color: #7EC1EC">
                -->
                     <div class="row mb-3">
                    <div class="col">
                        <div class="input-group mr-9">
                            <input class="form-control py-2 border-right-0 border" type="search" value="Search" id="pac-input">
                        <span class="input-group-append">
                            <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                        </span>
                           </div>
     
                    </div>
                </div>
                
           <!--  </div> -->
        </div>
         
        <div class="container">
               <div id="map" style = "width:100%; height:600px;"></div>
        </div>



<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8&callback=initMap&v=weekly"
      defer
    >			
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



