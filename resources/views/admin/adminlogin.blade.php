@extends('layouts.vertical-menu.master2')
@section('css')
<link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet">
<style>
.error{
	color: red;
	
}
.valid{
	color: black;
	
	
}

.zmdi{
	color: #4ec1ec;
	
}

.wrap-login100
{
width: 456px;
height:500px;
}

.login100-form-title{
	margin-bottom: -10px;
	margin-top: -10px;
    margin-left: 20px;

}
input[type=text] {
    border-radius: 6px;
    height: 50px;
    width: 361px;
	color: black;
} 
input[type=password] {
    border-radius: 6px;
    height: 50px;
    width: 361px;
	color: black;
	color: black;
	
}
#loginbtn{
	width: 361px;
	margin-left: -34px;
}
.container-login100-form-btn{
	margin-left: 38px;
	margin-top:10px;
}
.forgot{
	margin-right: -41px;
	margin-top: -8px;
}
.dont{
	margin-left:35px;
}
.login100-form{
	margin-left:15px;
}

.zmdi-eye-off{
	position: absolute;
	float:right;
	right: -1rem;
	top: 1.1rem;
}

.mhide{
	display: none;
}





@media only screen and (max-width: 480px) {
	.wrap-login100{

		width: 330px;
        height:500px;
}
input[type=text] {
    border-radius: 6px;
    height: 44px;
    width: 243px;
} 
input[type=password] {
    border-radius: 6px;
    height: 44px;
    width: 243px;
}
.forgot{
	margin-right: 20px;
}
.login100-form-title{
	margin-left: -16px;
	margin-top: -30px;
	letter-spacing: 1px;
}
.container-login100-form-btn{
	margin-left: 38px;
	margin-top:10px;
	width:220px;
}
.dont{
	margin-right:50px;
}
.zmdi-eye-off{
	position: absolute;
	float:right;
	right: 2.2rem;
	top: 1.1rem;

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
				<div class="">
					<div class="dropdown d-md-flex" id="flag" style="width:150px;
    float: right;top:-5rem;">
						<div class="us1">
				            
				              </div>
						<select class="form-control" onchange="selectlang(this)">
							<option>Language</option>
							<option value="en"><img src="{{URL::asset('assets/images/pngs/us.png')}}">English (EN)</option>
							<option value="ar"><img src="{{URL::asset('assets/images/pngs/ar.png')}}">Arabic (AR)</option>
						</select>
					</div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<!-- <div class="text-center">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img" alt="">
						</div> -->
					</div>
					<div class="container-login100">

						<div class="wrap-login100 p-6">
							<div class="text-center" id="message">
							
						    </div>
						    <svg width="53" height="137" viewBox="0 0 83 137" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M34.1916 108.445C43.0857 96.8096 46.5093 93.3981 46.5093 86.886C46.5093 77.9879 39.323 73.882 33.5053 69.7761C27.6876 65.6702 18.1031 62.2466 21.1876 56.4329C18.7894 54.7211 18.7894 54.7211 18.7894 54.7211L11.6031 63.6192C11.6031 63.6192 6.18509 69.441 6.4677 76.2801C6.81087 84.4959 10.2668 87.1848 17.4208 92.0214C29.0562 99.8941 34.5267 102.975 31.4503 106.394C34.1916 108.445 32.4798 107.076 34.1916 108.445ZM62.3959 83.7168L77.5115 64.2369C77.5115 64.2369 82.7599 58.6373 82.7599 48.1484C82.7599 37.6556 74.3664 31.3574 69.8164 28.2084C65.2664 25.0633 48.4795 13.5168 48.4795 13.5168C48.4795 13.5168 42.5326 10.3717 42.5326 5.82174C42.5326 2.32546 43.4894 1.74814 43.4894 1.74814L41.3941 0L28.1922 17.7155C28.1922 17.7155 22.9438 23.3112 22.9438 31.7047C22.9438 40.0981 26.7913 46.7435 30.9901 49.8925C35.1888 53.0376 54.0792 65.981 54.0792 65.981C54.0792 65.981 60.2804 70.5876 61.0717 76.1267C61.6289 79.9944 61.3503 80.5677 60.3006 82.3158C62.3959 83.7168 62.3959 83.7168 62.3959 83.7168ZM55.1329 136.427H25.4832L22.3826 124.025H0L3.10062 117.824H77.5155L80.6161 124.025H58.2335L55.1329 136.427Z" fill="#6BA5CD"/>
</svg>


							<form class="login100-form validate-form" id="admin_login" method="post">
								@csrf
								<span class="login100-form-title">
									{{__('sidebar.admin_login')}}
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="admin_email" id="admin_email" placeholder="{{__('login.phy_email')}}">
									<span class="focus-input100"></span>
									<!-- <span class="symbol-input100"> -->
										<i class="zmdi zmdi-email" aria-hidden="true" style="position: absolute;float:right;left: 1rem;top: 0.9rem;"></i>
									<!-- </span> -->
                                                                        <span></span>

								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required" style="position:relative; ">

									
                                 <input class="input100 mt-5" type="password" name="admin_password" id="admin_password" placeholder="{{__('login.phy_pass')}}" autocomplete="off">
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword" title="visible" data-original-title="zmdi zmdi-eye" onclick="toggleVisibilty()"  ></i>
								

								<!-- 	<input class="input100" type="password" name="pass" id="password" placeholder="Password">
                                    <div class="symbol-input100 eye" onclick="toggleVisibilty()">
									<i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword" title="visible" data-original-title="zmdi zmdi-eye "></i>
                                     </div> -->
									
									<span class="focus-input100">
										</span>
									<!-- <span class="symbol-input100"> -->
										<i class="zmdi zmdi-lock" aria-hidden="true" style="position: absolute;float:right;left: 1rem;top: 0.9rem;"></i>
									<!-- </span> -->
                                                                        <span></span>

									
									
								</div>
								<p class="text-red mhide" id="hidemm">Email or Password not correct</p>
								<!-- <div class="text-right pt-1">
									<p class="mb-0"><a href="{{url('/pharmacist_forgot_password')}}" class="text-primary ml-1 forgot">Forgot Password?</a></p>
								</div> -->
								<div class="container-login100-form-btn">
									<button  class="login100-form-btn btn-primary" id="loginbtn" type="submit" name="submit">
									{{__('login.phy_login')}}
									</button>
								</div>
								<!-- <div class="text-center pt-3">
									<p class="text-dark mb-0 dont">Don't have an account?<a href="{{url('pharmacist_register')}}" class="text-primary ml-1">Sign up</a></p>
								</div> -->
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
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
@endsection


<!-- Toggle visibility function   -->
<script>
 function toggleVisibilty(){
let togglePassword = document.querySelector("#togglePassword");
        let password = document.querySelector("#admin_password");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}
 
 
</script>
@section('js')
<script>

$(document).ready(function(){
	var api_url="http://3.220.132.29:3000/api/";
var base_path = "http://3.220.132.29/medpro/"; 

 $("#admin_login").validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      
      admin_email: {
         required: true,
        email: true
      },
      
     admin_password: {
      required:true,
     
     }
      
    },
    messages : {
     
      admin_email: {
        required: "Email field is Required",
      },

      admin_password: {
      required:"Password field is Required",
      
     },
    errorElement: "span",

   }
  });

$("#admin_login").submit(function (event) {
  	 event.preventDefault();

    var admin_email = $('#admin_email').val();
    var admin_password = $('#admin_password').val();

    var formData = {
    admin_email: $('#admin_email').val(),
    admin_password: $('#admin_password').val() ,
    };
 
    if(admin_email !="" &&  admin_password !=""){
    $.ajax({
      type: "POST",
      url: api_url+"adminLogin",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (res) {
      console.log(res.data);
      localStorage.setItem('admin_det', JSON.stringify(res.data));
      // return false;
        if(res.status == true){
        	
        	// $('#message').html(res.message).addClass('alert alert-success');
        	$('#message').html('Login successfully | تسجيل الدخول بنجاح').addClass('alert alert-success');

			let url = window.location.href;
            let uri=url.split('/');
			let lan=uri[uri.length-1];
			
			if(lan=="ar"){
				window.location.href=base_path+"admindashboard/ar";
			}
			else{
				window.location.href=base_path+"admindashboard";
			}
}
        else{
        	
        //    $('#message').html(res.message).addClass('alert alert-danger');
         $('#hidemm').html(res.message).removeClass('mhide');
         $(':input').focus(function(){
         $('.text-red').hide()
           })

		   

        }

  });
   
 }else{
  // $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
 }

 });




})
</script>
<script>
function selectlang($this){
	// alert('hi')
    var url = window.location.href;
     let uri=url.split('/');
     // console.log(uri)
     // return false;
   if(uri[6]|| (uri[5]=="en" || uri[5]=="ar")){
				    var newUrl = url.slice(0, url.lastIndexOf('/'));
				    if($this.value=="en"){
						window.location.href=newUrl+"/en";
					}else if($this.value=="ar"){
						window.location.href=newUrl+"/ar";
					}else{
						// window.location.href=window.location.href;
					}
   }else{

			        if($this.value=="en"){
					window.location.href=window.location.href+"/en";
				}else if($this.value=="ar"){
					window.location.href=window.location.href+"/ar";
				}else{
					// window.location.href=window.location.href;
				}
   }

	
}

	</script>
@endsection
