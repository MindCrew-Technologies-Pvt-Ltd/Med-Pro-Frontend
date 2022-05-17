@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<!-- <script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script> -->
<style>
    .proimg{
         height: 80px;
         width: 80px;
         margin-right: 330px;
     }
     .connewpas {
    padding-right: 82%;
    }
     
     .newpass {
    padding-right: 88%;
    }
     
     input[type=text]{
         width: 1114px;
         height: 50px;
         background-color: #F1F1F9;
      }
      #registration_number{
        width: 100%;
      }
      #license_number{
        width: 100%;
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
          width: 90px;
          height: 45px;
          background: #7EC1EC;
          box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.25);
          border-radius: 15px;
          color: #fff;
          font-size: 15px;
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
     .savechnagesbtn{
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
          

     }
     .btnupload{
          box-sizing: border-box;
          width: 116px;
          height: 38px;
          background: #7EC1EC;
          border-radius: 10px;
          border: none;
          color: #fff;
          font-size: 15px;
          margin-bottom: 10px;
          margin-left: 360px;

     }

     /* .file {
          opacity: 0;
          width: 0.1px;
          height: 0.1px;
          position: absolute;
    }

.file-input label {
         display: block;
         position: relative;
         width: 200px;
         height: 50px;
         border-radius: 25px;
         background: #7EC1EC;
         
         align-items: center;
         justify-content: center;
         color: #fff;
         cursor: pointer;
         transition: transform .2s ease-out;
}

.file-name {
        position: absolute;
        bottom: -35px;
        left: 10px;
        font-size: 0.85rem;
        color: #555;
       } */



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
         <div class="row pb-6">
               <div class="col-sm col-lg">
                 <img src="{{URL::asset('assets/images/pngs/doc_image.png')}}" class="proimg" alt="">
               </div>
        </div>
        <div id="message"></div>

     <!-- row end -->

     <!-- form start  -->
     <form action="" method="post" id="phamsavechanges">
       @csrf 
         
            <div class="form-group ">
               <label for="pham_name">pharmacy Name:</label>
               <input type="text" class="form-control" id="pham_name" >
            </div>
            <div class="form-group ">
               <label for="pham_first_name">pharmacist First Name:</label>
               <input type="text" class="form-control" id="pham_first_name" >
            </div>

            <div class="form-group">
               <label for="pham_last_name">pharmacist Last Name:</label>
               <input type="text" class="form-control" id="pham_last_name" >
            </div>
            <div class="form-group">
               <label for="pham_address">pharmacist Address:</label>
               <input type="text" class="form-control" id="pham_address" >
            </div>

            <div class="form-group">
               <label for="email" class="emaill">Email:</label>
               <input type="text" class="form-control" id="email" disabled>
            </div>

            <button type="button" class="btn btninput" data-toggle="modal" data-target="#exampleModal">
            Registration Number <i class="fa-solid fa-greater-than" id="arrow"></i>
            </button>

            <div class="form-group">
               <label for="password" class="pass">Password:</label>
               <input type="text" class="form-control" id="password" >
            </div>

            <div class="form-group">
               <label for="newpassword" class="newpass">New Password:</label>
               <input type="text" class="form-control" id="newpassword" >
            </div>
            <div class="form-group">
               <label for="confnewpassword" class="connewpas">Confirm New Password:</label>
               <input type="text" class="form-control" id="confnewpassword" >
            </div>





         <button type="submit" class="savechnagesbtn" >Save Changes</button>

     

                      
           




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
                       <input type="text" class="form-control lnum" id="registration_number">
                   </div>

                   <div class="form-group licenseimg">
                        <label  class="form-label"style="padding-right: 70%;">Registration Image</label>
                        <img src="" class="licenseimg" alt="license_image" id="registration_file">
                       
                  </div>
                  
      </div>
       <!-- file -->
                    <!-- <div class="file-input">
                          <input type="file" id="file" class="file">
                          <label for="file">
                            Upload New
                            <p class="file-name"></p>
                          </label>
                    </div> -->
                    <input type="file" name="file" id="file" class="file" >

                     
      <!-- <div class="modal-footer"> -->
        <!-- <button class="btn btnupload">Upload New</button> -->

        <button type="button" class="btn ok" data-dismiss="modal">Ok</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>
</form>
     <!-- form start  -->
     
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
    $( document ).ready(function() {
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
})

//file
const file = document.querySelector('#file');
file.addEventListener('change', (e) => {
  // Get the selected file
  const [file] = e.target.files;
  // Get the file name and size
  const { name: fileName, size } = file;
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
  document.querySelector('.file-name').textContent = fileNameAndSize;
});


//end document ready 
});
</script>
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
 $('#phamsavechanges').on('submit',function (event) {
    event.preventDefault();
    
// alert("API chal gayi")
// return false;   
    /*formvalidation for signup form*/
    // var _token =document.querySelector('[name="_token"]').value;

    var pham_name = $("#pham_name").val();   
    var first_name = $("#pham_first_name").val();   
    var last_name= $("#pham_last_name").val() ;   
    var pham_address= $("#pham_address").val() ;   
    // var email= $('#email').val();
    var pham_registration_num= $('#registration_number').val();
    var file =$('#file')[0].files[0];
    var password= $('#password').val();
    var newpassword= $('#newpassword').val();
    var confnewpassword =$('#confnewpassword').val();



    var user_details5=localStorage.getItem('pharm_det');
    var details5 =JSON.parse(user_details5);
    var pharmacist_id=  details5._id;
    $('#physician_id').val(pharmacist_id);
    console.log(pharmacist_id);
    // alert(physician_id5)

    if(first_name!="" && last_name !==""  && file!="" ){
    
        var formData = {
            phamaciest_id:pharmacist_id,
            pham_name:pham_name,
            pham_first_name:first_name,
            pham_last_name:last_name,
            pham_address:pham_address,
            pham_registration_num:pham_registration_num,
            pham_old_password:password,
            pham_new_password:newpassword,
            pham_confrim_new_password:confnewpassword,
            file:file,
        }


        console.log("Formdata",formData);
        // return false;
    $.ajax({
      type: "POST",
      url: api_url+"phamUpdateProfile",
      data: formData,
      // contentType:false,
      // cache:false,
      // processData:false,
    }).done(function (res) {
     //    alert('done');
  
      // console.log("resposne",res);
      // return false;
      localStorage.setItem('pharm_det', JSON.stringify(res.data));
     
        if(res.status == true){
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"pharmacist_profile/"+pharmacist_id;
          // window.location.href =base_path +"physician_edit_profile/"+physician_id5;
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
   }else{
    //  $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });

</script>
@endsection




