@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{URL::asset('assets/css/phy.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




  <style type="text/css">
      
/*input[type=text]{
    text-transform:capitalize;
}*/



.login100-form.validate-form{
width: 80%;
}

.error .fail-alert{
    text-align:right;
}

#psnt_first_name,#psnt_last_name{
    text-transform: capitalize;
}

      /*.file-name{
        display: none;
      }*/
@media (min-width: 375px) and (max-width:667px) {

  /*#profile-user{
        left: 15rem;
        top: 1rem;
  }*/



#psnt_first_name{
    width: 100%;
    
}
  #psnt_last_name{
    width: 100%;
     
}
  
  #psnt_email{
    width: 100%;
  }
  #psnt_password{
    width: 100%;
  }
  #psnt_confpassword{
    width: 100%;
  }
  #psnt_address{
    width: 100%;
     /*text-transform: capitalize;*/
  }
  #psnt_insrnce_num{
    width: 100%;
  }
  .file-input label{
    width: 100%;
  }
  .zmdi{
    right: 2rem;
  }
  #add_icon{
    right: 2rem;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- map api script called here -->
 <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script>
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->


<script>

var searchInput = 'psnt_address';

$(document).ready(function () {

jQuery.validator.addMethod('validUserNameAddPat', function (value) 
{
  let data=window.location.href;
  let valarr=data.split("/");
  let lastval=valarr[valarr.length-1];
  if(lastval == "ar")
  {
    var regex =/^(?:[\u0600-\u06FF\u0750-\u077F\u08A0-\u08FF\uFB50-\uFDCF\uFDF0-\uFDFF\uFE70-\uFEFF]|(?:\uD802[\uDE60-\uDE9F]|\uD83B[\uDE00-\uDEFF])){0,30}$/;
    var key = value;
    if (regex.test(key))
         {
          // console.log("true")
        return true;
          } 
          else{
          return false;
          }
        }
        else{
          var regex = new RegExp("^[a-zA-Z .'()-]*$");;
          var key = value;
          if (regex.test(key))
               {
                // console.log("true")
              return true;
                } 
                else{
                
                  return false;
                }
        }
},'Please Enter a Valid Name  | الرجاء إدخال اسم صحيح')

    var map;  
    var marker; 
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
    
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('psnt_lat').value = near_place.geometry.location.lat();
        document.getElementById('psnt_long').value = near_place.geometry.location.lng();
        
        document.getElementById('psnt_lat').innerHTML = near_place.geometry.location.lat();
        document.getElementById('psnt_long').innerHTML = near_place.geometry.location.lng();
              var lat1=document.getElementById('psnt_lat').value 
              var long1=document.getElementById('psnt_long').value
              let map1;
              map1 = new google.maps.Map(document.getElementById("map-canvas"), {
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
    // console.log(results[0])
$('#psnt_lat,#psnt_long').show();
$('#psnt_address').val(results[0].formatted_address);
$('#psnt_lat').val(marker.getPosition().lat());
$('#psnt_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
     }
   }
});
google.maps.event.addListener(marker, 'dragend', function() {

geocoder1.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#psnt_address').val(results[0].formatted_address);
$('#psnt_lat').val(marker.getPosition().lat());
$('#psnt_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});
    });


// });
$(document).on('change', '#'+searchInput, function () {
    document.getElementById('psnt_lat').innerHTML = '';
    document.getElementById('psnt_long').innerHTML = '';
    
    document.getElementById('psnt_lat').innerHTML = '';
    document.getElementById('psnt_long').innerHTML = '';
    // var address= document.getElementById(searchInput).value;
    // console.log(address)
});
 
var lat=$('#psnt_lat').val();
var long= $('#psnt_long').val();  
if(lat && long){

}else{
    lat ="25.354826";
    long="51.183884";
}
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
  
  map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
  marker.setMap(map);
   
 
  google.maps.event.addListener(marker, 'click', function() {
      
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
    
  }); 
  
  
};

geocoder.geocode({'latLng': myCenter }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
    // console.log(results[0])
$('#psnt_lat,#psnt_long').show();
$('#psnt_address').val(results[0].formatted_address);
$('#psnt_lat').val(marker.getPosition().lat());
$('#psnt_long').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
     }
   }
});
google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#psnt_address').val(results[0].formatted_address);
$('#psnt_lat').val(marker.getPosition().lat());
$('#psnt_long').val(marker.getPosition().lng());
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

})
  </script>


