@extends('layouts.vertical-menu1.master2')
@section('css')
<link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        </link>
<link href="{{ URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet">
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('assets/js/formapi.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
 --><!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->

<!-- map api script called here -->
 <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script>
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->
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
 // lat=22.7544;
 // long=75.8668;
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


<!-- till here -->
 <style>
	
.error{
	color: red;
  /* margin-right: -57px; */
	
}
.valid{
	color: green;
	
}


.zmdi {
	color: #4ec1ec;
	
}
      .wrap-login100{
      width: 456px;
	    }
      .login100-form-title{
        margin-top:-40px;
        margin-bottom:-30px;
        margin-left:35px;
        
      }
      .login100-form{
        width: 100%;
      }
      input[type=text] {
         border-radius: 6px;
         height: 50px;
         width: 371px;
      } 
      input[type=email] {
         border-radius: 6px;
         height: 50px;
         width: 371px;
      } 
   input[type=password] {
        border-radius: 6px;
        height: 50px;
        width: 371px;
	
      }
      textarea.form-control {
          height: auto;
          width: 370px;
      }
      .custom-file, .custom-file-input {
          position: relative;
          width: 373px;
          height: 2.375rem;
      }
      .form-group {
          margin-left: 9px;
     }
     .container-login100-form-btn{
           height: 50px;
           width: 371px;
           margin-left:10px;
           margin-bottom:1.5rem;
           padding: 0px!important;
     }
     .logintext{
       margin-left:60px;
     }
     .zmdi-eye-off{
           position: absolute;
           float:right;
           right: 2rem;
           top: 1rem;

     }

     .file {
        opacity: 0;
        width: 0.1px;
        height: 0.1px;
     position: absolute;
    } 
    /* .fail-alert{
        text-align:center;
     }*/
.file-input label {
       display: block;
       /* position: relative; */
       width: 371px;
       height: 50px;
       border-radius: 5px;
       border: 1px solid #E2E6EB;
       background: #F1F1F9;
       /* box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4); */
       display: flex;
       align-items: center;
       justify-content: center;
       color: #797785;
       /* font-weight: bold; */
       cursor: pointer;
       transition: transform .2s ease-out;
}

.file-name {
  position: absolute;
  bottom: -35px;
  left: 10px;
  font-size: 0.85rem;
  color: #555;
}


#imgfile{
    padding-left: 110px; 
    padding-top:5px; 
    height:25px
}

/*.agreeDiv{
	margin-top: -40px;
	margin-bottom: -30px;
}*/
#terms-error{
    margin-left:10px;
}
label {
    padding-right: 0px!important;
    font-size: 17px;
    color: #7d7a7a;
}
.hidem{
  display: none;
}
#file-error {
    position: relative;
    top: 4rem;
}
/* @media only screen and (max-width: 1080px){
  .error {
    color: red;
    margin-right: -60px;
}

} */
@media only screen and (max-width: 820px){
        
       .error {
           color: red;
           margin-right: 20px;
       }
}
     @media only screen and (max-width: 480px){

      .file-input label{
        width: 243px;
      }
      #imgfile{
        padding-left: 80px;
      }
      .wrap-login100{
          width: 330px;
	    }
      .login100-form-title{
        margin-top:-40px;
        margin-bottom:-30px;
        margin-left:5px;
        
      }
      input[type=text] {
         border-radius: 6px;
         height: 50px;
         width: 243px;

      } 
      input[type=email] {
         border-radius: 6px;
         height: 50px;
         width: 243px;
      } 
   input[type=password] {
        border-radius: 6px;
        height: 50px;
        width: 243px;
	
      }
      textarea.form-control {
          height: auto;
          width: 243px;
      }
      .custom-file, .custom-file-input {
          position: relative;
          width: 243px;
          height: 50px;
          margin-left:-9px;
      }
      .form-group {
          margin-left: 9px;
     }
     .container-login100-form-btn{
           height: 50px;
           width: 243px;
           margin-left:10px;
     }
     .logintext{
       margin-left:10px;
     }
     .zmdi-eye-off{
           position: absolute;
           float:right;
           right: 2rem;
           top: 1rem;

     }
     .error {
    margin-right: 9px;
     }
     }
