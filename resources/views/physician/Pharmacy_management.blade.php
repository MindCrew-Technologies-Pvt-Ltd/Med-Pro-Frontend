@extends('layouts.vertical-menu.master')
@section('css')
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- map api script called here -->
 <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script>
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->

<script>
   const address=[];
   var InforObj = [];
   var map;
   var service;
   var infowindow;

   var searchInput = 'pac-input';

   $(document).ready(function () {

    var base_path = "http://3.220.132.29/medpro/";
    var api_url="http://3.220.132.29:3000/api/";

    var autocomplete;

    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
    //  $.ajax({
    //       type: "POST",
    //       url: api_url+"phyPhamList",
          
    //     }).done(function (res) {
        
    //        // res.data.map((v,i)=>console.log(v.location.latitude,v.location.longitude));
    //        res.data.map((v,i)=>{
    //           // console.log(v.location.latitude,v.location.longitude)
    //          let obj={
    //                   "lat":v.location.latitude,
    //                   "lng":v.location.longitude
    //             };
              
    //           let add = {address : v.address} 
    //             features.push(obj);
    //             address.push(add);
    //        }); 
    //     });


        google.maps.event.addListener(autocomplete, 'place_changed', function () {
          const features=[];

        var near_place = autocomplete.getPlace();
        // alert(near_place)

        document.getElementById('psnt_lat').value = near_place.geometry.location.lat();
        document.getElementById('psnt_long').value = near_place.geometry.location.lng();
        
        document.getElementById('psnt_lat').innerHTML = near_place.geometry.location.lat();
        document.getElementById('psnt_long').innerHTML = near_place.geometry.location.lng();
    
              var lat=document.getElementById('psnt_lat').value 
              var long=document.getElementById('psnt_long').value

              var pyrmont = new google.maps.LatLng(lat,long);

              map = new google.maps.Map(document.getElementById('map'), {
                  center: pyrmont,
                  zoom: 15
                });
              
                var request = {
                  location: pyrmont,
                  radius: '100',
                  query: 'pharmacy'
                };

                let address=[];
               
                  service = new google.maps.places.PlacesService(map);
                  service.textSearch(request, callback);
              
              async function callback(results, status) {

                if (status == google.maps.places.PlacesServiceStatus.OK) {
                  
                  for (var i = 0; i < results.length; i++) {
                    var place = results[i];
                    let obj={
                      "lat":place.geometry.location.lat(),
                      "lng":place.geometry.location.lng()
                      };
                 
                    let add = {address : place.name} 
                    await features.push(obj);
                    await address.push(add);
                    }
                      // console.log("obj",obj)
                     //console.log("address", address[i].address)

                      var pinImage = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/icons/red-dot.png");

                      const svgMarker = {
                      path: "M13.9 18H10.1C9.76863 18 9.5 17.7314 9.5 17.4V15.1C9.5 14.7686 9.23137 14.5 8.9 14.5H6.6C6.26863 14.5 6 14.2314 6 13.9V10.1C6 9.76863 6.26863 9.5 6.6 9.5H8.9C9.23137 9.5 9.5 9.23137 9.5 8.9V6.6C9.5 6.26863 9.76863 6 10.1 6H13.9C14.2314 6 14.5 6.26863 14.5 6.6V8.9C14.5 9.23137 14.7686 9.5 15.1 9.5H17.4C17.7314 9.5 18 9.76863 18 10.1V13.9C18 14.2314 17.7314 14.5 17.4 14.5H15.1C14.7686 14.5 14.5 14.7686 14.5 15.1V17.4C14.5 17.7314 14.2314 18 13.9 18Z",
                      fillColor: "Red",
                      fillOpacity: 0.6,
                      strokeWeight: 0,
                      rotation: 0,
                      scale: 3,
                      anchor: new google.maps.Point(15, 30),
                      };
                      var geocoder = new google.maps.Geocoder();
                      var infowindow = new google.maps.InfoWindow();
                //       for (let i = 0; i < features.length; i++) {
                      
                //       var contentString = '<div id="content">Location:<h5>' + address[i].address +
                //                           '</h5></div>';

                //       const marker = new google.maps.Marker({
                //         position: features[i],//features[i].position
                //         icon:svgMarker,
                //         map: map,
                //       animation: google.maps.Animation.DROP,
                //       });
                      
                //       const infowindow = new google.maps.InfoWindow({
                //                           content: contentString,
                //                           maxWidth: 200
                //                   });

                //       marker.addListener('click', function () {
                                      
                //           infowindow.open(marker.get('map'), marker);
                //       });
                // }

                   //address.push(results[i]);
                    //createMarker(results[i]);
                  //}

                  for (let i = 0; i < features.length; i++) {
                      
                    console.log(address.length,"aaaaa")
                    console.log(features.length,"bbbbbbbb")

                      var contentString = '<div id="content">Location:<h5>' + address[i].address +
                                          '</h5></div>';

                      const marker = new google.maps.Marker({
                        position: features[i],//features[i].position
                        icon:svgMarker,
                        map: map,
                      animation: google.maps.Animation.DROP,
                      });
                      
                      const infowindow = new google.maps.InfoWindow({
                                          content: contentString,
                                          maxWidth: 200
                                  });

                      marker.addListener('click', function () {
                                      
                          infowindow.open(marker.get('map'), marker);
                      });
                }
                }
              }
      });
    $(document).on('change', '#'+searchInput, function () {
  
    document.getElementById('psnt_lat').innerHTML = '';
    document.getElementById('psnt_long').innerHTML = '';
    
    document.getElementById('psnt_lat').innerHTML = '';
    document.getElementById('psnt_long').innerHTML = '';

});


});

/*code for search ends here*/

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
@media (min-width: 375px) and (max-width:667px) {

  #profile-user{
        left: 16rem;
        top: 1rem;
  }
}
@media (min-width: 414px) and (max-width:896px) {
      #profile-user{
        position: relative!important;
        left: 0rem!important;
       
     }

     .dropdown-menu{
        text-align:right;
        left: 9rem;
      }
    }
    </style>
@endsection
@section('page-header')
<style>

</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">{{__('sidebar.pharm_mgmt')}}</h1>
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
                        <div class="input-group">
                            <input class="form-control py-2 border-right-0 border" type="text" value="" id="pac-input" placeholder="{{__('sidebar.ent_search')}}">
                            <input class="form-control" name="psnt_lat"  type="hidden" value="" id="psnt_lat" placeholder="*Latitude" autocomplete="off">
                            <input class="form-control" name="psnt_long"  type="hidden" value="" id="psnt_long" placeholder="*Longitude" autocomplete="off">
                        <span class="input-group-append">
                            <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                        </span>
                           </div>
                         </div>
                </div>
                 <!--  </div> -->
        </div>
         
        <div class="container">
               <div id="map" style = "width:100%; height:600px;">
                   
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923095.8104199886!2d50.657278949475696!3d25.34304852013537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x1cfa88cf812b4032!2sQatar!5e0!3m2!1sen!2sin!4v1656585901495!5m2!1sen!2sin" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
               </div>
        </div>
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