@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                       
                            <div>
                                <h1 class="dashboard page-title">{{__('addpatient.pat_mgmt')}}</h1>
                                <!-- <ol class="breadcrumb"> -->
                                    <!-- <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li> -->
                                    <!-- <li class="breadcrumb-item active" aria-current="page"><a href="{{url('add_patient')}}">Add Patient</a></li> -->
                                    <!-- <li class="breadcrumb-item active" aria-current="page">Add Patient</li>
                                </ol> -->
                            </div>
                           



                         
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
                          
             <div class="container">
                 
                          
                    <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                   
                                        <h3 class="card-title viewp1">{{__('addpatient.add_pat')}}</h3>
                                        
                                   <div class="ml-auto pageheader-btn">
                                           <!--  <a href="{{ url('add_patient') }}" class="btn btn-primary btn-icon text-white mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a>
                                            -->
                                    </div>


                                    </div>
                                    <div class="card-body">
                                       <form class="login100-form validate-form" enctype="multipart/form-data"  id="pat_signup" method="post">
                                            @csrf
                                                                                                 
                                             <div class="text-center" id="message">
                                               
                                             </div>

                                             <div class="form-group ">
                                                <label class="form-label"></label>
                                                <input type="hidden" class="form-control w-75" name="physician_id" id="physician_id" value="">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="psnt_first_name" id="psnt_first_name"placeholder="*{{__('addpatient.fname')}}">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="psnt_last_name" id="psnt_last_name"placeholder="*{{__('addpatient.lname')}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="email" class="form-control" name="psnt_email" id="psnt_email" placeholder="*{{__('addpatient.email')}}">
                                                
                                            </div>
                                             <div class="form-group" style="position:relative">
                                                        <label class="form-label"></label>
                                                <input class="form-control" type="password" name="psnt_password" id="psnt_password" placeholder="*{{__('addpatient.pass')}}" autocomplete="off">
                                                <!-- <i class="zmdi zmdi1 zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibiltypass()" ></i> -->
                                                 <i class="zmdi eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibiltypass()" ></i>

                                                
                                              </div>
                                                <div class="form-group"  style="position:relative">
                                                            <label class="form-label"></label>
                                                <input class="form-control" type="password" name="psnt_confpassword" id="psnt_confpassword" placeholder="*{{__('addpatient.confpass')}}" autocomplete="off">
                                              <!--   <i class="zmdi zmdi1 zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty2()" ></i> -->
                                                <i class="zmdi eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty2()" ></i>

                                                </div>

                                                <!--  <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" type="text" name="psnt_insrnce_num" id="psnt_insrnce_num" placeholder="*Patient Insurance" autocomplete="off">
                                                </div> -->

                                                 <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" name="psnt_lat"  type="hidden" value="" id="psnt_lat" placeholder="*Latitude" autocomplete="off">
                                                </div>
                                                 <div class="form-group">
                                                            <label class="form-label"></label>
                                                <input class="form-control" name="psnt_long" type="hidden" value="" id="psnt_long" placeholder="*Longitude" autocomplete="off">
                                                </div>
                                                
                                                <div class="form-group"style="position:relative;">
                                                            <label class="form-label"></label>
                                                  
                                                
                                                <textarea class="form-control" name="psnt_address" id="psnt_address" placeholder="*{{__('addpatient.pat_address')}}" autocomplete="off"></textarea>
                                               <i  id="add_icon"  class="fa fa-map-marker" data-toggle="modal" data-target="#largeModal"></i>
                                                </div>

                                                 
                                                <div class="form-group">
                                                    <label class="form-label"></label>
                                                      <input class="form-control" type="text" name="psnt_qid_num" id="psnt_qid_no" maxlength="11" minlength="11" placeholder="*{{__('addpatient.qidno')}}" autocomplete="off">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label"></label>
                                                      <select class="form-control"  id="psnt_qid" name="psnt_hasins" onchange="getqid(this)" >
                                                      <option>Have Insurance?</option>
                                                      <option value="1">Yes</option>
                                                      <option value="0">No</option>
                                                      </select>
                                                </div>
                                               
                                                <div id="ins_val">
                                                <div class="form-group">
                                                    <label class="form-label"></label>
                                                      <input class="form-control" type="text" name="psnt_insrnce_num" id="psnt_insrnce_num" placeholder="{{__('addpatient.pat_ins')}}" autocomplete="off">
                                                </div>
                                                 <div class="file-input">
                                                      <input type="file" id="file" class="file"  name="file">
                                                      <label for="file" class="patFile">{{__('addpatient.upload')}} <img src="{{URL::asset('assets/images/brand/more.png')}}" id="imgfile" alt=""></label>
                                                      <p class="file-name"></p>
                                                </div>
                                                  </div> 
                                                 

                                                   

                                                <div class="form-group btndiv">
                                                 <a href="{{ url('patient_management') }}"  class="btn btn-danger btn-lg sbmt " data-dismiss="modal">
                                                {{__('addpatient.can')}}
                                                </a>    
                                           <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->
                                              <input type="submit" class="btn btn-primary btn-lg sbmt clrbtn" id="submit" name="submit" value="{{__('addpatient.sub')}}" >
                                                </div>
                                            </form>
                                         </div>
                                     
                                                </div>
                                                  

