<?php $locale = Session::get('locale'); ?>
<style>
		.dropdown-icon {
          color: #495057!important;
		   }
		   /*.us1{
		   	    margin-left: -56px;
		   }*/
		   
	 #flag{
     position: relative!important;
    /*left: -96rem!important;*/
    height: 30px;
    /*width: 117px;*/
    width: 141px;
   /* right: -16rem;*/
 40

}

.btn-success, .btn-success:hover, .btn-success:active
{
				background-color: transparent !important;
				border: none !important;
				min-width: 1rem;
               text-align: right;
			}

.btn-success:focus,.btn-success
               {
				box-shadow: none !important;
			    }
			    .dropdown-toggle:after{
			    	display: none;
			    }

button{
	border: transparent;
	background-color: transparent;
}



</style>
<!-- /Notification -->
							<div class="d-flex  ml-auto header-right-icons header-search-icon">
								<div class="dropdown d-sm-flex">
									<!-- <a href="#" class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a> -->
									<!-- <div class="dropdown-menu header-search dropdown-menu-left">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control " placeholder="Search....">
											<div class="input-group-append ">
												<button type="button" class="btn btn-primary ">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div> -->
								</div>
								
								<!-- SEARCH -->


								<!-- <div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-maximize fullscreen-button"></i>
									</a>
								</div> -->
				

								<!-- FULL-SCREEN -->
								<!-- <div class="dropdown d-md-flex notifications"> -->
									<!-- <a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="nav-unread badge badge-success badge-pill">2</span>
									</a> -->
									<!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="notifications-menu">
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="fs-16 text-success mr-3">
													<i class="fa fa-thumbs-o-up"></i>
												</div>
												<div class="">
													<strong>Someone likes our posts.</strong>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="fs-16 text-primary mr-3">
													<i class="fa fa-commenting-o"></i>
												</div>
												<div class="">
													<strong>3 New Comments.</strong>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="fs-16 text-danger mr-3">
													<i class="fa fa-cogs"></i>
												</div>
												<div class="">
													<strong>Server Rebooted</strong>
												</div>
											</a>
										</div>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div> -->
								<!-- </div> -->
								<!-- NOTIFICATIONS -->
								 	<!-- <div class="dropdown d-md-flex message"> -->
									<!-- <a class="nav-link icon text-center" data-toggle="dropdown"> -->
										<!-- <i class="fe fe-mail"></i>
										<span class="nav-unread badge badge-danger badge-pill">3</span> -->
									<!-- </a> -->
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="message-menu">
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
												<div>
													<strong>Madeleine</strong> Hey! there I' am available....
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
												<div>
													<strong>Anthony</strong> New product Launching...
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
												<div>
													<strong>Olivia</strong> New Schedule Realease......
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
												<div>
													<strong>Sanderson</strong> New Schedule Realease......
													<div class="small text-muted">
														2 days ago
													</div>
												</div>
											</a>
										</div>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Messages</a>
									</div>
								</div> <!-- MESSAGE-BOX -->

		<!-- -------------------------------------------------------------------------- -->
						<!-- old code start from -->
								<div class="dropdown profile-1">
									<!-- <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
										<span>
											<img src="" alt="profile-user"  id="profile_user" class="avatar  profile-user brround cover-image">
										</span>
									</a> -->
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0" id="adminn1"></h5>
												<small class="text-muted">{{__('pham_dashboard.admin')}}</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<div id="profilev1">    </div>

										<!-- ----------------------------------------------------------------------- -->
										<!-- <a class="dropdown-item" href="{{url('pharmacist_profile')}}">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a> -->
										<!-- <a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider mt-0"></div> -->
										<!-- <a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a> -->
										
<!-- ------------------------------------------------------------------------------------------ -->

<!-- old code -->
										<!-- <a class="dropdown-item" onclick="logoutt()">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i>{{__('pham_dashboard.signout')}}
										</a> -->
									</div>
								</div>
<!-- ------------------------------------------------------------------ -->
				
