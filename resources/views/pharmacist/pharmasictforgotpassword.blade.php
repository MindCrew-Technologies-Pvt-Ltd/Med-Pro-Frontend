@extends('layouts.vertical-menu1.master2')
@section('css')
<link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet">
<style>

.wrap-login100{
		width: 456px;
        height: 550px;

	}
	.fotgottext{
		margin-top:-28px;
		color:#616161;
		margin-left:30px;
	}
	.logofor{
		margin-top:-10px;
		margin-top: -32px;
		margin-bottom:-30px;
	}
	input[type=text] {
    height: 50px;
    width: 360px;
	color: black;
	
    } 
	.loginbtn{
       margin-left:50px;
	}
	.container-login100-form-btn {
	width: 358px;
}
.login100-form-title{
	font-size: 22px;
    font-weight: 600;
	margin-left:27px;
}
.login100-form{
	align-items: center;
	text-align: center;
	margin-left:15px;
}
.fotgottext{
		margin-top:-28px;
		color:#616161;
		margin-left:30px;
	}
	.mhide{
	display: none;
}
 @-moz-document url-prefix() {
    .container-login100{
    	margin-top:4rem;
    }
 }
	@media only screen and (max-width: 820px){
	.container-login100-form-btn {
	     width: 340px;
	     margin-left:-40px;
   }
   
   .fotgottext{
		margin-top:-28px;
		color:#616161;
		margin-left:-18px;

	}
	.wrap-login100{
		width: 330px; 
		height:550px;

	}
	.container-login100-form-btn {
	width: 330px;
	margin-left:-35px;
   }
   
   .fotgottext{
		margin-top:-28px;
		color:#616161;
		margin-left:-18px;

	}
	input[type=text] {
    border-radius: 6px;
    height: 50px;
    width: 243px;

	
    } 
	.login100-form-btn{
		height: 50px;
        width: 243px;
		margin-left:-12px;
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
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<!-- <div class="text-center">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img" alt="">
						</div> -->
					</div>
					<div class="container-login100">

						<div class="wrap-login100 p-6">
							<div class="text-center" id="messagee">
							
						    </div>
						    <svg width="53" height="137" viewBox="0 0 83 137" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M34.1916 108.445C43.0857 96.8096 46.5093 93.3981 46.5093 86.886C46.5093 77.9879 39.323 73.882 33.5053 69.7761C27.6876 65.6702 18.1031 62.2466 21.1876 56.4329C18.7894 54.7211 18.7894 54.7211 18.7894 54.7211L11.6031 63.6192C11.6031 63.6192 6.18509 69.441 6.4677 76.2801C6.81087 84.4959 10.2668 87.1848 17.4208 92.0214C29.0562 99.8941 34.5267 102.975 31.4503 106.394C34.1916 108.445 32.4798 107.076 34.1916 108.445ZM62.3959 83.7168L77.5115 64.2369C77.5115 64.2369 82.7599 58.6373 82.7599 48.1484C82.7599 37.6556 74.3664 31.3574 69.8164 28.2084C65.2664 25.0633 48.4795 13.5168 48.4795 13.5168C48.4795 13.5168 42.5326 10.3717 42.5326 5.82174C42.5326 2.32546 43.4894 1.74814 43.4894 1.74814L41.3941 0L28.1922 17.7155C28.1922 17.7155 22.9438 23.3112 22.9438 31.7047C22.9438 40.0981 26.7913 46.7435 30.9901 49.8925C35.1888 53.0376 54.0792 65.981 54.0792 65.981C54.0792 65.981 60.2804 70.5876 61.0717 76.1267C61.6289 79.9944 61.3503 80.5677 60.3006 82.3158C62.3959 83.7168 62.3959 83.7168 62.3959 83.7168ZM55.1329 136.427H25.4832L22.3826 124.025H0L3.10062 117.824H77.5155L80.6161 124.025H58.2335L55.1329 136.427Z" fill="#6BA5CD"/>
</svg>


							<form class="login100-form validate-form" method="post" id="ph_forgot_pass" action="">
								@csrf
								<span class="login100-form-title fotgottext">
								{{__('pham_forgotpassword.pham_forgotpass')}}
								</span>
								<div class="text-center fotgottext">
							     <p>{{__('pham_forgotpassword.pham_reg_email')}}</p>
						        </div> 
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="pham_email" id="pham_email" placeholder="{{__('pham_forgotpassword.pham_email')}}">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" style="color:#7ec1ec;" aria-hidden="true"></i>
									</span>
								</div>
								<p class="text-red mhide" id="hidemm">Email or Password not correct</p>

								<div class="container-login100-form-btn">
									<input class="login100-form-btn btn-primary" name="submit" type="submit" value="{{__('pham_forgotpassword.pham_continue')}}">
										
								</div>
								<div class="text-center pt-3">

									<p class="text-dark mb-0"><a href="{{url('pharmacist_Login')}}" class="text-primary ml-1">{{__('pham_forgotpassword.pham_btl')}}</a></p>
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
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
@endsection

@section('js')
<script>

$(document).ready(function(){
	$("#ph_forgot_pass").validate({
     errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      
		pham_email: {
        //  required: true,
        // email: true
      },
      
    },
    messages : {

      pham_name: {
        required: "Email field is Required",
		email: "Please enter valid email"
      },


    }
  });
	/*api call for forgot password*/
var api_url="http://3.220.132.29:3000/api/";
var base_path = "http://3.220.132.29/medpro/"; 

  $("#ph_forgot_pass").submit(function (event) {
      event.preventDefault();
      var formData = {
        pham_email : $('#pham_email').val(),
      };
if(pham_email!=""){
	$.ajax({
      type: "POST",
      url: api_url+"phamForgetPassword",
      data: formData,
      dataType: "json",
      encode: true,
      }).done(function (res) {
      if(res.status == true){
          // $('#message').html(res.message).addClass('alert alert-success');
          window.location.href=base_path+"pharmacist_forgot_password02";
        }else{
        //    $('#messagee').html(res.message).addClass('alert alert-danger');
		   $('#hidemm').html(res.message).removeClass('mhide');

        }

    });
}else{

}
    

  });
  
});
</script>
@endsection
