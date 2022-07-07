
<!-- /Notification -->
<style>
.protext{
color: black!important;
font-size: 17px;
font-weight: bold;

}
.drop-heading{
	display: none!important;
}
#profilev  {
color: red!important;
}
.dropdown-icon {
color: #495057!important;

}
</style>
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
	<div class="dropdown d-md-flex notifications">
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
	</div>
	<!-- NOTIFICATIONS -->
	 	<!-- <div class="dropdown d-md-flex message"> -->
		<!-- <a class="nav-link icon text-center" data-toggle="dropdown"> -->
			<!-- <i class="fe fe-mail"></i>
			<span class="nav-unread badge badge-danger badge-pill">3</span> -->
		<!-- </a> -->
	<!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
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
		</div> -->
	</div> <!-- MESSAGE-BOX -->
	<div class="dropdown profile-1">
		<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
			<span>
				<img src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" alt="profile-user" id="profile-user" class="avatar  profile-user brround cover-image">
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
			<!-- <a class="dropdown-item">
				<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
			</a> -->
			 <!-- <div class="dropdown-item" id="newprofile" href="#">
				<i class="dropdown-icon  mdi mdi-settings"></i> Settings
			</div> -->
			<!--<a class="dropdown-item" href="#">
				<span class="float-right"></span>
				<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
			</a>
			<a class="dropdown-item" href="#">
				<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
			</a>
			<div class="dropdown-divider mt-0"></div>
			<a class="dropdown-item" href="#">
				<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
			</a> -->
			<a class="dropdown-item"  onclick="signout1()">
				<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
			</a>
		</div>
	</div>
		<div class="dropdown d-md-flex" id="flag">
		<div class="us1">
              <!--  	<img src="{{URL::asset('assets/images/flags/us.svg')}}" style="width:30px;height:30px;">
                <img src="{{URL::asset('assets/images/flags/ar.svg')}}" style="width:30px;height:30px;"> -->
              </div>
		<select class="form-control" onchange="selectlang(this)">
			<option>Language</option>
			<option value="en"><img src="{{URL::asset('assets/images/pngs/us.png')}}">English (EN)</option>
			<option value="ar"><img src="{{URL::asset('assets/images/pngs/ar.png')}}">Arabic (AR)</option>
		</select>
	</div>
	<div class="dropdown d-md-flex header-settings">
		<!-- <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
			<i class="fe fe-align-right"></i>
		</a> -->
	</div><!-- SIDE-MENU -->
</div>
<!-- /Notification Ends -->
<!-- <script type="text/javascript">


let user_data1=localStorage.getItem('user_det');
var obj = JSON.parse(user_data1);
var phy_id=obj._id;
var username1=obj.phy_first_name +' '+ obj.phy_last_name;
console.log(username1)
document.getElementById("admin").style.fontSize = "large";
document.querySelector("#admin").style.color="#ffffff";
document.getElementById("admin").innerText=username1;
console.log(document.getElementById("admin"))
     

var url = '{{ route("profile", ":id") }}';
url = url.replace(':id',phy_id );

var mydiv = document.getElementById("profilev");
var aTag = document.createElement('a');
aTag.setAttribute('href',url);
aTag.setAttribute('class','dropdown-item protext');
aTag.innerText = "Profile";
aTag.innerHTML='<i class="dropdown-icon mdi mdi-account-outline">&nbsp &nbsp'+ aTag.innerText +'</i>';

mydiv.appendChild(aTag);



</script>

<script>

  var base_path = "http://3.220.132.29/medpro/";
  var api_url = "http://3.220.132.29:3000/api/";


  let user_data78 = localStorage.getItem('user_det');
  var obj78 = JSON.parse(user_data78);
  
  var phy_id78 = obj78._id;
  
  $.ajax({
    url: api_url + "phyViewProfile",
    type: "post",
    dataType: 'json',
    data: {
      physician_id: phy_id78,
    },

  }).done(function(res) {
    console.log('response',res)
   
         $('#profile-user').attr('src',res.data.phy_img);
    
   
  });
</script> -->
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