</style>

@endsection
@section('content')
		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div class="row">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<!-- <div class="text-center" id="message">

						</div> -->
					</div>
					<div class="container-login100 text-center">

						<div class="wrap-login100 p-6">
							<!-- <div class="text-center">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img" alt="">
						    </div> -->
						    <svg width="53" height="137" viewBox="0 0 83 137" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M34.1916 108.445C43.0857 96.8096 46.5093 93.3981 46.5093 86.886C46.5093 77.9879 39.323 73.882 33.5053 69.7761C27.6876 65.6702 18.1031 62.2466 21.1876 56.4329C18.7894 54.7211 18.7894 54.7211 18.7894 54.7211L11.6031 63.6192C11.6031 63.6192 6.18509 69.441 6.4677 76.2801C6.81087 84.4959 10.2668 87.1848 17.4208 92.0214C29.0562 99.8941 34.5267 102.975 31.4503 106.394C34.1916 108.445 32.4798 107.076 34.1916 108.445ZM62.3959 83.7168L77.5115 64.2369C77.5115 64.2369 82.7599 58.6373 82.7599 48.1484C82.7599 37.6556 74.3664 31.3574 69.8164 28.2084C65.2664 25.0633 48.4795 13.5168 48.4795 13.5168C48.4795 13.5168 42.5326 10.3717 42.5326 5.82174C42.5326 2.32546 43.4894 1.74814 43.4894 1.74814L41.3941 0L28.1922 17.7155C28.1922 17.7155 22.9438 23.3112 22.9438 31.7047C22.9438 40.0981 26.7913 46.7435 30.9901 49.8925C35.1888 53.0376 54.0792 65.981 54.0792 65.981C54.0792 65.981 60.2804 70.5876 61.0717 76.1267C61.6289 79.9944 61.3503 80.5677 60.3006 82.3158C62.3959 83.7168 62.3959 83.7168 62.3959 83.7168ZM55.1329 136.427H25.4832L22.3826 124.025H0L3.10062 117.824H77.5155L80.6161 124.025H58.2335L55.1329 136.427Z" fill="#6BA5CD"/>
