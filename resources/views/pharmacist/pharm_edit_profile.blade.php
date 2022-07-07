@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<!-- map api script called here -->
<!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script> -->
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->
 <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script>
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script>
    
    var base_path = "http://3.220.132.29/medpro/";
    var api_url="http://3.220.132.29:3000/api/";
    // var id=$this.id;
      
         let user_data4=localStorage.getItem('pharm_det');
         var obj = JSON.parse(user_data4);
         
         var pharm_id =obj._id;
         $('#phamaciest_id').val(pharm_id);
        //  window.location.href =base_path +"physician_profile/"+phy_id;
        //     console.log("pharmCY  details",obj);
            // alert(phy_id)
    $.ajax({
      url: api_url+"phamViewProfile",
      type: "post",
      dataType: 'json', 
      data:{
        phamaciest_id:pharm_id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
      localStorage.setItem('pharm_profile_det',res);
         let image_name = res.data.pham_registration_file;
         let ext = image_name.split(".");
          ext = ext[(ext.length -1)];
      // alert(res);
          console.log("respons",res);

      //     return false;
              $("#n").val(res.data.pham_name) ;   
              $("#pham_first_name").val(res.data.pham_first_name) ;   
              $("#pham_last_name").val(res.data.pham_last_name) ;   
              $('#email').val(res.data.pham_email);
              $('#pham_address').val(res.data.pham_address);
              $('#pham_lat').val(res.data.pham_loc[0]);
               $('#pham_long').val(res.data.pham_loc[1])
              // $('#password').val("********");
              $('#registration_number').val(res.data.pham_registration_num);
              if(ext =="pdf"){
                 $('#registration_file').attr('src','https://cdn.pixabay.com/photo/2013/07/13/01/18/pdf-155498_640.png');
                 $("#image_show").attr('href',res.data.pham_registration_file)
              }else{
                 $('#registration_file').attr('src',res.data.pham_registration_file);
                  $("#image_show").attr('href',res.data.pham_registration_file)
              }
              // $('#registration_file').attr('src',res.data.pham_registration_file);
              $('#output').attr('src',res.data.pham_img)
              // alert('load')
    });
    



</script>
  <script>
   var searchInput = 'pham_address';

$(document).ready(function () {
   var map;  
    var marker; 
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
    
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('pham_lat').value = near_place.geometry.location.lat();
        document.getElementById('pham_long').value = near_place.geometry.location.lng();
        
        document.getElementById('pham_lat').innerHTML = near_place.geometry.location.lat();
        document.getElementById('pham_long').innerHTML = near_place.geometry.location.lng();
   
               var lat1=document.getElementById('pham_lat').value 
              var long1=document.getElementById('pham_long').value
              let map1;
              map1 = new google.maps.Map(document.getElementById("map-canvas1"), {
                center: new google.maps.LatLng(lat1,long1),
                zoom: 16,
                });
                map1.setCenter(new google.maps.LatLng(lat1,long1));
                var myCenter=new google.maps.LatLng(lat1,long1);
               var marker=new google.maps.Marker({
                position:myCenter,
               draggable: true 

               });
              marker.setMap(map1);

              var geocoder1 = new google.maps.Geocoder();

              geocoder1.geocode({'latLng': myCenter }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
    console.log(results[0])
$('#pham_lat,#pham_long').show();
$('#pham_address').val(results[0].formatted_address);
$('#pham_lat').val(marker.getPosition().lat());
$('#pham_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
     }
   }
});
google.maps.event.addListener(marker, 'dragend', function() {

geocoder1.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#pham_address').val(results[0].formatted_address);
$('#pham_lat').val(marker.getPosition().lat());
$('#pham_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});
 });

});
$(document).on('change', '#'+searchInput, function () {
     document.getElementById('pham_lat').value = '';
     document.getElementById('pham_long').value = '';
    
    document.getElementById('pham_lat').innerHTML = '';
    document.getElementById('pham_long').innerHTML = '';
});
var lat=$('#pham_lat').val();
var long= $('#pham_long').val(); 
 lat=22.7544;
 long=75.8668;
 // alert(lat)
 // alert(long)
var myCenter=new google.maps.LatLng(lat,long);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();

