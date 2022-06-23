@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
<script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<style>
  /*css for profile pic*/
 .glyphicon{
  top: 3rem;
  left: -6rem;
  color: #7ec1ec;
  z-index: -1;
 }
  
 #upload_btn{
  border-radius:10px;
  display:hidden;
  margin-left:2.5rem;
  left: 2rem;
  }








  /*css ends here for profile*/
 /* .glyphicon-pencil{
    color: #7ec1ec;
    top: -2.5rem;
    right: -6rem;
  }*/
  .error {
    color: red;
  }
  .zmdi {
    color: #7ec1ec;
  }
 #img_file{
    top: 7.5rem;
    opacity: 0;
    z-index: 2;
   /* position: absolute;
    float: left;
    left: 14.2rem;
    top: 1rem;

    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: white;
    color: #7ec1ec;*/

    
  }

  input[type=file]::file-selector-button:hover {
  background-color: #7ec1ec;
  border: 2px solid #00cec9;
  }

  .proimg {
    height: 80px;
    width: 80px;
    margin-right: 330px;
    position: relative;
    top: 0rem;
    left: 1rem;
    border-radius: 50%;
  }

  .connewpas {
    padding-right: 57%;
  }

  .newpass {
    padding-right: 72%;
  }

  input[type=text] {
    width: 1114px;
    height: 50px;
    background-color: #F1F1F9;
  }

  #license_number {
    width: 100%;
  }

  .btninput {
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

  label {
    /*padding-right: 84%;*/
    font-size: 17px;
    color: #7d7a7a;
    float: left;
  }

  .emaill {
    margin-right: 122px;
  }

  .pass {
    margin-right: 122px;
  }

  .editbtn {
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

  .ok {
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

  .savechnagesbtn {
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

  .btnupload {
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

  /* 
     .file {
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
  #arrow {
    color: #7EC1EC;
    padding-left: 950px;
    font-weight: bolder;
    font-size: 24px;
  }

  .changepass {
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

  @media only screen and (max-width: 1180px) {
    .newpass {
      padding-right: 77%;
    }

    .connewpas {
      padding-right: 69%;
    }

    .pass {
      margin-right: 97px;
    }

    input[type=text] {
      width: 850px;
      margin-left: 36px;
    }

    label {
      padding-right: 71%;
    }

    .btninput {
      /* margin-right: 104px; */
      width: 850px;
      margin-left: 27px;

    }

    #arrow {
      padding-left: 670px;

    }

    .page-header {
      padding: 15px;
      width: 870px;
    }

    .proimg {
      margin-right: 20px;
    }
  }

  @media (min-width: 992px) {
    .col-lg {
      flex-basis: 0;
      flex-grow: 1;
      max-width: 100%;
      margin-right: 702px;
    }



  }

  @media only screen and (max-width: 820px) {
    body {
      background-color: white;
    }

    label {
      padding-right: 65%;
    }

    .btninput {
      width: 545px;
      margin-top: 20px;
      margin-bottom: 10px;
      margin-right: 53px;
      background-color: #F1F1F9;
      color: #7F7F7F;
      height: 50px;
    }

    #arrow {
      padding-left: 380px;

    }

    .changepass {
      margin-left: 330px;
    }

    .page-header {
      padding: 15px;
      width: 510px;
    }

    .newpass {
      padding-right: 75%;
    }

    .connewpas {
      padding-right: 62%;
    }

    input[type=text] {
      width: 545px;
    }

  }

  @media only screen and (max-width: 480px) {
    body {
      background-color: white;
    }

    label {
      padding-right: 28%;
    }

    input[type=text] {
      width: 300px;

    }

    #arrow {
      padding-left: 140px;
    }

    .newpass {
      padding-right: 40%;
    }

    .connewpas {
      padding-right: 21%;
    }

    .pass {
      margin-right: 80px;
    }

    .page-title {
      margin-right: 1038px;
    }

    .btninput {
      width: 300px;
      margin-top: 20px;
      margin-bottom: 10px;
      margin-right: 30px;
      margin-left: 35px;
      background-color: #F1F1F9;
      color: #7F7F7F;
      height: 50px;
    }

    .page-header {
      padding: 15px;
      width: 320px;
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
  <!-- <div id="message1"></div> -->

  <!-- row start -->
  <div class="row pb-6" style="position:relative;">
    <form id="jsform" method="post" enctype="multipart/form-data"  style="display: flex;">
      @csrf
    <div class="col-sm col-lg profile-pic">
    
       
       <input type="hidden" value="" name="physician_id" id="physician_id">
      
        <label for="file">
         <!-- Choose Image
         <img src="{{URL::asset('assets/images/brand/more.png')}}" id="imgfile_phy_reg" alt="">
      <p class="file-name_reg"></p> -->
        <input id="img_file" type="file" accept="image/*" name="image" />
        <span  class="glyphicon glyphicon-pencil"></span>
        </label>
       <!-- https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png -->
       <img src="" class="proimg" id="output"  alt="">
       <input type="submit" id="upload_btn" class="btn-primary float-left profile-pic1 mt-3 ml-1" value="Upload"   name="submit">
    </div>
  </form>
  </div>
   <div id="message"></div>
  <!-- row end -->

  <!-- form start  -->
  <form action="" method="post" id="savechanges">
    @csrf
    <input type="hidden" value="" name="physician_id1" id="physician_id1">
   <!--  <input type="hidden" name="pham_lat" id="pham_lat" value="">
    <input type="hidden" name="pham_long" id="pham_long" value=""> -->
    <div class="form-group ">
      <label for="physician_first_name">Physician First Name:</label>
      <input type="text" class="form-control" id="physician_first_name" name="physician_first_name">
    </div>

    <div class="form-group">
      <label for="physician_last_name">Physician Last Name:</label>
      <input type="text" class="form-control" id="physician_last_name" name="physician_last_name">
    </div>

    <div class="form-group">
      <label for="email" class="emaill">Email:</label>
      <input type="text" class="form-control" id="email" name="email" disabled>
    </div>

    <button type="button" class="btn btninput" data-toggle="modal" data-target="#exampleModal">
      License Number <i class="fa-solid fa-greater-than" id="arrow"></i>
    </button>

    <!-- <div class="form-group">
               <label for="password" class="pass">Password:</label>
               <input type="text" class="form-control" id="password" name="password" >
            </div>

            <div class="form-group">
               <label for="newpassword" class="newpass">New Password:</label>
               <input type="text" class="form-control" id="newpassword" name="newpassword" >
            </div>
            <div class="form-group">
               <label for="confnewpassword" class="connewpas">Confirm New Password:</label>
               <input type="text" class="form-control" id="confnewpassword" name="confnewpassword">
            </div> -->



    <!-- Button trigger modal  for password-->
    <button type="button" class="btn changepass" data-toggle="modal" data-target="#exampleModalCenter">
      Change Password
    </button>

    <button type="submit" value="save" class="savechnagesbtn">Save Changes</button>







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
              <input name="phy_licnse" type="text" class="form-control lnum" id="license_number">
            </div>

            <div class="form-group licenseimg">
              <label class="form-label" style="padding-right: 70%;"><h4>License Image</h4></label>
              <a href="" id="pdf_image1">
              <img src="" class="licenseimg" alt="license_image" id="license_image" style="height:200px;width:200px;">
              </a>
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
          <input type="file" name="file" id="file" class="file">


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

    <!-- Modal for password -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="message3"></div>
            <form method="post" id="phy_pass_update" >
              @csrf
            <div class="form-group" style="position:relative;">
              <label for="password" class="pass">Password:</label>
              <input type="password" class="form-control w-100" id="password" name="password">
              <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword1" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty1()"style="position: absolute;float:right;right: 2rem;top:4rem;"></i>
            </div>

            <div class="form-group" style="position:relative;">
              <label for="newpassword" class="newpass">New Password:</label>
              <input type="password" class="form-control w-100" id="newpassword" name="newpassword">
              <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword2" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty2()"style="position: absolute;float:right;right:2rem;top:4rem;"></i>
            </div>
            <div class="form-group" style="position:relative;">
              <label for="confnewpassword" class="connewpas">Confirm New Password:</label>
              <input type="password" class="form-control w-100" id="confnewpassword" name="confnewpassword">
              <i class="zmdi zmdi-eye zmdi-eye-off" id="togglePassword3" title="visible" data-original-title="zmdi zmdi-eye"  onclick="toggleVisibilty3()"style="position: absolute;float:right;right: 2rem;top:4rem;"></i>
            </div>
         
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="border: none;">Close</button>
            <button type="submit" class="btn btn-primary" value="save" style="border: none;" >Save Password</button>
          </div>
        </form>
         </div>
        </div>
      </div>
    </div>

    <!-- end modal for password-->

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
  $(document).ready(function() {
    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').trigger('focus')
    })
$("input[type='file']").change(function(){
   $('.profile-pic1').show();
})

   const file = document.querySelector('#file');
    //file
    // const file = document.querySelector('#file');
    // file.addEventListener('change', (e) => {
    //   // Get the selected file
    //   const [file] = e.target.files;
    //   // console.log(e.target.files[0]);
    //   // return false;

    //   // Get the file name and size
    //   const {
    //     name: fileName,
    //     size
    //   } = file;
    //   // Convert size in bytes to kilo bytes
    //   const fileSize = (size / 1000).toFixed(2);
    //   // Set the text content
    //   const fileNameAndSize = `${fileName} - ${fileSize}KB`;
    //   document.querySelector('.file-name').textContent = fileNameAndSize;
    // });


    //end document ready 
  });


