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
 input:focus {
    color: black;
}
input{
    color: #ff0000;
}
.wrap-login100{
     width: 28.5rem;
     height:34.375rem;
	/* width: 456px;
	 height:550px;*/
	 margin-top: 5%;
}
.zmdi-eye-off{
	position: absolute;
	float:right;
	right: -1rem;
	top: 1.1rem;

}
.login100-form-title{
	margin-bottom: -20px;
	margin-top: -26px;
    margin-left: 20px;

}
input[type=text] {
    border-radius: 6px;
    height: 50px;
    width: 361px;
} 
input[type=password] {
    border-radius: 6px;
    height: 50px;
    width: 361px;
	
}
.forgot{
	margin-right: -20px;
	margin-top: -8px;
}
#loginbtn{
	width: 361px;
	margin-left: -34px;
}
.container-login100-form-btn{
	margin-left: 38px;
	margin-top:10px;
}
.dont{
	margin-left:35px;
}
.hidep{
	display: none;
	
}
#hidepp{
	font-size: 15px;
	text-align: center;
	align-items: center;
	margin-left: 50px;
}
  @media only screen and (min-width: 412px){
      .dont{
		margin: 0 auto;
		
	    }
	 }
@media only screen and (max-width: 990px){
	.zmdi-eye{
		    position: absolute;
            top: 1rem;
            right: 4rem;
	}
	.zmdi-eye-off{
           right: 4rem;

    }
    .forgot {
    margin-right: 27px;
    }
    #loginbtn {
    margin-left: -104px;
    }

}

@media only screen and (max-width: 915px){
	.zmdi-eye{
		    position: absolute;
            top: 1rem;
            right: 4rem;
	}
	.zmdi-eye-off{
           right: 4rem;
    }
    .forgot {
    margin-right: 27px;
    }
    #loginbtn {
    margin-left: -104px;
    }

}

@media only screen and (max-width: 820px){
#loginbtn {
   width: 354px;
   margin-left: -103px;
   }
.forgot {
   margin-right: 32px;
}
.zmdi-eye-off{
   right: 4rem;
}
.dont{
		/*margin-right: -27px;*/
		margin: 0 auto;
	}

}


@media only screen and (max-width: 480px) {
	#loginbtn {
                       width: 354px;
                       margin-left: -37px;
                       }
        	
        	.wrap-login100{
        
        width: 330px;
         height:500px;
        }
        form{
        	align-items: center;
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
        .btn-primary{
        	width: 234px;
        	margin-right: 15px;
        }
        .zmdi-eye-off{
        	position: absolute;
        	float:right;
        	right: 2.3rem;
        	top: 0.9rem;
        
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
        	/*margin-right:50px;*/
        	margin: 0 auto;
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
			<!-- <div class="page" style="position:relative;">
				<div class="dropdown d-md-flex" id="flag">
			        <select class="form-control" onchange="selectlang(this)">
			            <option>Sel</option>
			            <option value="en"><img src="{{URL::asset('assets/images/pngs/us.png')}}">En</option>
			            <option value="ar"><img src="{{URL::asset('assets/images/pngs/ar.png')}}">Ar</option>
			        </select>
			    </div> -->

				<div class="">
				    <!-- CONTAINER OPEN -->
					<!-- <div class="col col-login mx-auto">
						
					</div> -->
					<div class="container-login100">

						<div class="wrap-login100 p-6" >
							<div class="text-center" id="message">
							
						    </div>
												    <svg  id="svg_img" width="53" height="137" viewBox="0 0 83 137" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M34.1916 108.445C43.0857 96.8096 46.5093 93.3981 46.5093 86.886C46.5093 77.9879 39.323 73.882 33.5053 69.7761C27.6876 65.6702 18.1031 62.2466 21.1876 56.4329C18.7894 54.7211 18.7894 54.7211 18.7894 54.7211L11.6031 63.6192C11.6031 63.6192 6.18509 69.441 6.4677 76.2801C6.81087 84.4959 10.2668 87.1848 17.4208 92.0214C29.0562 99.8941 34.5267 102.975 31.4503 106.394C34.1916 108.445 32.4798 107.076 34.1916 108.445ZM62.3959 83.7168L77.5115 64.2369C77.5115 64.2369 82.7599 58.6373 82.7599 48.1484C82.7599 37.6556 74.3664 31.3574 69.8164 28.2084C65.2664 25.0633 48.4795 13.5168 48.4795 13.5168C48.4795 13.5168 42.5326 10.3717 42.5326 5.82174C42.5326 2.32546 43.4894 1.74814 43.4894 1.74814L41.3941 0L28.1922 17.7155C28.1922 17.7155 22.9438 23.3112 22.9438 31.7047C22.9438 40.0981 26.7913 46.7435 30.9901 49.8925C35.1888 53.0376 54.0792 65.981 54.0792 65.981C54.0792 65.981 60.2804 70.5876 61.0717 76.1267C61.6289 79.9944 61.3503 80.5677 60.3006 82.3158C62.3959 83.7168 62.3959 83.7168 62.3959 83.7168ZM55.1329 136.427H25.4832L22.3826 124.025H0L3.10062 117.824H77.5155L80.6161 124.025H58.2335L55.1329 136.427Z" fill="#6BA5CD"/>
						</svg>


							<form class="login100-form validate-form ml-4 form-group" id="loginform">
								<span class="login100-form-title">
									{{__('login.phy_login')}}
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="email" id="email" placeholder="{{__('login.phy_email')}}">
									<span class="focus-input100"></span>
									<!-- <span class="symbol-input100" > -->
										<i class="zmdi zmdi-email" aria-hidden="true" style="position: absolute;float:right;left: 1rem;top: 0.9rem;"></i>
									<!-- </span> -->
									<span></span>

								</div>
								<div class="wrap-input100 validate-input mt-5" data-validate = "Password is required" style="position:relative; ">

									
                                 <input class="input100" type="password" name="pass" id="password" placeholder="{{__('login.phy_pass')}}" autocomplete="off">
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty()"></i>
								

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
								<p class="text-red hidep" id="hidepp">Email or Password is not correct</p>

								<div class="text-right pt-1 forgot">
									<p class="mb-0"><a href="{{url('/forgot_password')}}" class="text-primary ml-1 forgot">{{__('login.phy_forgot')}}</a></p>
								</div>
								<div class="container-login100-form-btn">
									<button  class="login100-form-btn btn-primary" id="loginbtn" type="submit" name="submit">
										{{__('login.phy_login')}}
									</button>
								</div>
								<div class="text-center pt-3 dont">
									<p class="text-dark mb-0">{{__('login.phy_dont')}}<a href="{{url('register')}}" class="text-primary ml-1">{{__('login.phy_signup')}}</a></p>
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


<!-- Toggle visibility function   -->
<script>
 function toggleVisibilty(){
let togglePassword = document.querySelector("#togglePassword");
        let password = document.querySelector("#password");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}
 
 
</script>

@section('js')
@endsection