var marker=new google.maps.Marker({
    position:myCenter,
    draggable: true 

});
function initialize() {
  var mapProp = {
      center:myCenter,
      zoom: 18,
      mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  map=new google.maps.Map(document.getElementById("map-canvas1"),mapProp);
  marker.setMap(map);
   
 
  google.maps.event.addListener(marker, 'click', function() {
      
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
    
  }); 
  
  
};

geocoder.geocode({'latLng': myCenter }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
    console.log(results[0])
$('#pham_lat,#pham_long').show();
$('#pham_address').val(results[0].formatted_address);
$('#pham_lat').val(marker.getPosition().lat());
$('#pham_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
     }
   }
});
google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#pham_address').val(results[0].formatted_address);
$('#pham_lat').val(marker.getPosition().lat());
$('#pham_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});
google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", resizingMap());


    $('#largeModal').on('shown.bs.modal', function() {
    resizeMap();
  });

 function resizeMap() {
   if(typeof map =="undefined") return;
   setTimeout( function(){resizingMap();} , 400);
}

function resizingMap() {
   if(typeof map =="undefined") return;
   var center = map.getCenter();
   google.maps.event.trigger(map, "resize");
   map.setCenter(center); 
}
  </script>

<style>
    #img_file{
    top: 3.5rem;
    opacity:0;
    z-index: 2;
   /* position: absolute;
    float: left;
    left: 14.2rem;
    top: 1rem;

    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: white;
    color: #7ec1ec;*/

    
  }

  input[type=file]::file-selector-button:hover {
  background-color: #7ec1ec;
  border: 2px solid #00cec9;
  }
#add_icon{
    font-size:24px;
    position: absolute;
    float:left;
    right:2rem;
    top:3rem;
    color:#7ec1ec;
    cursor:pointer;
}
  .proimg {
    height: 80px;
    width: 80px;
    margin-right: 330px;
    position: relative;
    top: 0rem;
    left: 1rem;
    border-radius: 50%;
  }
.glyphicon{
    position:relative;
  top: 3.5rem;
left: -13.5rem;
  color: #7ec1ec;
  z-index: -1;
 }
  
 #upload_btn{
  border-radius:10px;
  display:hidden;
  margin-left:2.5rem;
  left: 1.5rem;
  }

     .connewpas {
    padding-right: 57%;
    }
    #phamname{
          padding-right: 86%;
        }
     .newpass {
    padding-right: 72%;
    }
     
     input[type=text]{
         width: 100%;
         height: 50px;
         background-color: #F1F1F9;
      }
      #registration_number{
        width: 100%;
      }
      #license_number{
        width: 100%;
      }
      .changepass{
          box-sizing: border-box;
          width: 200px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          border: none;
          color: #fff;
          font-size: 15px;
          margin-top: 30px;
          margin-bottom: 30px;
          margin-left: 900px;

     }
     
     .btninput{
         width: 100%;
         background-color: #F1F1F9;
         color: #7F7F7F;
         height: 50px;
         padding-right: 994px;
         margin-top: 15px;
         margin-bottom: 15px;
     }
     #arrow{
         color: #7EC1EC;
         padding-left: 900px;
         font-size: 18px;
     }
     .licenseimg {
          width: auto;
          background-color: #F1F1F9;
          color: #7F7F7F;
          height: auto;
          margin-top: 30px;
          margin-bottom: 30px;
    }
    
     label{
       /* padding-right: 82%;*/
        font-size: 17px; 
        color: #7d7a7a;
        float:left;
        }
        .emaill{
          margin-right: 122px;
        }
        .pass{
          margin-right: 122px;
        }

     .editbtn{
          box-sizing: border-box;
          width: 90px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          color: #fff;
          font-size: 15px;
     }
     .ok{
          box-sizing: border-box;
          width: 90px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          color: #fff;
          font-size: 15px;
          margin-left: 212px;
          margin-bottom: 20px;
     }
     .savechnagesbtn{
          box-sizing: border-box;
          width: 200px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          border: none;
          color: #fff;
          font-size: 15px;
          margin-top: 30px;
          margin-bottom: 30px;
          

     }
     .btnupload{
          box-sizing: border-box;
          width: 116px;
          height: 38px;
          background: #7EC1EC;
          border-radius: 10px;
          border: none;
          color: #fff;
          font-size: 15px;
          margin-bottom: 10px;
          margin-left: 360px;

     }

     /* .file {
          opacity: 0;
          width: 0.1px;
          height: 0.1px;
          position: absolute;
    }

.file-input label {
         display: block;
         position: relative;
         width: 200px;
         height: 50px;
         border-radius: 25px;
         background: #7EC1EC;
         
         align-items: center;
         justify-content: center;
         color: #fff;
         cursor: pointer;
         transition: transform .2s ease-out;
}

.file-name {
        position: absolute;
        bottom: -35px;
        left: 10px;
        font-size: 0.85rem;
        color: #555;
       } */
