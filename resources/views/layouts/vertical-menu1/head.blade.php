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
          
        window.onunload = function () { null };

        </script>
        <script>
//        function checklogin(){
//        	let user_data=localStorage.getItem('user_det');
//          var obj = JSON.parse(user_data);
//          var username=obj.phy_first_name;
//           var base_path = "http://3.220.132.29/medpro/"; 
//              if( typeof username === 'undefined' || username === null ){
 
        
             
//   	 	window.location.href=base_path+'login'; 
//        }
//    }
//         setInterval(checklogin(),100);
  	         

        </script>
		<!-- BOOTSTRAP CSS -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/medprocustom.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('assets/css/custome.css')}}" rel="stylesheet"/>

		<!--C3 CHARTS CSS -->
		<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{URL::asset('assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />
        
        <!-- sweet alert -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
        <!-- font awesome   -->
        <script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>

		<!--- FONT-ICONS CSS -->
		<link href="{{URL::asset('assets/plugins/icons/icons.css')}}" rel="stylesheet"/>

        @yield('css')

        <!-- SIDE-MENU CSS -->
        <link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{URL::asset('assets/colors/color1.css')}}" />
    

        <script>
               //logout api calling

      // $( document ).ready(function() {
	// $( "#logout" ).click(function() {

function logoutt(){
            
            var api_url="http://3.220.132.29:3000/api/";
            var base_path = "http://3.220.132.29/medpro/"; 
            var pham_details=localStorage.getItem('pharm_det');
            var details =JSON.parse(pham_details);
            var pharmacist_id=details._id;
            // alert(pharmacist_id);
            // var _token =document.querySelector('[name="_token"]').value;
            var formData = {
                phamaciest_id:pharmacist_id,
            };
           
 
 $.ajax({
        url: api_url+"PhamLogout",
        type: "POST",
        dataType: 'json', 
        data:{
            phamaciest_id:pharmacist_id,
        }
 }).done(function (res) {
        //  console.log("response for logout successfully",res);
        //  alert('response',res)
        //  return false;
 
 if(res.status == true){
       swal({  
         title: "Log Out Successfully!",  
         type: "success" ,
         buttons: false,
         showCancelButton: false,
         showConfirmButton: false , 
         closeOnCancel: false  ,
       });  
        $('#message').html(res.message).addClass('alert alert-success');
        localStorage.clear();
        setTimeout(window.location.href= base_path + "pharmacist_Login",2000);
 
 }else{
         swal("Oops!", "Something went wrong, you should logout again!", "error");  
         $('#message').html(res.message).addClass('alert alert-danger');
      }
 });
 // });
 }
 
 // });
        </script>
  <script>
  	// function logout(){
  	// 	let user_data=localStorage.getItem('user_det');
    //      var obj = JSON.parse(user_data);
    //      var username=obj.phy_first_name;
    //      console.log(typeof(username))
  	//  var base_path = "http://3.220.132.29/medpro/"; 
  	//  if( typeof username === 'undefined' || username === null ){
    // // Do stuff
 
             
  	//  	window.location.href=base_path+'pharmacist_Login'; }
  	// }
    //  setTimeout("logout()",0);
      
    //    let user_dat =localStorage.getItem('user_det');
    //     var user1       =JSON.parse(user_dat);
    //    //console.log(user1._id);
        
    //    //console.log(user_dat.length)
    //    if (user1._id!==null) {

    //    }else{
    //     	window.location.href=base_path+'/login' ;
    //    	//return false;
    //    }





   
</script>