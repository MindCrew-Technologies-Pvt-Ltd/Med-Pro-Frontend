<!DOCTYPE html>
<html>
<head>
	<title>Med Pro Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="{{URL::asset('assets/css/landing.css')}}" rel="stylesheet"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{URL::asset('assets/images/landing/wave.png')}}">
	<div class="container">
		<div class="img">
			<img src="{{URL::asset('assets/images/landing/bg.svg')}}">
		</div>
		<div class="login-content">
			<form action="index.html">

                
              

                   {{-- <div class="dropdown">
                    
                    <button class="dropbtn">Pharmacist</button>
                    <div class="dropdown-content">
                      <a href="{{url('pharmacist_Login')}}">Login</a>
                      <a href="{{url('pharmacist_register')}}">Register</a>
                    </div>
                  </div>

                  <div class="dropdown">
                    <button class="dropbtn">Physician</button>
                    <div class="dropdown-content">
                      <a href="{{url('login')}}">Login</a>
                      <a href="{{url('register')}}">Register</a>
                    </div>
                  </div> --}}

                <h4 class="log">Login As</h4>

				<img src="{{URL::asset('assets/images/landing/avatar.svg')}}">
				
                <a href="{{url('pharmacist_Login')}}" class="btn">Login As Pharmacist</a>
                <a href="{{url('login')}}" class="btn">Login As Physician</a>
            </form>
        </div>
    </div>
    {{-- <script type="text/javascript" src="js/main.js"></script> --}}
</body>
<link href="{{URL::asset('assets/js/landing.js')}}" rel="stylesheet"/>

</html>

 
        {{-- <script src="js/carousel.js"></script> --}}

 