</svg>


							<form class="login100-form validate-form" enctype="multipart/form-data"  id="pharma_signup" method="post">
								@csrf
							
								
								<span class="login100-form-title">
									Pharmacy Registration
								</span>
                                 <div class="text-center" id="message">
                                   
                                 </div>
								<div class="form-group">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="pham_name" id="pham_name" placeholder="*Pharmacy Name" >
									
									
								</div>
								
                                 <div class="form-group">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="pham_first_name" id="pham_first_name" placeholder="*Pharmacist First Name" >
									
								</div> 

                                <div class="form-group">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="pham_last_name" id="pham_last_name" placeholder="*Pharmacist Last Name" >
									
								</div> 

                                <div class="form-group">
									<label class="form-label"></label>
									<input type="email" class="form-control" name="pham_email" id="pham_email" placeholder="*Email" >
									
								</div>
                               <!--  <div class="row">

                                <div class="col-md-6"> -->
                                     
                               <!--  </div> -->

                                <!-- <div class="col-md-6"> -->
                                	 <!-- <div class="form-group">
											
											<div class="custom-file">
												<input type="file"  class="custom-file-input" name="file" id="lic_doc" placeholder="*Upload file">
												<label class="custom-file-label">Upload file</label>
												
									       </div>
								</div> -->
                               <!--  </div>
                                </div>
                                -->
								<!-- <div class="form-group">
                                            <label class="form-label"></label>
							   		<input class="form-control" type="password" name="phy_password" id="password" placeholder="*Password" autocomplete="off">
									<div class="symbol-input100 eye1" onclick="toggleVisibiltypass()">
									<i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye " ></i>
                                             </div>
                                   
								</div> -->
								<div class="form-group"style="position:relative">
                                 <input class="form-control" type="password" name="pham_password" id="pham_password" placeholder="*Password" autocomplete="off">
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye" onclick="toggleVisibiltypass()" ></i>
								</div>

								<div class="form-group"style="position:relative">
                                 <input class="form-control" type="password" name="confpass" id="confpassword" placeholder="*Confirm Password" autocomplete="off" > 
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye " onclick="toggleVisibilty2()" ></i>
                                <!-- <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "style="margin-left: 7.5rem ;position: absolute;bottom:0.5rem;cursor: pointer;color:'#4ec1ec'" onclick="toggleVisibilty2()" ></i> -->
								</div>
								<!-- <div class="form-group">
		                                    <label class="form-label"></label>
											<input class="form-control" type="password" name="confpass" id="confpassword" placeholder="*Confirm Password" autocomplete="off" > 
		                                      <div class="symbol-input100 eye2" onclick="toggleVisibilty2()">
											<i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "></i>
										    </div>
								</div> -->
                                  <div class="form-group" style="position:relative;">
                                      <textarea  class="form-control" name="pham_address" id="pham_address" rows="3" placeholder="Address" autocomplete="on"></textarea>
                                      <i  id="add_icon"  class="fa fa-map-marker" style="font-size:24px;position: absolute;float:left;right:2rem;top:0.9rem;color:#7ec1ec;cursor:pointer" data-toggle="modal" data-target="#largeModal"></i>
                                  </div>
                                        <!-- <input type="hidden" id="loc_lat" />
                                        <input type="hidden" id="loc_long" /> -->
                                   <div class="form-group">
                                        <label class="form-label"></label>
                                       <input class="form-control" name="pham_lat"  type="hidden" value="" id="pham_lat" placeholder="*Latitude" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                                <label class="form-label"></label>
                                        <input class="form-control" name="pham_long" type="hidden" value="" id="pham_long" placeholder="*Longitude" autocomplete="off">
                                    </div>
                                <!--   <div class="row"> -->
                                      <!-- <div class="col"> -->
                                          <div class="form-group">
                                              <label class="form-label"></label>
                                             <input type="text" class="form-control" name="pham_registration_num" id="pham_registration_num"placeholder="*Registration Number" >
                                         </div>
                                     <!--  </div> -->
                                     <!--  <div class="col"> -->
                                          <div class="form-group mt-2">
											 
                       <!-- file -->
                       <div class="file-input mt-4">
                                           <input type="file" id="file"  name="file" class="file">
                                           <label for="file">
                                             Upload License Doc<img src="{{URL::asset('assets/images/brand/more.png')}}" id="imgfile" alt="">
                                             <p class="file-name"></p>
                                           </label>
                                   </div>
                       <!-- file -->
							          <!--   </div> -->
                                      </div>
                                 <!--  </div> -->
                                    
                                    
                                 <div class="text-center float-left agreeDiv" >
								                   	<label class="text-dark mt-2">
								                   		<input id="terms" name="terms" type="checkbox">&nbsp; I agree to the<a href="#" class="text-primary ml-1">Terms & conditions</a>
								                   	</label>

							                	</div>
                                   
                                <p class="text-red hidem" id="emhide">Email already registered</p>


								<div class="container-login100-form-btn">
									<input class="login100-form-btn btn-primary mt-5" type="submit" id="submit" value="Submit">
								</div>
								<div class="text-center pt-3 style="margin-top:20px!important;">
									<p class="text-dark mb-0 logintext" >Already have an account?<a href="{{url('/pharmacist_Login')}}" class="text-primary">Login Here</a></p>
								</div>
								
								<!-- <div class=" flex-c-m text-center mt-3">
								    <p>Or</p>
									<div class="social-icons">
										<ul>
											<li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus text-google-plus"></i> Sign up with Google</a></li>
											<li><a class="btn  btn-social btn-block mt-2"><i class="fa fa-facebook text-facebook"></i> Sign in with Facebook</a></li>
										</ul>
									</div>
								</div> -->
							</form>
						</div>
					<!-- </div> -->
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->
                <!-- LARGE MODAL -->
<div id="largeModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header pd-x-20">
                <h6 class="modal-title">Map Preview</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <h5 class=" lh-3 mg-b-20"><a href="" class="font-weight-bold"></a></h5>
                <!-- map added here -->
                <div class="col-md-12 modal_body_map">
                    <div id="map-canvas1" class="" style="width:700px;height:480px"></div>
               </div>
            </div><!-- modal-body -->
            
        </div>
    </div><!-- MODAL DIALOG -->