<!--                                                
                                        </div>
                                    </div> -->
                                    <!-- TABLE WRAPPER -->
                    </div>
                                <!-- SECTION WRAPPER -->
            </div>
                      
                        <!-- ROW-1 CLOSED -->   
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
                    <div class="row" id="map-canvas" class="" style="width:100%;height:300px;"></div>
                    <!-- style="width:700px;height:480px" -->
               </div>
            </div><!-- modal-body -->
            
        </div>
    </div><!-- MODAL DIALOG -->
</div>
<!-- LARGE MODAL CLOSED -->   
  
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
function getqid($this){
    if($this.value =='1'){
      $('#ins_val').show()
    }else{
       $('#ins_val').hide()
    }
}
</script>
<script>
function toggleVisibiltypass(){
  // alert('clicked1');
let togglePassword3 = document.querySelector("#togglePassword3");
        let password = document.querySelector("#psnt_password");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword3.classList.toggle("zmdi-eye");
      
}

const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
  // Get the selected file
  const [file] = e.target.files;
  console.log([file])
  // Get the file name and size
  const { name: fileName, size } = file;
  console.log(name,size,"data")
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
  console.log(fileNameAndSize)
  document.querySelector('.file-name').textContent = fileNameAndSize;
});
</script>
<script>
function toggleVisibilty2(){
  // alert('clicked2');
let togglePassword2 = document.querySelector("#togglePassword2");
let confpassword = document.querySelector("#psnt_confpassword");
  let type = confpassword.getAttribute("type") === "password" ? "text" : "password";
            confpassword.setAttribute("type", type);
            // toggle the icon
            togglePassword2.classList.toggle("zmdi-eye");
      
}

 
 
</script>

<script>


$(document).ready(function()
{
var base_path="http://3.220.132.29/medpro/"
var api_url="http://3.220.132.29:3000/api/";

 jQuery.validator.addMethod('validEmails',function(value)
 {
   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(value))
         {
          return false;
        }
        return true;
}, 'Please enter valid email address addpatient |  الرجاء إدخال عنوان بريد إلكتروني صالح.')


$("#pat_signup").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
        psnt_first_name: {
        required: true,
        //  lettersonly: true,
         validUserNameAddPat:true,
        // minlength: 3
      },
      psnt_last_name: {
        required: true,
        // lettersonly: true,
        validUserNameAddPat:true
        // minlength: 3
      },
      psnt_address: {
        required: true,
        
        // minlength: 3
      },
      psnt_email: {
         required: true,
         validEmails:true,
         // // customemail:true,
         //  // emailid:true,
        // email: true
      },
      psnt_qid_num:{
         required:true,
          minlength:11,
          number:true,
        // maxlength:11,
        // validQidNumber:true,
      },
      psnt_insrnce_num:{
        required:true,
        minlength:8
      },
     file:{
      required:true,
     },
     psnt_password: {
      required:true,
      minlength:8
     },
     psnt_confpassword: {
        required: true,
        minlength: 8,
        equalTo: "#psnt_password",
      },
    psnt_hasins:{
        required:true,
    }

     
    },