/*#img_file{
 
    position: absolute;
    float: left;
    left: 14.2rem;
    top: 1rem;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: white;
    color: #7ec1ec;
  }*/

@media (min-width: 412px)and (max-width: 1180px){
    #profile_user{
        margin-left:173px!important;
    }
    #phamname{
       /* padding-right:0px;*/
    }
    input[type="text"]{
        width:385px;
    }
    .changepass{
        margin-left: 0;
    }
    label{
        font-size: 14px;
    }
    .connewpas{
        padding-right:0;
    }
    .newpass{
       padding-right:0;  
    }
}
@media (min-width: 820px)and (max-width: 1180px){
input[type="text"]{
        width:540px;
    }

 .glyphicon{
    left: -8.5rem;
 }
}

@media (min-width: 375px)and (max-width: 812px){
#profile_user{
    margin-left: 252px;
}
.changepass{
    margin-left: 0;
}
label{
    font-size: 14px;
}

}
     @media (min-width: 992px){
        .col-lg {
             flex-basis: 0;
             flex-grow: 1;
             max-width: 100%;
             margin-right: 702px;
            }

     }
          
</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">{{__('pham_profile.profile')}}</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>

                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<div class="container pb-5">

      <!-- row start -->
         <div class="row pb-6">
            <form id="jsform" method="post" enctype="multipart/form-data"style="display: flex;">
                @csrf 
              <div class="col-sm col-lg profile-pic">
                 
             <input type="hidden" value="" name="phamaciest_id" id="phamaciest_id">
                   <label for="file">
        
                <input id="img_file" type="file" accept="image/*" name="image" />
                <span  class="glyphicon glyphicon-pencil gly"></span>
                </label>
                  <img src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" class="proimg" id="output"  alt="">
                  <input type="submit" class="btn-primary float-left profile-pic1 mt-3 ml-1" value="{{__('pham_profile.upload')}}" id="upload_btn" style="border-radius:10px;display:hidden" name="submit">
              </div>

          </form>

        </div>
        <div id="message"></div>

     <!-- row end -->

     <!-- form start  -->
     <form action="" method="post" id="phamsavechanges">
       @csrf 
          <input type="hidden" value="" name="phamaciest_id" id="phamaciest_id1">
            <div class="form-group ">
               <label for="pham_name" id="phamname p1" class="phamname1">{{__('pham_profile.pname')}}:</label>
               <input type="text" class="form-control" id="n" name="pham_name">
            </div>
            <div class="form-group ">
               <label for="pham_first_name">{{__('pham_profile.fname')}}:</label>
               <input type="text" class="form-control" id="pham_first_name" name="pham_first_name">
            </div>

            <div class="form-group">
               <label for="pham_last_name">{{__('pham_profile.lname')}}:</label>
               <input type="text" class="form-control" id="pham_last_name" name="pham_last_name">
            </div>
             <div class="form-group" style="position:relative;">
                 <label for="address">{{__('pham_profile.add')}}:</label>
              <textarea  class="form-control" name="pham_address" id="pham_address" rows="3" placeholder="Address" autocomplete="on"></textarea>
               <i  id="add_icon"  class="fa fa-map-marker"  data-toggle="modal" data-target="#largeModal"></i>
            </div>
            <div class="form-group">
                <label class="form-label"></label>
                <input class="form-control" name="pham_lat"  type="hidden" value="" id="pham_lat" placeholder="*Latitude" autocomplete="off">
            </div>
              <div class="form-group">
                        <label class="form-label"></label>
                <input class="form-control" name="pham_long" type="hidden" value="" id="pham_long" placeholder="*Longitude" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="email" class="emaill">{{__('pham_profile.email')}}:</label>
               <input type="text" class="form-control" id="email" disabled>
            </div>

            <button type="button" class="btn btninput" data-toggle="modal" data-target="#exampleModal">{{__('pham_profile.reg_no')}}<i class="fas fa-eye" id="arrow">
            </i> </button>

           
            <button type="button" class="btn changepass" data-toggle="modal" data-target="#exampleModalCenter">
            {{__('pham_profile.change_pass')}}
            </button>




         <button type="submit" class="savechnagesbtn" > {{__('pham_profile.save_changes')}}</button>

     

                      
           

                <!-- LARGE MODAL -->
