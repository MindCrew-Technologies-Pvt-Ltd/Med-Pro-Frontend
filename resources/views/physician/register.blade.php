@extends('layouts.vertical-menu.master2')
@section('css')
<link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet">
<script src="{{ URL::asset('assets/js/formapi.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->
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
.form-label{
	font-size: 20px;
}

input{
	margin-top: 20px;
}
.wrap-login100{
	width: 420px;
	border-radius:10px;
}
.agreeDiv{
	margin-top: -40px;
	margin-bottom: 10px;
}

.file {
  opacity: 0;
  width: 0.1px;
  height: 0.1px;
  position: absolute;
}

.file-input label {
  display: block;
  position: relative;
  width: 323px;
  height: 45px;
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

input:hover + label,
input:focus + label {
  transform: scale(1.02);
}

#imgfile{
    padding-left: 110px; 
    padding-top:5px; 
    height:25px
}
.zmdi{
	position: absolute;
	float:right;
	right: 1rem;top: 1rem;

}
  .headtext{

  }
@media (max-width:450px) { 
.wrap-login100{
		width: 350px;
	}
	.zmdi{
	   position: absolute;
	   float:right;
	   right: 4rem;
	   top: 1rem;
    }
	#imgfile{
    padding-left: 70px; 
    padding-top:5px; 
    height:25px
}
	input{
		margin-left: -25px;
		width: 180px;
	}
	form{
		align-items: center;
	}
	#lic_doc{
		margin-right:10px;
	}
	.file-input label{
		margin-left: -25px;
	}
	input[type="checkbox"]{
		width: unset;
	}
	input[type=text] {
		margin-left:10px;
        height: 50px;
        width: 243px;
    }
	input[type=email] {
		margin-left:10px;
        height: 50px;
        width: 243px;
    }
	input[type=file] {
	   margin-left:10px;
       height: 50px;
       width: 243px;
    }
	input[type=password] {
	   margin-left:10px;
       height: 50px;
       width: 243px;
    }
	.file-input label{
		width: 243px;
		margin-left:10px;

	}
      .agreeDiv input[type=checkbox]{
        margin-top: 40px;
        margin-bottom: 20px;
	
      }
       .agreeDiv{
        width: 100%;
		margin-left: -10px;
		float:left;
		margin-bottom:20px;
		
      } 
	  .login100-form-btn{
		  width:243px;
		  padding-left:10px;
	  }
	  
	   .headtext{
		margin-top: -15px; 
		margin-right:70px;
	   }

		
  }

  @media (max-width:768px){}
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
					<div class="container-login100 text-center" style="text-align: center;">

						<div class="wrap-login100 p-5" >
							<!-- <div class="text-center">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img" alt="">
						    </div> -->
						    <svg width="30" height="110" viewBox="0 0 83 137" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -40px; text-align: center;">
