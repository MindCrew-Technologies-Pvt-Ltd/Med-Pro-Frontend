@extends('layouts.vertical-menu.master')
@section('css')
@endsection
@section('page-header')
<script src="https://kit.fontawesome.com/8ebca7c608.js" crossorigin="anonymous"></script>

<style>
  .error{
    color: red;
  }
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
      #license_number{
        width: 100%;
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
       }
       #arrow{
        color: #7EC1EC;
        padding-left: 950px;
        font-weight: bolder;
        font-size: 24px;
      }

      

      @media only screen and (max-width: 1180px){
        .newpass{
           padding-right: 77%;
         }
         .connewpas{
            padding-right: 69%;
         }
         .pass {
            margin-right: 97px;
         }
         input[type=text]{
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
       #arrow{
           padding-left:670px;
           
         }
         .page-header {
            padding: 15px;
            width: 870px;
        }
        .proimg{
            margin-right:20px;
        }
      }

     @media (min-width: 992px){
        .col-lg {
             flex-basis: 0;
             flex-grow: 1;
             max-width: 100%;
             margin-right: 702px;
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
              width: 545px;
              margin-top: 20px;
              margin-bottom: 10px;
              margin-right: 53px;
              background-color: #F1F1F9;
              color: #7F7F7F;
              height: 50px;
       }
       #arrow{
           padding-left:380px;
           
         }
     .changepass{
          margin-left: 330px;
         }
         .page-header {
            padding: 15px;
            width: 510px;
        }
        .newpass{
           padding-right: 75%;
         }
         .connewpas{
            padding-right: 62%;
         }
         input[type=text]{
           width: 545px;
         }
       
      }

     @media only screen and (max-width: 480px){
         body{
           background-color: white;
         }
         label {
         padding-right: 28%;
         }
         input[type=text]{
           width: 300px;
           
         }
         #arrow{
           padding-left: 140px;
         }
         .newpass{
           padding-right: 40%;
         }
         .connewpas{
            padding-right: 21%;
         }
         .pass {
            margin-right: 80px;
         }
         .page-title{
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
         <div class="row pb-6">
               <div class="col-sm col-lg">
                 <img src="{{URL::asset('assets/images/pngs/doc_image.png')}}" class="proimg" alt="">
               </div>
        </div>
        
     <!-- row end -->

     <!-- form start  -->
     <form action="" method="post" id="savechanges">
       @csrf 
         
            <div class="form-group ">
               <label for="physician_first_name">Physician First Name:</label>
               <input type="text" class="form-control" id="physician_first_name" name="physician_first_name" >
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

            <div class="form-group">
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
        <input type="hidden" name="physician_id" id="physician_id">
                   <div class="form-group">
                       <label for="license_number" style="padding-right: 70%;">License number:</label>
                       <input type="text" class="form-control lnum" id="license_number">
                   </div>

                   <div class="form-group licenseimg">
                        <label  class="form-label"style="padding-right: 70%;">License Image</label>
                        <img src="" class="licenseimg" alt="license_image" id="license_image">
                       
                  </div>
                  
      </div>
       <!-- file -->
                    <div class="file-input">
                          <input type="file" id="file" class="file">
                          <label for="file">
                            Upload New
                            <p class="file-name"></p>
                          </label>
                    </div>

                     
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

      
         let user_data3=localStorage.getItem('user_det');
         var obj = JSON.parse(user_data3);
        //  console.log("obj",obj)
         var phy_id =obj._id;
       
    $.ajax({
      url: api_url+"phyViewProfile",
      type: "post",
      dataType: 'json', 
      data:{
        physician_id:phy_id,
      },
    
    }).done(function (res) {
      localStorage.setItem('profile_det',res);
    
              $("#physician_first_name").val(res.data.phy_first_name) ;   
              $("#physician_last_name").val(res.data.phy_last_name) ;   
              $('#email').val(res.data.phy_email);
              $('#password').val(res.data.phy_password);
              $('#license_number').val(res.data.phy_licnse);
              $('#license_image').attr('src',res.data.phy_licnse_file);
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
      license_number:{
        required:true,
        minlength:8
      },
 
    },
    messages : {
      physician_first_name: {
         required: "First Name field is Required",
         lettersonly:"Only Alphabetical Characters are allowed",
      },
      physician_last_name: {
          required: "Last Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed",

      },
      email: {
        required: "Email field is Required",
        email: "The email should be in the format: abc@domain.tld"
      },

      license_number:{
        required:"License Number field is Required",
        minlength: "Licence Number should be at least 8 characters"
      },

    }
  });


 $('#savechanges').on('submit',function (event) {
    event.preventDefault();
    
    var first_name = $("#physician_first_name").val() ;   
    var last_name= $("#physician_last_name").val() ;   
    // var email= $('#email').val();
    var license_no= $('#license_number').val();
    var file =$('#file')[0].files[0];
    var password= $('#password').val();
    var newpassword= $('#newpassword').val();
    var confnewpassword =$('#confnewpassword').val();



    var user_details5=localStorage.getItem('user_det');
    var details5 =JSON.parse(user_details5);
    var physician_id5=  details5._id;
    $('#physician_id').val(physician_id5);
    console.log(physician_id5);
    // alert(physician_id5)

    if(first_name!="" && last_name !==""    ){
    
        var formData = {
            physician_id:physician_id5,
            phy_first_name:first_name,
            phy_last_name:last_name,
            phy_licnse:license_no,
            phy_old_password:password,
            phy_new_password:newpassword,
            phy_confrim_new_password:confnewpassword,
            file:file,
        }


        console.log("Formdata",formData);
        // return false;
    $.ajax({
      type: "POST",
      url: api_url+"phyUpdateProfile",
      data: formData,
      // contentType:false,
      // cache:false,
      // processData:false,
    }).done(function (res) {
     //    alert('done');
  
      // console.log("resposne",res);
      // return false;
      localStorage.setItem('user_det', JSON.stringify(res.data));
     
        if(res.status == true){
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path +"physician_profile/"+physician_id5;
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




