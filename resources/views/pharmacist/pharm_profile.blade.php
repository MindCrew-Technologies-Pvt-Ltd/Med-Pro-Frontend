@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>

<style>
     .proimg{
         height: 80px;
         width: 80px;
         margin-right: 40px;
     }
     
     input[type=text]{
         width: 100%;
         height: 50px;
         background-color: #F1F1F9;
      }
     
     .btninput{
         width: 100%;
         background-color: #F1F1F9;
         color: #7F7F7F;
         height: 50px;
         padding-right: 994px;
         margin-top: 15px;
         margin-bottom: 15px;
     }
     #arrow{
         color: #7EC1EC;
         padding-left: 900px;
         font-size: 26px;
     }
       
     
     .licenseimg {
          width: auto;
          background-color: #F1F1F9;
          color: #7F7F7F;
          height: auto;
          margin-top: 30px;
          margin-bottom: 30px;
}
    
     label{
        padding-right: 82%;
        font-size: 17px; 
        color: #7d7a7a;
        }
        .emaill{
          margin-right: 122px;
        }
        .pass{
          margin-right: 122px;
        }

     .editbtn{
          box-sizing: border-box;
          width: 135px;
          height: 50px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgb(0 0 0 / 25%);
          border-radius: 10px;
          color: #fff;
          font-size: 21px;
          text-align: center;
          align-items: center;
     }
     .ok{
          box-sizing: border-box;
          width: 90px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          color: #fff;
          font-size: 15px;
          margin-left: 212px;
          margin-bottom: 20px;
     }
     .changepass{
          box-sizing: border-box;
          width: 200px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          border: none;
          color: #fff;
          font-size: 15px;
          margin-top: 30px;
          margin-bottom: 30px;
          margin-left: 900px;

     }

     .form-control:disabled, .form-control[readonly] {
           background-color: #F1F1F9;
           opacity: 1;
           width: 100%;
        } 


     @media (min-width: 992px){
        .col-lg {
             flex-basis: 0;
             flex-grow: 1;
             max-width: 100%;
             margin-right: 702px;
            }

     }
          
</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">Profile</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>

                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<div class="container pb-5">

      <!-- row start -->
         
      <img src="{{URL::asset('assets/images/pngs/doc_image.png')}}" class="proimg float-left mb-4" alt="">
          <div id="pharmeditprofile" class="float-right"></div>
     <!-- row end -->
     
     <!-- form start  -->
     <form action="" method="post">
       @csrf 
         
            <div class="form-group ">
               <label for="pham_name">pharmacy Name:</label>
               <input type="text" class="form-control" value="" id="pham_name" disabled>
            </div>

            <div class="form-group ">
               <label for="pham_first_name">Pharmacist First Name:</label>
               <input type="text" class="form-control" value="" id="pham_first_name" disabled>
            </div>

            <div class="form-group">
               <label for="pham_last_name">Pharmacist Last Name:</label>
               <input type="text" class="form-control" value="" id="pham_last_name" disabled>
            </div>

            <div class="form-group">
               <label for="pham_address">pharmacist Address:</label>
               <input type="text" class="form-control" id="pham_address" >
            </div>

            <div class="form-group">
               <label for="email" class="emaill">Email:</label>
               <input type="text" class="form-control" value="" id="email" disabled>
            </div>

            <button type="button" class="btn btninput" data-toggle="modal" data-target="#exampleModal">
            Registration Number  <i class="fa-solid fa-greater-than" id="arrow"></i>
            </button>

            <div class="form-group">
               <label for="password" class="pass">Password:</label>
               <input type="text" class="form-control" value="" id="password" disabled>
            </div>




         <button class="changepass">Change Password</button>

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
                       <label for="registration_number" style="padding-right: 70%;">Registration number:</label>
                       <input type="text" class="form-control lnum" value="" id="registration_number" disabled>
                   </div>

                   <div class="form-group licenseimg">
                        <label  class="form-label"style="padding-right: 70%;">License Image</label>
                        <img src="" class="licenseimg" alt="registration_file" id="registration_file">
                       
                  </div>
      </div>
      <!-- <div class="modal-footer"> -->
        <button type="button" class="btn ok" data-dismiss="modal">Ok</button>
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
      
         let user_data4=localStorage.getItem('pharm_det');
         var obj = JSON.parse(user_data4);
         
         var pharm_id =obj._id;
        //  window.location.href =base_path +"physician_profile/"+phy_id;
        //     console.log("pharmCY  details",obj);
            // alert(phy_id)
    $.ajax({
      url: api_url+"phamViewProfile",
      type: "post",
      dataType: 'json', 
      data:{
        phamaciest_id:pharm_id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
      localStorage.setItem('pharm_profile_det',res);
      
      // alert(res);
          console.log("respons",res);

      //     return false;
              $("#pham_name").val(res.data.pham_name) ;   
              $("#pham_first_name").val(res.data.pham_first_name) ;   
              $("#pham_last_name").val(res.data.pham_last_name) ;   
              $('#email').val(res.data.pham_email);
              $('#pham_address').val(res.data.pham_address);
              $('#password').val("********");
              $('#registration_number').val(res.data.pham_registration_num);
              $('#registration_file').attr('src',res.data.pham_registration_file);
    });
    
   



    </script>
   <script>
     let user_data5=localStorage.getItem('pharm_det');
         var obj = JSON.parse(user_data5);
         
         var phy_id5 =obj._id;
        //  alert(phy_id4)
     var url = '{{ route("edit.pharmprofile", ":id") }}';
          url = url.replace(':id',phy_id5 );
		
		var mydiv = document.getElementById("pharmeditprofile");
		var aTag = document.createElement('a');
		aTag.setAttribute('href',url);
		aTag.setAttribute('class','btn editbtn mt-4');
		aTag.innerText = "Edit";
		// aTag.innerHTML='<i class="dropdown-icon mdi mdi-account-outline">&nbsp &nbsp'+ aTag.innerText +'</i>';
		
		mydiv.appendChild(aTag);
   </script>
@endsection