</script>

<script>
  var base_path = "http://3.220.132.29/medpro/";
  var api_url = "http://3.220.132.29:3000/api/";


  let user_data3 = localStorage.getItem('user_det');
  var obj = JSON.parse(user_data3);
  //  console.log("obj",obj)
  var phy_id = obj._id;
   $('#physician_id').val(phy_id);
   $('#physician_id1').val(phy_id);
  $.ajax({
    url: api_url + "phyViewProfile",
    type: "post",
    dataType: 'json',
    data: {
      physician_id: phy_id,
    },

  }).done(function(res) {
    localStorage.setItem('profile_det', res);
      let image_name=res.data.phy_licnse_file;
              let ext =image_name.split(".");
              // console.log(ext[(ext.length)-1]);
              // return false;
              ext =ext[(ext.length)-1];

  $("#physician_first_name").val(res.data.phy_first_name);
    $("#physician_last_name").val(res.data.phy_last_name);
    $('#email').val(res.data.phy_email);
    $('#password').val(res.data.phy_password);
    $('#license_number').val(res.data.phy_licnse);
    if(ext == "pdf"){
       $('#license_image').attr('src','https://cdn.pixabay.com/photo/2013/07/13/01/18/pdf-155498_640.png');
       $('#pdf_image1').attr('href',res.data.phy_licnse_file);
    }else{
       $('#license_image').attr('src', res.data.phy_licnse_file);
        $('#pdf_image1').attr('href',res.data.phy_licnse_file);
    }
   
    $('#output').attr('src',res.data.phy_img);
    $('#physician_id1').val(phy_id);

  // }else{
  //    $('#output').attr('src','https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png');
  // }
    
  });
  