<div id="largeModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header pd-x-20">
                <h6 class="modal-title">{{__('pham_profile.map')}}</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <h5 class=" lh-3 mg-b-20"><a href="" class="font-weight-bold"></a></h5>
                <!-- map added here -->
                <div class="col-md-12 modal_body_map">
                    <div id="map-canvas1" class="" style="width:100%;height:330px"></div>
               </div>
            </div><!-- modal-body -->
            
        </div>
    </div><!-- MODAL DIALOG -->
</div>
<!-- LARGE MODAL CLOSED -->  



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        
                   <div class="form-group">
                       <label for="registration_number">{{__('pham_profile.reg_no')}}:</label>
                       <input type="text" class="form-control lnum" id="registration_number" name="pham_registration_num">
                   </div>

                   <div class="form-group licenseimg">
                        <label  class="form-label"style="padding-right: 70%;">{{__('pham_profile.lic_img')}}</label>
                        <a href="" id="image_show">
                        <img src="" class="licenseimg" alt="license_image" id="registration_file" style="height:200px;width:200px;">
                        </a>
                       
                  </div>
                  
      </div>
       
                    <input type="file" name="file" id="file" class="file" >

                     
     
        <button type="button" class="btn ok" data-dismiss="modal">{{__('pham_profile.ok')}}</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>
</form>
     <!-- form start  -->
    <!-- Modal for password -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{__('pham_profile.change_pass')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
                     <div id="message3"></div>
            <form method="post" id="pham_pass_update" >
                @csrf
           <div class="form-group" style="position:relative;">
               <label for="password" class="pass">{{__('pham_profile.password')}}:</label>
            <input type="password" class="form-control w-100" id="password" name="pham_old_password">
              <i class="zmdi zmdi-eye zmdi-eye-off zmdi3" id="togglePassword1" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty1()"style="position: absolute;float:right;right: 2rem;top:3rem;color:#7ec1ec;"></i>
            </div>

            <div class="form-group" style="position:relative;">
               <label for="newpassword" class="newpass">{{__('pham_profile.new_pass')}}:</label>
                <input type="password" class="form-control w-100" id="newpassword" name="pham_new_password">
              <i class="zmdi zmdi-eye zmdi-eye-off zmdi3" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty2()"style="position: absolute;float:right;right:2rem;top:3rem;color:#7ec1ec;"></i>
            </div>
            <div class="form-group" style="position:relative;">
               <label for="confnewpassword" class="connewpas">{{__('pham_profile.conf_new')}}:</label>
                <input type="password" class="form-control w-100" id="confnewpassword" name="pham_confrim_new_password">
              <i class="zmdi zmdi-eye zmdi-eye-off zmdi3" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty3()"style="position: absolute;float:right;right:2rem;top:3rem;color:#7ec1ec;"></i>
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="border: none;">{{__('pham_profile.close')}}</button>
        <button type="submit" id="pass_update" value="save" class="btn btn-primary" style="border: none;">{{__('pham_profile.save_pass')}}</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>                     
     <!-- end modal for password-->      
 
      <!-- container end-->
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

<script>
    $( document ).ready(function() {
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
})
$("input[type='file']").change(function(){
   $('.profile-pic1').show();
})
//file
const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
  // Get the selected file
  const [file] = e.target.files;
  // Get the file name and size
  const { name: fileName, size } = file;
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
  document.querySelector('.file-name').textContent = fileNameAndSize;
});

var user_details15=localStorage.getItem('pharm_det');
    var details15 =JSON.parse(user_details15);
    var pharmacist_id15=  details15._id;
    $('#phamaciest_id').val(pharmacist_id15);
    $('#phamaciest_id1').val(pharmacist_id15);
//end document ready 
});
</script>