<path d="M34.1916 108.445C43.0857 96.8096 46.5093 93.3981 46.5093 86.886C46.5093 77.9879 39.323 73.882 33.5053 69.7761C27.6876 65.6702 18.1031 62.2466 21.1876 56.4329C18.7894 54.7211 18.7894 54.7211 18.7894 54.7211L11.6031 63.6192C11.6031 63.6192 6.18509 69.441 6.4677 76.2801C6.81087 84.4959 10.2668 87.1848 17.4208 92.0214C29.0562 99.8941 34.5267 102.975 31.4503 106.394C34.1916 108.445 32.4798 107.076 34.1916 108.445ZM62.3959 83.7168L77.5115 64.2369C77.5115 64.2369 82.7599 58.6373 82.7599 48.1484C82.7599 37.6556 74.3664 31.3574 69.8164 28.2084C65.2664 25.0633 48.4795 13.5168 48.4795 13.5168C48.4795 13.5168 42.5326 10.3717 42.5326 5.82174C42.5326 2.32546 43.4894 1.74814 43.4894 1.74814L41.3941 0L28.1922 17.7155C28.1922 17.7155 22.9438 23.3112 22.9438 31.7047C22.9438 40.0981 26.7913 46.7435 30.9901 49.8925C35.1888 53.0376 54.0792 65.981 54.0792 65.981C54.0792 65.981 60.2804 70.5876 61.0717 76.1267C61.6289 79.9944 61.3503 80.5677 60.3006 82.3158C62.3959 83.7168 62.3959 83.7168 62.3959 83.7168ZM55.1329 136.427H25.4832L22.3826 124.025H0L3.10062 117.824H77.5155L80.6161 124.025H58.2335L55.1329 136.427Z" fill="#6BA5CD"/>
</svg>


							<form class="login100-form validate-form text-center w-85 ml-4" enctype="multipart/form-data"  id="signupform" method="post" >
								<!-- @csrf -->
							
								
									  <h4 class="ml-6 mb-4 headtext">Physician Registration</h4>
                                 <div class="text-center" id="message">
                                   
                                 </div>
								<div class="form-group mt-2">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="phy_first_name" id="first_name"placeholder="*First Name" >
									
									
								</div>
								
                                <div class="form-group">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="phy_last_name" id="last_name"placeholder="*Last Name" >
									
								</div>

                                <div class="form-group">
									<label class="form-label"></label>
									<input type="email" class="form-control" name="phy_email" id="email" placeholder="*Email" >
									
								</div>
                               <!--  <div class="row">

                                <div class="col-md-6"> -->
                                     <div class="form-group">
									<label class="form-label"></label>
									<input type="text" class="form-control" name="phy_licnse" id="licence_no"placeholder="*License number" >
									
								    </div>
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
                                 <input class="form-control" type="password" name="phy_password" id="password" placeholder="*Password" autocomplete="off">
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibiltypass()" ></i>
								</div>

								<div class="form-group"style="position:relative">
                                 <input class="form-control" type="password" name="confpass" id="confpassword" placeholder="*Confirm Password" autocomplete="off" > 
                                 <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye" onclick="toggleVisibilty2()" ></i>
                                <!-- <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "style="margin-left: 7.5rem ;position: absolute;bottom:0.5rem;cursor: pointer;color:'#4ec1ec'" onclick="toggleVisibilty2()" ></i> -->
								</div>
								<!-- <div class="form-group">
		                                    <label class="form-label"></label>
											<input class="form-control" type="password" name="confpass" id="confpassword" placeholder="*Confirm Password" autocomplete="off" > 
		                                      <div class="symbol-input100 eye2" onclick="toggleVisibilty2()">
											<i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye "></i>
										    </div>
								</div> -->
                                     <!-- <div class="form-group">
											
											<div class="custom-file">
												<input type="file"  class="custom-file-input" name="file" id="lic_doc" placeholder="*Upload License file" style="background-color: #4ec1ec!important;">
												<label class="custom-file-label float-left">Upload License Doc</label>
									        </div>
                                    </div> -->
                                    <!-- file -->
									<div class="file-input mt-4">
                                           <input type="file" id="file"  name="file" class="file">
                                           <label for="file">
                                             Upload License Doc<img src="{{URL::asset('assets/images/brand/more.png')}}" id="imgfile" alt="">
                                             <p class="file-name"></p>
                                           </label>
                                   </div>

                                 <div class="text-center agreeDiv" >
									<label class="text-dark mt-2">
										<input id="terms" name="terms" type="checkbox"> I Agree to the<a href="#" class="text-primary ml-1">Terms & conditions</a>
									</label>

								</div>

	



								<div class="container-login100-form-btn" style="margin-top: -25px;">
									<input class="login100-form-btn btn-primary" type="submit" id="submit" value="Submit" style="margin-top: -20px;">
									</input>
								</div>
								<div class="text-center pt-3">
									<p class="text-dark mb-0">Already have an account?<a href="{{url('/login')}}" class="text-primary ml-1">Login Here</a></p>
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
        let password = document.querySelector("#password");
   
     
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
