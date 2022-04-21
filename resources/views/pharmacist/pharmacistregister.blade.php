@extends('layouts.vertical-menu1.master2')
@section('css')
<link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet">
<script src="{{ URL::asset('assets/js/formapi.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
 <style>
	
.error{
	color: red;
	
}
.valid{
	color: green;
	
}


.zmdi {
	color: #4ec1ec;
	
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
									Pharmacist Registration
								</span>
                                 <div class="text-center" id="message">
                                   
                                 </div>
								<div class="form-group">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="pham_name" id="pham_name"placeholder="*Pharmacy Name" >
									
									
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
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye" style="position: absolute;float:right;right: 1rem;top: 0.5rem;" onclick="toggleVisibiltypass()" ></i>
								</div>

								<div class="form-group"style="position:relative">
                                 <input class="form-control" type="password" name="confpass" id="confpassword" placeholder="*Confirm Password" autocomplete="off" > 
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "style=";position: absolute;float:right;right: 1rem;top: 0.5rem;" onclick="toggleVisibilty2()" ></i>
                                <!-- <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "style="margin-left: 7.5rem ;position: absolute;bottom:0.5rem;cursor: pointer;color:'#4ec1ec'" onclick="toggleVisibilty2()" ></i> -->
								</div>
								<!-- <div class="form-group">
		                                    <label class="form-label"></label>
											<input class="form-control" type="password" name="confpass" id="confpassword" placeholder="*Confirm Password" autocomplete="off" > 
		                                      <div class="symbol-input100 eye2" onclick="toggleVisibilty2()">
											<i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "></i>
										    </div>
								</div> -->
                                  <div class="form-group">
                                      <textarea class="form-control" name="pham_address" id="pham_address" rows="3" placeholder="Address"></textarea>
                                  </div>

                                   <div class="form-group">
                                        <label class="form-label"></label>
                                       <input class="form-control" name="pham_lat"  type="hidden" value="43.3444" id="pham_lat" placeholder="*Latitude" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                                <label class="form-label"></label>
                                        <input class="form-control" name="pham_long" type="hidden" value="43.3444" id="pham_long" placeholder="*Longitude" autocomplete="off">
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
											  <div class="custom-file">
											    	<input type="file"  class="custom-file-input mt-3" name="file" id="reg_doc" placeholder="* Registration Number" >
											    	<label class="custom-file-label">Upload reg.</label>
											 </div>
							          <!--   </div> -->
                                      </div>
                                 <!--  </div> -->
                                    
                                    

                                 <div class="text-center pt-3">
									<p class="text-dark mb-0"><input id="terms" name="terms" type="checkbox"> Agree the<a href="#" class="text-primary ml-1">Terms and policy</a></p>
								</div>



								<div class="container-login100-form-btn">
									<input class="login100-form-btn btn-primary" type="submit" id="submit" value="Submit">
								</div>
								<div class="text-center pt-3">
									<p class="text-dark mb-0">Already have an account?<a href="{{url('/pharmacist_Login')}}" class="text-primary ml-1">Login Here</a></p>
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
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      pham_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
       pham_first_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
       pham_last_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      pham_email: {
         required: true,
        email: true
      },
      pham_registration_num:{
        required:true,
        minlength:8
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
        required: "Name field is Required",
        lettersonly: "Only Alphabetical Characters are allowed",
        // minlength: 3
      },
      phy_first_name: {
         required: "First Name field is Required",
         lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "First Name should be at least 3 characters"
      },
      phy_last_name: {
          required: "Last Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "Last Name should be at least 3 characters"
      },
      phy_email: {
        required: "Email field is Required",
        email: "The email should be in the format: abc@domain.tld"
      },

     pham_registration_num:{
        required:"License Number field is Required",
        minlength: "Licence Number should be at least 8 characters"
      },
      file:{
        required:"License doc is Required",
     },
      pham_password: {
      required:"Password field is Required",
      minlength:"Password should be of atleast 8 characters"
     },
     confpass: {
        required: "Confirm Password field is Required",
        minlength: "Password and Confirm password should be same",
        // equalTo: "Password and Confirm password should be same"
      },
      terms:{
        required:"<p>Please Agree The Terms and Policy<p>"
      }


    }
  });


       $('#pharma_signup').submit(function (event) {
    event.preventDefault();

 alert('here')

    /*formvalidation for signup form*/
    var pham_name =$('pham_name').val();
    var pham_first_name = $('#pham_first_name').val();
    var pham_last_name = $('#pham_last_name').val();
    var email = $('#pham_email').val();
    var pham_regn =$('#pham_registration_num').val();
    var regdoc =$('regdoc').val();
    var password = $('#pham_password').val();
    var confpassword =$('#confpassword').val();
   
      

    // }
    //  formData.append('phy_licnse_file', $('input[type=file]')[0].files[0]);  
    // console.log(formData);
    // return false;
    
    if(pham_name!="" && pham_first_name!="" && pham_last_name !=="" && email!="" && pham_regn!="" && regdoc!="" && password!="" ){
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
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path+"pharmacist_Login";
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
   }else{
     // $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });





})
  
</script>
<!-- <script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confpassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match. Please Confirm Your Password");
                return false;
            }
            return true;
        });
    });

	
</script> -->
<!-- <script>
	$(document).ready(function() {
$("#signupform").validate({
rules: {
	first_name : {
    required: true,
    minlength: 3
 },
 last_name: {
 required: true,
    min: 3
    },
    email: {
    required: true,
    email: true
    },
    licence_no: {
    required: true,
    number: true

    },
    lic_doc : {
    require: true,
},

}
});
});
</script> -->

@endsection