<script>
    $("#phamsavechanges").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      pharm_name:{
        required: true

      },
      pharm_first: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      pharm_last: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      pharm_add: {
         required: true,
      },
      regino:{
        required:true,
        minlength:8
      },
 
    },
    messages : {
      pharm_name:{
        required: "First Name field is Required"

      },
      
      pharm_first: {
         required: "First Name field is Required",
         lettersonly:"Only Alphabetical Characters are allowed"
      },
      pharm_last: {
          required: "Last Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed"

      },
      pharm_add: {
        required: "Address field is Required"
        
      },

      regino:{
        required:"Registration  Number field is Required",
        minlength: "Registration Number should be at least 8 characters"
      },

    }
  });
 $('#phamsavechanges').on('submit',function (event) {
    event.preventDefault();
    
// alert("API chal gayi")
// return false;   
    /*formvalidation for signup form*/
    // var _token =document.querySelector('[name="_token"]').value;

    var pham_name = $("#pham_name").val();   
    var first_name = $("#pham_first_name").val();   
    var last_name= $("#pham_last_name").val() ;   
    var pham_address= $("#pham_address").val() ;   
    // var email= $('#email').val();
    var pham_registration_num= $('#registration_number').val();
    var file =$('#file')[0].files[0];
   
    var pham_lat =$('#pham_lat').val();
    var pham_long =$('#pham_long').val();



    var user_details5=localStorage.getItem('pharm_det');
    var details5 =JSON.parse(user_details5);
    var pharmacist_id=  details5._id;
    $('#physician_id').val(pharmacist_id);
    console.log(pharmacist_id);
    // alert(physician_id5)

    if(first_name!="" && last_name !==""){
    
        var formData = {
            phamaciest_id:pharmacist_id,
            pham_name:pham_name,
            pham_first_name:first_name,
            pham_last_name:last_name,
            pham_address:pham_address,
            pham_registration_num:pham_registration_num,
            pham_old_password:password,
            pham_new_password:newpassword,
            pham_confrim_new_password:confnewpassword,
            file:file,
            pham_lat:pham_lat,
            pham_long:pham_long
        }


        console.log("Formdata",formData);
        // return false;
    $.ajax({
      type: "POST",
      url: api_url+"phamUpdateProfile",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) {
     //    alert('done');
  
      // console.log("resposne",res);
      // return false;
     

      // if (res.data) {
        if(res.status == true){
          localStorage.setItem('pharm_det', JSON.stringify(res.data));
              swal({
                  title: "Profile Updated Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
          $('#message').html(res.message).addClass('alert alert-success');
          $('#message2').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"pharmacist_profile/"+pharmacist_id;
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
           $('#message2').html(res.message).addClass('alert alert-success');
        }
      // }
    });
   }else{
     $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });

</script>
<script>
    $('#pham_pass_update').on('submit',function (event) {
          event.preventDefault();
          // alert('submitted')
    var user_details65=localStorage.getItem('pharm_det');
    var details65 =JSON.parse(user_details65);
    var pharmacist_id65=  details65._id;
    var password= $('#password').val();
    var newpassword= $('#newpassword').val();
    var confnewpassword =$('#confnewpassword').val();
    
    var formdatapass ={
    phamaciest_id:pharmacist_id65,
    pham_old_password:password,
    pham_new_password:newpassword,
    pham_confrim_new_password:confnewpassword,
    }
    console.log(formdatapass)
     $.ajax({
      type: "POST",
      url: api_url+"phamChangePassword",
      data: formdatapass,
     
    }).done(function (res) {
     
        if(res.status == true){
    
              swal({
                  title: "Password Updated Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
          // $('#message').html(res.message).addClass('alert alert-success');
          $('#message3').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"pharmacist_edit_profile/"+pharmacist_id65;
        }else{
           $('#message3').html(res.message).addClass('alert alert-danger');

        }
    
    });
  
});
</script>
<script>
  
     $('#jsform').on('submit',function (e) {
        e.preventDefault();
        // alert('submit')
       $.ajax({
        url: api_url +"phamUploadImage",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        
      }).done(function(res) {
           if(res.status == true){
            $('#message').html(res.message).addClass('alert alert-success');
            window.location.reload();
           }else{
             $('#message').html(res.message).addClass('alert alert-danger');
           }
           // console.log(res);
           // return false;

      });
        $('.profile-pic1').hide();
     });

</script>
  <script>
 function toggleVisibilty1(){
let togglePassword = document.querySelector("#togglePassword1");
        let password = document.querySelector("#password");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}

  function toggleVisibilty2(){
let togglePassword = document.querySelector("#togglePassword2");
        let password = document.querySelector("#newpassword");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}
 function toggleVisibilty3(){
let togglePassword = document.querySelector("#togglePassword3");
        let password = document.querySelector("#confnewpassword");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}

</script>
@endsection




