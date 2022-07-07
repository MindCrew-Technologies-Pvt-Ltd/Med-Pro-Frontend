		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/images/brand/favicon.ico')}}" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

		<!-- TITLE -->
		<title>MedPro</title>

		<script type="text/javascript">
		  function preventBack() {
		    window.history.forward();
		  }

		  setTimeout("preventBack()", 0);

		  window.onunload = function() {
		    null
		  };
		</script>
	
		<!-- BOOTSTRAP CSS -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<?php if(App::getLocale()=="en"){ ?>
		<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/dark-style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet" />
		<?php }else{ ?>
		
		<link href="{{URL::asset('assets/css/css-rtl/style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/css-rtl/skin-modes.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/css-rtl/dark-style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/css-rtl/sidemenu.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/rtl.css')}}" rel="stylesheet" />
		<?php } ?>
		<!-- <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" /> -->
		<link href="{{URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet" />
		<!-- <link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/dark-style.css')}}" rel="stylesheet" /> -->

		<!--C3 CHARTS CSS -->
		<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
		<!-- sweet alert  -->
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
		</link>


		<!-- P-scroll bar css-->
		<link href="{{URL::asset('assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{URL::asset('assets/plugins/icons/icons.css')}}" rel="stylesheet" />

		@yield('css')

		<!-- SIDE-MENU CSS -->
		<!-- <link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet" /> -->

		<!-- SIDEBAR CSS -->
		<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet" />

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{URL::asset('assets/colors/color1.css')}}" />

		<script>
		  function signout1() {

		    var api_url = "http://3.220.132.29:3000/api/";
		    var base_path = "http://3.220.132.29/medpro/";
		    var admin_details = localStorage.getItem('admin_det');
		   
		    var details1 = JSON.parse(admin_details);
			// console.log(details1)
		    var admin_id = details1._id;
		   
		    var formData = {
		      admin_id: admin_id,
		    };


		    $.ajax({
		      url: api_url + "adminLogout",
		      type: "POST",
		      dataType: 'json',
		      data: {
		        admin_id: admin_id,
		      }
		    }).done(function(res) {
		      

		      if (res.status == true) {
		        swal({
		          title: "Log Out Successfully!",
		          type: "success",
		          buttons: false,
		          showCancelButton: false,
		          showConfirmButton: false,
		          closeOnCancel: false,
		        });
		        $('#message').html(res.message).addClass('alert alert-success');
		        localStorage.clear();
		        setTimeout(window.location.href = base_path + "admin_login", 1000);

		      } else {
		        swal("Oops!", "Something went wrong, you should logout again!", "error");
		        $('#message').html(res.message).addClass('alert alert-danger');
		      }
		    });
		   
		  }

		  
		</script>
		</script>
