@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
<script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>
<style>
     .proimg{
         height: 80px;
         width: 80px;
         margin-left: 1px;
     }
     
     input[type=text]{
         width: 900px;
         height: 50px;
         background-color: #F1F1F9;
      }
     
     .btninput{
         width: 1111px;
         background-color: #F1F1F9;
         color: #7F7F7F;
         height: 50px;
         margin-top: 20px;
         margin-bottom: 10px;
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
        padding-right: 84%;
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
          width: 130px;
          height: 50px;
          background: #7EC1EC;
          /* box-shadow: 0px -2px 4px rgb(0 0 0 / 25%); */
          border-radius: 10px;
          color: #fff;
          font-size: 21px;
          text-align: center;
          align-items: center;
     }
     .page-title {
          font-size: 25px;
          font-weight: 400;
          position: relative;
          margin: 0 0 0.2rem;
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
      .erroww{ 
        margin-left: 950px;
        color: #7EC1EC;
        font-weight: bolder;


      }
      
      #arrow{
        color: #7EC1EC;
        padding-left: 950px;
        font-weight: bolder;
        font-size: 24px;
      }
      

   
     
      @media only screen and (max-width: 1180px){
        .newpass{
           padding-right: 85%;
         }
        
         .connewpas{
            padding-right: 77%;
         }
         input[type=text]{
           width: 750px;
         }
         label {
         padding-right: 80%;
         }
         .btninput {
          margin-right: 104px;
          width: 850px;
              
       }
       #arrow{
           padding-left:670px;
           
         }
         .page-header {
            padding: 15px;
            width: 870px;
        }
        .changepass{
          margin-left: 600px;
         }
         .proimg{
           margin-left: 30px;
         }
         .container {
          margin-left: 30px;
          max-width: 960px;
       }
       .editbtn{
         margin-right: 42px;
       }
       .form-control:disabled, .form-control[readonly] {
           background-color: #F1F1F9;
           opacity: 1;
           width: 845px;
        }
      }
      @media only screen and (max-width: 820px){
           body{
             background-color: white;
           }
           label {
         padding-right: 65%;
         }
         .btninput {
              width: 500px;
              margin-top: 20px;
              margin-bottom: 10px;
              margin-right: 53px;
              background-color: #F1F1F9;
              color: #7F7F7F;
              height: 50px;
       }
       #arrow{
           padding-left:330px;
           
         }
     .changepass{
          margin-left: 250px;
         }
         .page-header {
            padding: 15px;
            width: 510px;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #F1F1F9;
            opacity: 1;
            width: 500px;
         }
       
      }

      @media only screen and (max-width: 480px){
         body{
           background-color: white;
         }
         label {
         padding-right: 45%;
         }
         .changepass{
          margin-left: 50px;
         }
         .btninput{
          width: 100px;
         }
         #arrow{
           padding-left: 290px;
         }
         .col-lg{
           width: 28%;
         }
         .col-sm{
           width: 29%;
         }
         
        .page-title{
          margin-right: 1038px;
        }
        .btninput {
          width: 295px;
          margin-top: 20px;
          margin-bottom: 10px;
          margin-right: 53px;
          background-color: #F1F1F9;
          color: #7F7F7F;
          height: 50px;
       }
       #arrow{
           padding-left: 140px;
         }
         .page-header {
            padding: 15px;
            width: 320px;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #F1F1F9;
            opacity: 1;
            width: 295px;
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

     
          <img src="{{URL::asset('assets/images/pngs/doc_image.png')}}" class="proimg float-left mb-4" alt="">
          <div id="editprofile" class="float-right"></div>


     <!-- row end -->

     <!-- form start  -->
     <form action="" method="post">
       @csrf 
         
            <div class="form-group ">
               <label for="physician_first_name">Physician First Name:</label>
               <input type="text" class="form-control" value="" id="physician_first_name" disabled>
            </div>

            <div class="form-group">
               <label for="physician_last_name">Physician Last Name:</label>
               <input type="text" class="form-control" value="" id="physician_last_name" disabled>
            </div>

            <div class="form-group">
               <label for="email" class="emaill">Email:</label>
               <input type="text" class="form-control" value="" id="email" disabled>
            </div>

            <button type="button" class="btn btninput" data-toggle="modal" data-target="#exampleModal">
            License Number <i class="fa-solid fa-greater-than" id="arrow"></i>
            <!-- <span class="erroww">></span> -->

             <!-- <img src="{{URL::asset('assets/images/brand/arrow.png')}}" alt="" style="width: 50px; background:#7EC1EC"> -->
            </button>

            <div class="form-group">
               <label for="password" class="pass">Password:</label>
               <input type="text" class="form-control" value="" id="password" disabled>
            </div>




         <button class="changepass">Change Password </button>

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
                       <label for="license_number" style="padding-right: 70%;">License number:</label>
                       <input type="text" class="form-control lnum" value="" id="license_number" disabled>
                   </div>

                   <div class="form-group licenseimg">
                        <label  class="form-label"style="padding-right: 70%;">License Image</label>
                        <img src="" class="licenseimg" alt="license_image" id="license_image">
                       
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
      
      // alert(res);
          // console.log("respons",res);
      //     return false;
              $("#physician_first_name").val(res.data.phy_first_name) ;   
              $("#physician_last_name").val(res.data.phy_last_name) ;   
              $('#email').val(res.data.phy_email);
              $('#password').val("********");
              $('#license_number').val(res.data.phy_licnse);
              $('#license_image').attr('src',res.data.phy_licnse_file);
    });
    
   



    </script>
   <script>
     let user_data4=localStorage.getItem('user_det');
         var obj = JSON.parse(user_data4);
         
         var phy_id4 =obj._id;
        //  alert(phy_id4)
     var url = '{{ route("edit.profile", ":id") }}';
          url = url.replace(':id',phy_id4 );
		
		var mydiv = document.getElementById("editprofile");
		var aTag = document.createElement('a');
		aTag.setAttribute('href',url);
		aTag.setAttribute('class','btn editbtn mt-4');
		aTag.innerText = "Edit";
		// aTag.innerHTML='<i class="dropdown-icon mdi mdi-account-outline">&nbsp &nbsp'+ aTag.innerText +'</i>';
		
		mydiv.appendChild(aTag);
   </script>
@endsection