</script>
<script>
  $("#savechanges").validate({
    errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      physician_first_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      physician_last_name: {
        required: true,
        lettersonly: true,
        // minlength: 3
      },
      email: {
        required: true,
        email: true
      },
      license_number: {
        required: true,
        minlength: 8
      },

    },
    messages: {
      physician_first_name: {
        required: "First Name field is Required",
        lettersonly: "Only Alphabetical Characters are allowed",
      },
      physician_last_name: {
        required: "Last Name field is Required",
        lettersonly: "Only Alphabetical Characters are allowed",

      },
      email: {
        required: "Email field is Required",
        email: "The email should be in the format: abc@domain.tld"
      },

      license_number: {
        required: "License Number field is Required",
        minlength: "Licence Number should be at least 8 characters"
      },

    }
  });


  $('#savechanges').on('submit', function(event) {
    event.preventDefault();

    var first_name = $("#physician_first_name").val();
    var last_name = $("#physician_last_name").val();
    // var email= $('#email').val();
    var license_no = $('#license_number').val();
    var file = $('#file')[0].files[0];
    var password = $('#password').val();
    var newpassword = $('#newpassword').val();
    var confnewpassword = $('#confnewpassword').val();
    var pham_lat = $('#pham_lat').val();
    var pham_long = $('#pham_long').val();



    var user_details5 = localStorage.getItem('user_det');
    var details5 = JSON.parse(user_details5);
    var physician_id5 = details5._id;
    $('#physician_id1').val(physician_id5);
    console.log(physician_id5);
    // alert(physician_id5)

    if (first_name != "" && last_name !== "") {

      var formData = {
        // pham_lat: pham_lat,
        // pham_long: pham_long,
        physician_id: physician_id5,
        phy_first_name: first_name,
        phy_last_name: last_name,
        phy_licnse: license_no,
        file: file,
      }


      // console.log("Formdata", formData);
      //  return false;
      $.ajax({
        type: "POST",
        url: api_url + "phyUpdateProfile",
        data: new FormData(this),
        processData: false,
        contentType: false,
      }).done(function(res) {
          

        // if (res.data) {
          if (res.status == true) {
           
             localStorage.setItem('user_det', JSON.stringify(res.data));
            $('#message').html(res.message).addClass('alert alert-success');
            swal({
                  title: "Profile Updated Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
            // window.location.reload()
            window.location.href =base_path +"physician_profile/"+physician_id5;
          
           
          } else {
            $('#message').html(res.message).addClass('alert alert-danger');
          }
        // }
      });
    } else {
       $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
    }

  });
</script>

  <script>
   
     $('#jsform').on('submit',function (e) {
         e.preventDefault();
     // var file3 = $('#img_file')[0].files[0];
     // console.log(file3)
    // var user_det1 = localStorage.getItem('user_det');
    // var detail1 = JSON.parse(user_det1);
    // var physician_id = detail1._id;
    //  // var formData = new FormData(this);
    //  // return false;
    var data = new FormData(this);

       $.ajax({
        type: "POST",
        url: api_url +"phyImageUpload",
        data: data,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
      }).done(function(res) {
          // alert(res)
          // return false;
           if(res.status == true){
            $('#message').html(res.message).addClass('alert alert-success');
            window.location.href=window.location.href;
           }else{
             $('#message').html(res.message).addClass('alert alert-danger');
           }
          
      });
        $('.profile-pic1').hide();
     });
        
</script>

<script>
    $('#phy_pass_update').on('submit',function (event) {
          event.preventDefault();
          // alert('submitted')
    var user_details65=localStorage.getItem('user_det');
    var details65 =JSON.parse(user_details65);
    var physician_id65=  details65._id;
    var password= $('#password').val();
    var newpassword= $('#newpassword').val();
    var confnewpassword =$('#confnewpassword').val();
    
    var formdatapass ={
    physician_id:physician_id65,
    phy_old_password:password,
    phy_new_password:newpassword,
    phy_confrim_new_password:confnewpassword,
    }
    console.log(formdatapass)
     $.ajax({
      type: "POST",
      url: api_url+"phyChangePassword",
      data: formdatapass,
     
    }).done(function (res) {
        if(res.status == true){
    
              swal({
                  title: "Password Updated Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
          // $('#message').html(res.message).addClass('alert alert-success');
          $('#message3').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"physician_edit_profile/"+physician_id65;
        }else{
           $('#message3').html(res.message).addClass('alert alert-danger');

        }
    
    });
  
});
</script>
  <script>
 function toggleVisibilty1(){
let togglePassword = document.querySelector("#togglePassword1");
        let password = document.querySelector("#password");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}

  function toggleVisibilty2(){
let togglePassword = document.querySelector("#togglePassword2");
        let password = document.querySelector("#newpassword");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}
 function toggleVisibilty3(){
let togglePassword = document.querySelector("#togglePassword3");
        let password = document.querySelector("#confnewpassword");
   
     
            let type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("zmdi-eye");
      
}

</script>
@endsection