</div>
<!-- LARGE MODAL CLOSED -->  
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
@endsection

<!-- Toggle visibility function   -->

<script>
function toggleVisibiltypass(){
	// alert('clicked1');
let togglePassword3 = document.querySelector("#togglePassword3");
        let password = document.querySelector("#pham_password");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword3.classList.toggle("zmdi-eye");
      
}
</script>
<script>
function toggleVisibilty2(){
	// alert('clicked2');
let togglePassword2 = document.querySelector("#togglePassword2");
let confpassword = document.querySelector("#confpassword");
  let type = confpassword.getAttribute("type") === "password" ? "text" : "password";
            confpassword.setAttribute("type", type);
            // toggle the icon
            togglePassword2.classList.toggle("zmdi-eye");
      
}

 
 
</script>
@section('js')

<script>
$(document).ready(function(){
	var api_url="http://3.220.132.29:3000/api/";
	var base_path = "http://3.220.132.29/medpro/";
$("#pharma_signup").validate({
 
     errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      pham_name: {
        required: true,
        lettersonly: true
       
      },
      pham_first_name: {
        required: true,
        lettersonly: true
      
      },
       pham_last_name: {
        required: true,
        lettersonly: true
      },
      pham_email: {
         required: true,
        email: true
      },
      pham_registration_num:{
        required:true,
        minlength:8
      },
      pham_address:{
        required:true,
      },
     file:{
      required:true,
     },
     pham_password: {
      required:true,
      minlength:8
     },
      confpass: {
        required: true,
        minlength: 8,
        equalTo: "#pham_password",
      },
      terms:{
           required: true
      }
    },
    messages : {

      pham_name: {
        required: "Pharmacy Name 62field is Required"
     
      },
      pham_first_name: {
         required: "First Name field is Required",
         lettersonly:"Only Alphabetical Characters are allowed"
     
      },
      pham_last_name: {
          required: "Last Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed"
       
      },
      pham_email: {
        required: "Email field is Required",
        email: "The email should be in the format: abc@domain.tld"
      },
      pham_address: {
        required: "Address field is Required"
      },

     pham_registration_num:{
        required:"License Number field is Required",
        minlength: "Licence Number should be at least 8 characters"
      },
      file:{
        required:"License doc is Required"
     },
      pham_password: {
      required:"Password field is Required",
      minlength:"Password should be of atleast 8 characters"
     },
     confpass: {
        required: "Confirm Password field is Required",
        minlength: "Password and Confirm password should be same"
        // equalTo: "Password and Confirm password should be same"
      },
      terms:{
        required:"<p>I agree to the Terms & conditions<p>"
      }

     
    }
    
  });


       $('#pharma_signup').submit(function (event) {
    event.preventDefault();

        $('#terms').on('change', function(){
      this.value = this.checked ? 1 : 0;
      // alert(this.value);
   }).change();
 

    /*formvalidation for signup form*/
    var pham_name =$('#pham_name').val();
    var pham_first_name = $('#pham_first_name').val();
    var pham_last_name = $('#pham_last_name').val();
    var email = $('#pham_email').val();
    var pham_regn =$('#pham_registration_num').val();
    var pham_address =$('#pham_address').val();
    var file =$('file').val();
    var password = $('#pham_password').val();
    var confpassword =$('#confpassword').val();
    var terms =$('#terms').val();
   
      

    // }
    //  formData.append('phy_licnse_file', $('input[type=file]')[0].files[0]);  
    // console.log(formData);
    // return false;
    
    if(pham_name!="" && pham_first_name!="" && pham_last_name !=="" && email!="" && pham_regn!="" && file!="" && password!="" && terms=="1" && pham_address!="" ){
    $.ajax({
      type: "POST",
      url: api_url+"phamsistRegister",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) {
     //    alert('done');
  
      // console.log(res);
      // return false;
        if(res.status == true){
            swal({
                  title: "You are Registered Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
          // $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path+"pharmacist_Login";
        }else{
          //  $('#message').html(res.message).addClass('alert alert-danger');
          $('#emhide').html(res.message).removeClass('hidem');
        }
    });
   }else{
   }

  });





})
  
</script>



@endsection