messages : {
        psnt_first_name: {
         required: "First Name field is Required | حقل الاسم الأول مطلوب",
        //  lettersonly:"Only Alphabetical Characters are allowed | يسمح فقط باستخدام الأحرف الأبجدية",
        // minlength: "First Name should be at least 3 characters"
      },
      psnt_last_name: {
          required: 'Last Name field is Required | حقل "الاسم الأخير" مطلوب',
           lettersonly:"Only Alphabetical Characters are allowed | يسمح فقط باستخدام الأحرف الأبجدية"
        // minlength: "Last Name should be at least 3 characters"
      },
      psnt_address: {
          required: "Address field is Required | حقل العنوان مطلوب",
        // minlength: "Last Name should be at least 3 characters"
      },
      psnt_email: {
         required: "Email field is Required | حقل البريد الإلكتروني مطلوب", 
         // email: "The email should be in the format: abc@domain.tld xyz.....| يجب أن يكون البريد الإلكتروني بالتنسيق: abc@domain.tld"
      },
      psnt_qid_num:{
        required:"QID is Required |الرقم الشخصي مطلوب",
        number:"QID accept only number |qid تقبل الرقم فقط",
        minlength:"QID should be of 11 characters | يجب أن يتكون QID من 11 حرفًا"

       
        // maxlength: "QID should be of 11 characters | يجب أن يتكون QID من 11 حرفًا"
      },
      psnt_insrnce_num:{
        required:"Insurance Number is Required |رقم التأمين مطلوب ",
        minlength: "Insurance Number should be at least 8 characters | يجب ألا يقل رقم التأمين عن 8 أحرف"
      },
      file:{
        required:"Insurance Image field is Required |  حقل صورة التأمين مطلوب"
     },
     psnt_password: {
      required:"Password field is Required | حقل كلمة المرور مطلوب",
      minlength:"Password should be of atleast 8 characters | يجب أن تتكون كلمة المرور من 8 أحرف على الأقل"
     },
     psnt_confpassword: {
        required: "Confirm Password field is Required | حقل تأكيد كلمة المرور مطلوب",
        minlength: "Password and Confirm password should be same |يجب أن تكون كلمة المرور وتأكيد كلمة المرور متطابقتين"
        // equalTo: "Password and Confirm password should be same"
      },
     psnt_hasins:{
        required:"Please choose your insurance"
     }

      // image:{
      //   required:"Insurance Image field is Required"
      // }
    }
});


$('#file').on('change',function(){
    var fakepath =$('#file').val();
    console.log(fakepath,"fakepath")
    var filename=fakepath.split("\\").pop();
    console.log(filename,"filename")
    if(filename){
      $(".file-name").html(filename);
      // $(".file-error").hide();
    }
});


// $('#pat_signup').on('submit',function (event) {
//     // alert($('psnt_qid_num').length);
//     // event.stopPropagation()
//      event.preventDefault();
    

//     /*formvalidation for signup form*/
//     var _token =document.querySelector('[name="_token"]').value;
//     var first_name = $('#psnt_first_name').val();
//     var last_name = $('#psnt_last_name').val();
//     var email = $('#psnt_email').val();
//     var qid_number = $('#psnt_qid_no').val()
//     var insurance_no =$('#psnt_insrnce_num').val();
//     var file =$('#file')[0].files[0];
//     var psnt_lat=$('#psnt_lat').val();
//     var psnt_long=$('#psnt_long').val(); 
//     var password = $('#psnt_password').val();
//     var confpassword =$('#psnt_confpassword').val();
//     var user_details=localStorage.getItem('user_det');
//     var details =JSON.parse(user_details);
//     // console.log(details,"dskf")
//     // var physician_id=  details._id;
//     var physician_id=  details._id;
//     var address=$('#psnt_address').val();
//     $('#physician_id').val(physician_id);
//     // console.log(physician_id);
//     // var address1{}=getCoordinates(address);

