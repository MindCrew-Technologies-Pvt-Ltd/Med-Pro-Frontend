@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{URL::asset('assets/css/phy.css')}}" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- map api script called here -->
 <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB9stNP2UYOkJCJkR2CfnabPiNP6g08UH8"></script>
  <!-- //AIzaSyB-y0dbXb_sEdeGTzo1ahCkXPAS_KGg19E -->
  <script>
   var searchInput = 'psnt_address';

$(document).ready(function () {
    
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
    });
});
$(document).on('change', '#'+searchInput, function () {
    document.getElementById('psnt_lat').innerHTML = '';
    document.getElementById('psnt_long').innerHTML = '';
    
    document.getElementById('psnt_lat').innerHTML = '';
    document.getElementById('psnt_long').innerHTML = '';
});
  </script>


<style>
  
</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                       
                            <div>
                                <h1 class="dashboard page-title">Patient Management</h1>
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
                                   
                                        <h3 class="card-title viewp">Add Patient</h3>
                                        
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
                                                <input type="text" class="form-control" name="psnt_first_name" id="psnt_first_name"placeholder="*First Name">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="text" class="form-control" name="psnt_last_name" id="psnt_last_name"placeholder="*Last Name">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"></label>
                                                <input type="email" class="form-control" name="psnt_email" id="psnt_email" placeholder="*Email">
                                                
                                            </div>
                                             <div class="form-group" style="position:relative">
                                                        <label class="form-label"></label>
                                                <input class="form-control" type="password" name="psnt_password" id="psnt_password" placeholder="*Password" autocomplete="off">
                                                <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibiltypass()" ></i>

                                                
                                              </div>
                                                <div class="form-group"  style="position:relative">
                                                            <label class="form-label"></label>
                                                <input class="form-control" type="password" name="psnt_confpassword" id="psnt_confpassword" placeholder="*Confirm Password" autocomplete="off">
                                                <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty2()" ></i>

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
                                                
                                                <div class="form-group">
                                                            <label class="form-label"></label>
                                                <textarea class="form-control" name="psnt_address" id="psnt_address" placeholder="*Patient Address" autocomplete="off"></textarea>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label class="form-label"></label>
                                                      <input class="form-control" type="text" name="psnt_insrnce_num" id="psnt_insrnce_num" placeholder="Patient Insurance" autocomplete="off">
                                                </div>
                                                 <div class="file-input">
                                                      <input type="file" id="file" class="file" name="file">
                                                      <label for="file">Upload Insurance Image <img src="{{URL::asset('assets/images/brand/more.png')}}" id="imgfile" alt=""></label>
                                                      <p class="file-name"></p>
                                                </div>
                                                   
                                                 


                                                <div class="form-group btndiv">
                                                 <a href="{{ url('patient_management') }}"  class="btn btn-danger btn-lg sbmt " data-dismiss="modal">
                                                 Cancel
                                                </a>    
                                           <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->
                                              <input type="submit" class="btn btn-primary btn-lg sbmt clrbtn" id="submit" name="submit" value="Submit" >
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
  // Get the file name and size
  const { name: fileName, size } = file;
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
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
    var base_path="http://3.220.132.29/medpro/"
    var api_url="http://3.220.132.29:3000/api/";

    
    $("#pat_signup").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
        psnt_first_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      psnt_last_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      psnt_address: {
        required: true,
        
        // minlength: 3
      },
      psnt_email: {
         required: true,
        email: true
      },
    //   psnt_insrnce_num:{
    //     required:true,
    //     minlength:8
    //   },
    //  file:{
    //   required:true,
    //  },
     psnt_password: {
      required:true,
      minlength:8
     },
     psnt_confpassword: {
        required: true,
        minlength: 8,
        equalTo: "#psnt_password",
      },
    
    },
    messages : {
        psnt_first_name: {
         required: "First Name field is Required",
         lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "First Name should be at least 3 characters"
      },
      psnt_last_name: {
          required: "Last Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "Last Name should be at least 3 characters"
      },
      psnt_address: {
          required: "Address field is Required",
        // minlength: "Last Name should be at least 3 characters"
      },
      psnt_email: {
        required: "Email field is Required",
        email: "The email should be in the format: abc@domain.tld"
      },

    //   psnt_insrnce_num:{
    //     required:"Insurance Number is Required",
    //     minlength: "Insurance Number should be at least 8 characters"
    //   },
    //   file:{
    //     required:"Insurance document is Required",
    //  },
     psnt_password: {
      required:"Password field is Required",
      minlength:"Password should be of atleast 8 characters"
     },
     psnt_confpassword: {
        required: "Confirm Password field is Required",
        minlength: "Password and Confirm password should be same",
        // equalTo: "Password and Confirm password should be same"
      },
     
    }
  });


 $('#pat_signup').on('submit',function (event) {
    event.preventDefault();

   
    /*formvalidation for signup form*/
    var _token =document.querySelector('[name="_token"]').value;

    var first_name = $('#psnt_first_name').val();
    var last_name = $('#psnt_last_name').val();
    var email = $('#psnt_email').val();
     var insurance_no =$('#psnt_insrnce_num').val();
    var file =$('#file')[0].files[0];
    var psnt_lat=$('#psnt_lat').val();
    var psnt_long=$('#psnt_long').val(); 
    var password = $('#psnt_password').val();
    var confpassword =$('#psnt_confpassword').val();
    var user_details=localStorage.getItem('user_det');
    var details =JSON.parse(user_details);
    var physician_id=  details._id;
    var address=$('#psnt_address').val();
    $('#physician_id').val(physician_id);
    console.log(physician_id);
    // var address1{}=getCoordinates(address);
   
    // if(first_name!="" && last_name !=="" && email!="" && insurance_no!="" && file!="" && address!="" && password!="" ){
    if(first_name!="" && last_name !=="" && email!="" && address!="" && password!="" ){
    
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
            file:file,
        }


        console.log(formData);
    $.ajax({
      type: "POST",
      url: api_url+"addPatient",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) {
     //    alert('done');
  
      // console.log(res);
      // return false;
      
        if(res.status == true){
          $(':input[type="submit"]').prop('disabled', true);

          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"patient_management";
        }else{
          //  $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
   }else{
    //  $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });


</script>


@endsection