<!-- old code -->
                 <!--  <div class="dropdown d-md-flex" id="flag">
	               <div class="us1">
	               	
	               	<img src="{{URL::asset('assets/images/flags/us.svg')}}" style="width:30px;height:30px;">
	               	 
	               	 	<img src="{{URL::asset('assets/images/flags/us.svg')}}" style="width:30px;height:30px;">
	               
	                <img src="{{URL::asset('assets/images/flags/ar.svg')}}" style="width:30px;height:30px;">
	            
	              </div>

				        <select class="form-control lang" onchange="selectlang(this)">
				            <option>Language</option>
	     
				            <option value="en">English (EN)</option>
				           
				            <option value="ar">Arabic (AR)</option>
				        </select>
				    </div> 
 -->

 <!-- --------------------------------------------------------------------------------- -->

<!-- new code -->
<div class="dropdown" style="display:flex">
			<button class="btn btn-success
					dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				<?php if($locale =="en"){ ?>
				<img src="http://3.220.132.29/medpro/assets/images/flags/us.svg" width="50"
				height="20" class="mainImage">
				<?php } else if ($locale == 'ar') { ?>
				<img src="http://3.220.132.29/medpro/assets/images/flags/ar.svg" width="50"
				height="20" class="ArabicData">
				<?php }else{ ?>
				<img src="http://3.220.132.29/medpro/assets/images/flags/us.svg" width="50"
				height="20" class="mainImage">
				<?php } ?>
				 </button>

			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
				 
				<li class="dropdown-item" id="english" name="english" onclick="demo()">
					<button>
					<img src="http://3.220.132.29/medpro/assets/images/flags/us.svg" width="20"
						height="15"> English
                   </button>
				</li>
				<li class="dropdown-item"  id="arabic" name="arabic" onclick="demo1()">
				<button>
					<img src="http://3.220.132.29/medpro/assets/images/flags/ar.svg" 
					width="20" height="15" 
					> Arabic
				</button>
				</li>
			</ul>

<div class="dropdown profile-1">
		<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
			<span>
				<img src="http://3.220.132.29/medpro/assets/images/pngs/doc_image.png" alt="profile-user" id="profile-user" class="avatar  profile-user brround cover-image" style="width:48px !important; height:48px !important;">
			</span>
		</a>
		<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
			<div class="drop-heading">
				<div class="text-center">
					<h5 class="text-dark mb-0" id="admin"></h5>
					<small class="text-muted">Administrator</small>
				</div>
			</div>
			<div class="dropdown-divider m-0"></div>
			<div id="profilev">    </div>
	
<a class="dropdown-item"  onclick="signout1()">
				<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
			</a>
		</div>
	</div>

</div>





								
<!-- ------------------------------------------------------------------------------------------------ -->
								<div class="dropdown d-md-flex header-settings">
									<!-- <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-align-right"></i>
									</a> -->
								</div><!-- SIDE-MENU -->
							</div>
<!-- /Notification Ends -->
<script type="text/javascript">


		 let pharm_data=localStorage.getItem('pharm_det');
         var obj = JSON.parse(pharm_data);
         var username2=obj.pham_first_name +' '+ obj.pham_last_name;
        //   console.log("use@2",username2)
          console.log("use@obj",obj)
		  var pham_id=obj._id;
		//   alert(pham_id)

          document.getElementById("adminn1").style.fontSize = "large";
          document.querySelector("#adminn1").style.color="#000000";
        //    document.getElementById("admin1").innerText=username2;
           document.getElementById("adminn1").innerHTML += username2;
           console.log(document.getElementById("adminn1")) 
		   
		   
		   var url = '{{ route("pharmprofile", ":id") }}<?="/".$locale; ?>';
          url = url.replace(':id',pham_id );
		//   alert(url)
		//   console(url)
        //   var symbol= "Profile";
        //   document.getElementById('profilev').innerHTML('<li><a href="'+url+'">' + symbol + ' </a></li>');
	    //  code for href link
		var mydiv = document.getElementById("profilev1");
		var aTag = document.createElement('a');
		aTag.setAttribute('href',url);
		aTag.setAttribute('class','dropdown-item');
		aTag.innerText = "{{__('pham_dashboard.profile')}}";
		aTag.innerHTML='<i class="dropdown-icon mdi mdi-account-outline">&nbsp &nbsp'+ aTag.innerText +'</i>';
		
		mydiv.appendChild(aTag);
  