//     // alert(first_name.match("ab"),"your first name");
   
   
//    //  if(qid_number.length == 11)
//    //  {
//    //   console.log("qid_number",qid_number.length);
//    //    // event.preventDefault();
//    // //  // return false;
//    //   }

//    console.log({first:first_name,last:last_name,email:email,id:qid_number,insurance_no:insurance_no,f:file,lat:psnt_lat,long:psnt_long,p:password,cp:confpassword,add:address},"COnsoling data")

//     // if(first_name!="" && last_name !=="" && email!="" && insurance_no!="" && file!="" && address!="" && password!="" ){
//    if(first_name!="" && last_name !=="" && email!="" && address!="" && password!="" && qid_number.length == 11 && 
//    first_name.match("^[a-zA-Z .'()-]*$") && last_name.match("^[a-zA-Z .'()-]*$") 
//    // && insurance_no != "" && file!== undefined
//    )
//    {
       
//           var formData = {
//             physician_id:physician_id,
//             psnt_first_name:first_name,
//             psnt_last_name:last_name,
//             psnt_email:email,
//             psnt_password:password,
//             // psnt_insrnce_num:insurance_no,
//             psnt_address: address,
//             psnt_lat: psnt_lat,
//             psnt_long:psnt_long,
//             // file:file,
//             // psnt_insrnce_img:file,
//             psnt_qid_num:qid_number
//         }
// // console.log(formData,"data")
// console.log(formData)
//         // console.log(new FormData(this));
//     $.ajax({
//       type: "POST",
//       url: api_url+"addPatient",
//       data: new FormData(this),
//       contentType:false,
//       cache:false,
//       processData:false,
//     }).done(function (res) {
      
//       // console.log(res);
//       // return false;
      
//         if(res.status == true){
//           $(':input[type="submit"]').prop('disabled', true);

//           $('#message').html(res.message).addClass('alert alert-success');

//           let url = window.location.href;
//           let uri=url.split('/');
//           let lan=uri[uri.length-1];
          
//             if(lan=="ar"){
//               window.location.href =base_path +"patient_management/ar";
//             }
//             else{
//               window.location.href =base_path +"patient_management";
//             }
//         }

//         else if(res.orignalError.errors.psnt_hasins.stringValue == "\"Have Insurance?\"")
//         {
//             $('#message').html("Please choose insurance").addClass('alert alert-danger');
//         }
//         else
//         {
//            $('#message').html( res.message).addClass('alert alert-danger')
//         }
//     });
//    }
//    else{
//     //  $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
//    }

//    });





