@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
<link href="{{URL::asset('assets/css/phy.css')}}" rel="stylesheet" />
<script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>
<style>
#pro_img{
    border-radius: 50%;
}

</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">{{__('phy_profile.profile')}}</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>

                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<div class="container pb-5">

         <div class="profilediv">
             <img src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png" class="proimg float-left mb-4" id="pro_img" alt="">
             <div id="editprofile" class="float-right"></div>
        </div>

     <!-- row end -->

     <!-- form start  -->
     <form action="" method="post">
       @csrf 
         
            <!-- <div class="form-group "> -->
               <label for="physician_first_name" class="pnamelab">{{__('phy_profile.fname')}}:</label>
               <input type="text" class="form-control mb-5" value="" id="physician_first_name" disabled>
            <!-- </div> -->

            <div class="form-group">
               <label for="physician_last_name">{{__('phy_profile.lname')}}:</label>
               <input type="text" class="form-control" value="" id="physician_last_name" disabled>
            </div>

            <div class="form-group">
               <label for="email" class="emaill">{{__('phy_profile.email')}}:</label>
               <input type="text" class="form-control eemail" value="" id="email" disabled>
            </div>

            <button type="button" class="btn btninput" data-toggle="modal" data-target="#exampleModal">
            {{__('phy_profile.lic')}}<i class="fa-solid fa-greater-than" id="arrow"></i>
            <!-- <span class="erroww">></span> -->

             <!-- <img src="{{URL::asset('assets/images/brand/arrow.png')}}" alt="" style="width: 50px; background:#7EC1EC"> -->
            </button>

            <div class="form-group">
               <label for="password">{{__('phy_profile.password')}}:</label>
               <input type="text" class="form-control pass" value="" id="password" disabled>
            </div>




         <!-- <button class="changepass">Change Password </button> -->

      </form>
     <!-- form start  -->

                      
           




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
                   <div class="form-group">
                       <label for="license_number" style=""> {{__('phy_profile.lic')}}:</label>
                       <input type="text" class="form-control lnum" value="" id="license_number" disabled>
                   </div>

                   <div class="form-group licenseimg">
                        <label  class="form-label"style="padding-right: 70%;"> {{__('phy_profile.lic_img')}}</label>
                      <a href="" id="image_link1">
                        <img src="" class="licenseimg" alt="license_image" id="license_image" style="height:200px;width:200px;">
                      </a>
                       <a></a>
                  </div>
      </div>
      <!-- <div class="modal-footer"> -->
        <button type="button" class="btn ok" data-dismiss="modal">{{__('phy_profile.ok')}}</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>
      <!-- container end-->
</div>
         





						
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>


<script>
    
    
    var base_path = "http://3.220.132.29/medpro/";
    var api_url="http://3.220.132.29:3000/api/";
    // var id=$this.id;
      
         let user_data3=localStorage.getItem('user_det');
         var obj = JSON.parse(user_data3);
         
         var phy_id =obj._id;
        //  window.location.href =base_path +"physician_profile/"+phy_id;
        //     console.log("pharmCY  details",obj);
            // alert(phy_id)
    $.ajax({
      url: api_url+"phyViewProfile",
      type: "post",
      dataType: 'json', 
      data:{
        physician_id:phy_id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
      localStorage.setItem('profile_det',res);
      
      let image_name=res.data.phy_licnse_file;
              let ext =image_name.split(".");
              // console.log(ext[(ext.length)-1]);
              // return false;
              ext =ext[(ext.length)-1];
      
              $("#physician_first_name").val(res.data.phy_first_name) ;   
              $("#physician_last_name").val(res.data.phy_last_name) ;   
              $('#email').val(res.data.phy_email);
              $('#password').val("********");
              $('#license_number').val(res.data.phy_licnse);
              if(ext == "pdf"){
                $('#license_image').attr('src','https://cdn.pixabay.com/photo/2013/07/13/01/18/pdf-155498_640.png');
                 $('#image_link1').attr('href',res.data.phy_licnse_file);
              }else{
                 $('#license_image').attr('src',res.data.phy_licnse_file);
                 $('#image_link1').attr('href',res.data.phy_licnse_file);
              }
             
              $('#pro_img').attr('src',res.data.phy_img);
    });
    
   



    </script>
   <script>
     let user_data14=localStorage.getItem('user_det');
         var obj = JSON.parse(user_data14);
         var phy_id14 =obj._id;
     var url = '{{ route("edit.profile", ":id") }}';
          url = url.replace(':id',phy_id14 );
		
		var mydiv = document.getElementById("editprofile");
		var aTag = document.createElement('a');
		aTag.setAttribute('href',url);
		aTag.setAttribute('class','btn editbtn mt-4');
		aTag.innerText = "{{__('phy_profile.edit')}}";
		// aTag.innerHTML='<i class="dropdown-icon mdi mdi-account-outline">&nbsp &nbsp'+ aTag.innerText +'</i>';
		
		mydiv.appendChild(aTag);
   </script>
@endsection