</script>
<script>

	 function demo()
    {
 	let x = document.getElementById("english").getAttribute('name');
 	let path = window.location.href;
    let uri=path.split('/');
   
if(x == "english")
    {
    	if(uri[5] == "ar")
    	{
    		let ab = uri.pop();
    		console.log(ab);
    		console.log(uri,"ldsfk")
    		console.log("Inside if condition",path)
    		uri[5]='en';
    		let newPath = uri[0]+"/"+"/"+uri[1]+uri[2]+"/"+uri[3]+"/"+uri[4]+"/"+uri[5]
            window.location.href = newPath;
    	}

    if(uri[5] == undefined)
    {
        uri[5]="en";
    	let newPath = uri[0]+"/"+"/"+uri[1]+uri[2]+"/"+uri[3]+"/"+uri[4]+"/"+uri[5];
        window.location.href = newPath;
    }
 }
 }


 function demo1()
 {
 	let y = document.getElementById("arabic").getAttribute('name');
    let path = window.location.href;
    let uri=path.split('/');
 	console.log(uri[0],uri[1],uri[2],uri[3],uri[4],uri[5],"demo1")
    
    if(y == "arabic")
    {
    	
    if(uri[5] == "en")
     {
     	let ab = uri.pop();
    	uri[5]='ar';
    	let newPath = uri[0]+"/"+"/"+uri[1]+uri[2]+"/"+uri[3]+"/"+uri[4]+"/"+uri[5]
        window.location.href = newPath;
    }

    if(uri[5] == undefined)
    {
    	console.log("abvc")
    	uri[5]='ar';
    	let newPath = uri[0]+"/"+"/"+uri[1]+uri[2]+"/"+uri[3]+"/"+uri[4]+"/"+uri[5]
        window.location.href = newPath;
     }
    }
 
 }


		function logout(){
 
          var api_url="http://3.220.132.29:3000/api/";
          var base_path = "http://3.220.132.29/medpro/"; 
          var pham_details=localStorage.getItem('pharm_det');
          var details =JSON.parse(pham_details);
          var pharmacist_id=details._id;
        // alert(pharmacist_id);
        var formData = {
          phamaciest_id:pharmacist_id,
        };
        console.log("pharmacist ID",pharmacist_id)
        console.log("Form Data",formData)
        // alert(pharmacist_id);
        
        
        $.ajax({
        	 url: api_url+"PhamLogout",
        	 type: "POST",
        	 dataType: 'json', 
        	 data:{
        	 prescription_id:id,
        	 }
        }).done(function (res) {
        console("response for logout successfully",res);
        return false;
        
        if(res.status == true){
        $('#message').html(res.message).addClass('alert alert-success');
        window.location.href= base_path + "pharmacist_Login";
        
        }else{
        $('#message').html(res.message).addClass('alert alert-danger');
        }
        });
// });
		}
	
// });


</script>
<script>
    
    
    var base_path = "http://3.220.132.29/medpro/";
    var api_url="http://3.220.132.29:3000/api/";
    // var id=$this.id;
      
         let user_data546=localStorage.getItem('pharm_det');
         var obj6 = JSON.parse(user_data546);
         
         var pharm_id7 =obj6._id;
        //  window.location.href =base_path +"physician_profile/"+phy_id;
        //     console.log("pharmCY  details",obj);
            // alert(phy_id)
    $.ajax({
      url: api_url+"phamViewProfile",
      type: "post",
      dataType: 'json', 
      data:{
        phamaciest_id:pharm_id7,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
      localStorage.setItem('pharm_profile_det',res);
      
      // alert(res);
          console.log("respons",res);

		  let resarr=res.data.pham_img.split("/");
          let image=resarr[resarr.length-1];

            if(image!=""){
              $('#profile_user').attr('src',res.data.pham_img);  
            }
            else{
              $('#profile_user').attr('src',"http://3.220.132.29/medpro/assets/images/pngs/doc_image.png");    
            }  
   
    });
    
   



    </script>
     <script>
function selectlang($this){
    // alert('hi')
    var url = window.location.href;
     let uri=url.split('/');
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