$('#pat_signup').on('submit',function (event) {
    // alert($('psnt_qid_num').length);
    // event.stopPropagation()
     event.preventDefault();
    

    /*formvalidation for signup form*/
    var _token =document.querySelector('[name="_token"]').value;
    var first_name = $('#psnt_first_name').val();
    var last_name = $('#psnt_last_name').val();
    var email = $('#psnt_email').val();
    var qid_number = $('#psnt_qid_no').val()
    var insurance_no =$('#psnt_insrnce_num').val();
    var file =$('#file')[0].files[0];
    var psnt_lat=$('#psnt_lat').val();
    var psnt_long=$('#psnt_long').val(); 
    var password = $('#psnt_password').val();
    var confpassword =$('#psnt_confpassword').val();
    var user_details=localStorage.getItem('user_det');
    var details =JSON.parse(user_details);
    // console.log(details,"dskf")
    // var physician_id=  details._id;
    var physician_id=  details._id;
    var address=$('#psnt_address').val();
    $('#physician_id').val(physician_id);
   
    // var address1{}=getCoordinates(address);

   //  if(qid_number.length == 11)
   //  {
   //   console.log("qid_number",qid_number.length);
   //    // event.preventDefault();
   // //  // return false;
   //   }

   
 if(first_name!="" && last_name !=="" && email!="" && address!="" && password!="" && qid_number.length == 11 && 
   first_name.match("^[a-zA-Z .'()-]*$") && last_name.match("^[a-zA-Z .'()-]*$") 
  )
   {
       
          var formData = {
            physician_id:physician_id,
            psnt_first_name:first_name,
            psnt_last_name:last_name,
            psnt_email:email,
            psnt_password:password,
            psnt_address: address,
            psnt_lat: psnt_lat,
            psnt_long:psnt_long,
            psnt_qid_num:qid_number
        }

    $.ajax({
      type: "POST",
      url: api_url+"addPatient",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) 
    {
      if(res.status == true)
      {
          $(':input[type="submit"]').prop('disabled', true);
          // $('message').html(res.message).remove()
          $('#message').html(res.message).removeClass('alert alert-danger')
          // alert("Inside true condition");
          $('#message').html(res.message).addClass('alert alert-success');

          let url = window.location.href;
          let uri=url.split('/');
          let lan=uri[uri.length-1];
          
            if(lan=="ar"){
              window.location.href =base_path +"patient_management/ar";
            }
            else{
              window.location.href =base_path +"patient_management";
            }
        } 
        else if (!res.status) 
        {
            if(res.orignalError) {
                if(res.orignalError.errors.psnt_hasins.value == "Have Insurance?") {
                    $('#message').html('Please choose insurance').addClass('alert alert-danger');
                      $("#psnt_qid").on("click", function() {
                     $('#message').html("Please Choose your Insurance").remove();
                     });
                }
            } else {
             $('#message').html(res.message).addClass('alert alert-danger')
        }
        }

    });
 }

else if (first_name!="" && last_name !=="" && email!="" && address!="" && password!="" && qid_number.length == 11 && 
   first_name.match("^[a-zA-Z .'()-]*$") && last_name.match("^[a-zA-Z .'()-]*$") 
   && insurance_no != "" && file!== undefined)
{
 var formData = {
            physician_id:physician_id,
            psnt_first_name:first_name,
            psnt_last_name:last_name,
            psnt_email:email,
            psnt_password:password,
            psnt_insrnce_num:insurance_no,
            psnt_address: address,
            psnt_lat: psnt_lat,
            psnt_long:psnt_long,
            psnt_insrnce_img:file,
            psnt_qid_num:qid_number
        }

    $.ajax({
      type: "POST",
      url: api_url+"addPatient",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) 
    {
      if(res.status == true){
          $(':input[type="submit"]').prop('disabled', true);

          $('#message').html(res.message).addClass('alert alert-success');

          let url = window.location.href;
          let uri=url.split('/');
          let lan=uri[uri.length-1];
          
            if(lan=="ar"){
              window.location.href = base_path +"patient_management/ar";
            }
            else{
              window.location.href = base_path +"patient_management";
            }
        }
        else{
            alert("with file")
             $('#message').html(res.message).addClass('alert alert-danger')
        }
})
}

// else if (res.orignalError.errors.psnt_hasins.value == "Have Insurance?")
// {
//     console.log("in else if condition")
//     $('#message').html("Please choose insurance").addClass('alert alert-danger');  
// }

// else
// {
//     console.log("in else condition")
//     //  $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
//       $('#message').html(res.message).addClass('alert alert-danger')
//    }

   });



});

</script>
<!-- <script> 
$('#add_icon').onclick(function () {
    console.log('here')
var map;
var marker;
var myLatlng = new google.maps.LatLng(20.268455824834792,85.84099235520011);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
function initialize(){
var mapOptions = {
zoom: 18,
center: myLatlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
map = new google.maps.Map(document.getElementById("map"), mapOptions);
marker = new google.maps.Marker({
map: map,
position: myLatlng,
draggable: true 
}); 

geocoder.geocode({'latLng': myLatlng }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
    console.log(results[0])
$('#latitude,#longitude').show();
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
     }
   }
});
google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});
google.maps.event.addDomListener(window, 'load', initialize);
}
});
</script> -->


@endsection




