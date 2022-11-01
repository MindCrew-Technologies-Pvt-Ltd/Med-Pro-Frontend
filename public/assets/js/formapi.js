{/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> */}

$(document).ready(function(){
var api_url="http://3.220.132.29:3000/api/";
var base_path = "http://3.220.132.29/medpro/"; 
// alert(base_path);
// alert(api_url);
  



$('#lic_doc').change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        $("#file").val('');
        return false;
    }

});


// jquery validation for English and arabic
jQuery.validator.addMethod('validUserNameReg', function (value) 
{
  // alert("hello fam")
  let data=window.location.href;
  let valarr=data.split("/");
  let lastval=valarr[valarr.length-1];
  if(lastval == "ar")
  {
    var regex =/^(?:[\u0600-\u06FF\u0750-\u077F\u08A0-\u08FF\uFB50-\uFDCF\uFDF0-\uFDFF\uFE70-\uFEFF]|(?:\uD802[\uDE60-\uDE9F]|\uD83B[\uDE00-\uDEFF])){0,30}$/;
    var key = value;
    if (regex.test(key))
         {
          // console.log("true")
        return true;
          } 
          else{
          
            return false;
          }
        }
        else{
          var regex = new RegExp("^[a-zA-Z .'()-]*$");;
          var key = value;
          if (regex.test(key))
               {
                // console.log("true")
              return true;
                } 
                else{
                
                  return false;
                }
        }
},'Please Enter a Valid Name | الرجاء إدخال اسم صحيح')






$("#signupform").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      phy_first_name: {
         required: true,
          // lettersonly: true,
          validUserNameReg: true,
        
        // minlength: 3
      },
       phy_last_name: {
        required: true,
        // lettersonly: true.
         validUsername: true
        // minlength: 3
      },
      phy_email: {
         required: true,
         // email: true
      },
      phy_licnse:{
        required:true,
        minlength:8
      },
     file:{
      required:true
     },
     phy_password: {
      required:true,
      minlength:8
     },
      confpass: {
        required: true,
        minlength: 8,
        equalTo: "#password"
      },
    
      terms:{
           required: true
      }
    },
    messages : {
      phy_first_name:{ 
               required:"First Name field is Required ",
        //  pattern:"please pass valide name",
        //  lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "First Name should be at least 3 characters"
      },
      phy_last_name: {
          required: "Last Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "Last Name should be at least 3 characters"
      },
      phy_email: {
        required: "Email field is Required",
        // email: "The email should be in the format: abc@domain.tld"
      },

     phy_licnse:{
        required:"License Number field is Required",
        minlength: "Licence Number should be at least 8 characters"
      },
      file:{
         required:"License doc is Required",
     },
      phy_password: {
      required:"Password field is Required",
      minlength:"Password should be of atleast 8 characters"
     },
     confpass: {
        required: "Confirm Password field is Required",
        minlength: "Password and Confirm password should be same",
        equalTo: "Password and Confirm password should be same"
      },
      terms:{
        required:"<p>Please Agree The Terms & Conditions<p>"
      },



    }
  });


/*api call for registeration form submit*/
   $('#signupform').on('submit',function (event) {
    event.preventDefault();

 

     /*formvalidation for signup form*/
    var first_name = $('#first_name').val();
    // let modifyFirstName = first_name..replace(/\b\w/g, x => x.toUpperCase());
    // alert(modifyFirstName,"first name")
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var licence_no =$('#licence_no').val();
    var file =$('file').val();
    var password = $('#password').val();
    var confpassword =$('#confpassword').val();
    var chk;
   
    
     

    // }
    //  formData.append('phy_licnse_file', $('input[type=file]')[0].files[0]);  
    // console.log(formData);
    // return false;
    
    if(first_name!="" && last_name !=="" && email!="" && licence_no!="" && file!="" && password!="" && confpassword !="" && chk!=""){
    $.ajax({
      type: "POST",
      url: api_url+"PhysicianRegister",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) {
     //    alert('done');
     // return false;
        if(res.status == true){
          console.log('inside physician');
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href =base_path+"login";
        }
        else{
          
        $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
   }else{
     // $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });






  $("#loginform").validate({
    errorElement: "span",
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      
      email: {
         required: true,
        email: true,
        
      },
      
     pass: {
      required:true,
     minlength: 8,
     alphanumeric: true

     }
      
    },
          errorElement: "span",

    messages : {
     
      email: {
        required: "Email field is Required",
      },

      pass: {
      required:"Password field is Required",
      minlength:"8 characters Required",
      alphanumeric: "Password Should be Alphanumeric",

     },
    


    }
  });
/*api call for login form submit*/

  $("#loginform").submit(function (event) {
  event.preventDefault();
  var phy_email = $('#email').val();
  var phy_password = $('#password').val();
   console.log(phy_email,phy_password,">>>>>>>>>")

    var formData = {
    phy_email:$('#email').val(),
    phy_password:$('#password').val() ,
    };
 
   if(phy_email!="" &&  phy_password !==""){
    $.ajax({
      type: "POST",
      url: api_url+"physicianLogin",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (res) {
      console.log(res,"ks;ko;efk")
      console.log(res.data);
      localStorage.setItem('user_det', JSON.stringify(res.data));
     
      if(res.status == true){
          $('#message').html(res.message + "تم تسجيل الدخول بنجاح").addClass('alert alert-success');
          let url = window.location.href;
          let uri=url.split('/');

          let lan=uri[uri.length-1];

            // if(lan=="ar"){
            //   window.location.href=base_path+"dashboard/ar";
            // }
            // else{
            //   window.location.href=base_path+"dashboard";
            // }
        }else{
           // $('#message').html(res.message).addClass('alert alert-danger');
           alert('hello');
           $('#message').html('Please wait for admin approval').addClass('alert alert-danger');
        }

  });
   
 }

 });

    /*api call for forgot password*/


  $("#forgot_pass").submit(function (event) {
      event.preventDefault();
      var formData = {
        phy_email : $('#email').val(),
      };

    $.ajax({
      type: "POST",
      url: api_url+"physicianForgetPassword",
      data: formData,
      dataType: "json",
      encode: true,
      }).done(function (res) {
      if(res.status == true){
          // $('#message').html(res.message).addClass('alert alert-success');
          window.location.href=base_path+"forgot_password2";
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }

    });

  });
  


    /*api call for update password*/

$("#reset_pass").submit(function (event) {
      event.preventDefault();


      var arr=[];
      arr = window.location.pathname.split('/');
      
      var formData = {
        physician_id : arr[3],
        phy_password : $('#password').val(),
        confpass: $('#password1').val()
      };

    $.ajax({
      type: "POST",
      url: api_url+"phyUpdatePassword",
      data: formData,
      dataType: "json",
      encode: true,
      }).done(function (res) {

        
      if(res.status == true){

          // $('#message').html(res.message).addClass('alert alert-success');
          window.location.href= base_path+"reset_success";
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }

    });

  });
  



   
 


/*Pharmacist API Implementation for Pages*/


/*Pharmacist Signup Validation*/

  $("#pharma_signup").validate({
    errorElement: "span",

    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      pham_name: {
        required: true,
        //  lettersonly: true,
            validUserNameReg:true,
        // minlength: 3
      },
       pham_first_name: {
        required: true,
        //  lettersonly: true,
         validUserNameReg:true,
        // minlength: 3
      },
       pham_last_name: {
        required: true,
        //  lettersonly: true,
         validUsername:true,
        // minlength: 3
      },
      pham_email: {
         required: true,
        email: true
      },
      pham_regn:{
        required:true,
        minlength:8
      },
     file:{
      required:true,
     },
     pham_password: {
      required:true,
      minlength:8
     },
      confpass: {
        required: true,
        minlength: 8,
        equalTo: "#pham_password",
      },
      terms:{
           required: true
      }
    },
    errorElement: "span",

    messages : {

      pham_name: {
        required: "Pharmacy Name field is Required ",
        // lettersonly: "Only Alphabetical Characters are allowed",
        // minlength: 3
      },
      phy_first_name: {
         required: "First Name field is Required",
        //  lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "First Name should be at least 3 characters"
      },
      phy_last_name: {
          required: "Last Name field is Required",
          //  lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "Last Name should be at least 3 characters"
      },
      phy_email: {
        required: "Email field is Required",
        email: "The email should be in the format: abc@domain.tld"
      },

     pham_regn:{
        required:"License Number field is Required",
        minlength: "Licence Number should be at least 8 characters"
      },
      file:{
        required:"License doc is Required",
     },
      pham_password: {
      required:"Password field is Required",
      minlength:"Password should be of atleast 8 characters"
     },
     confpass: {
        required: "Confirm Password field is Required",
        minlength: "Password and Confirm password should be same",
        equalTo: "Password and Confirm password should be same"
      },
      terms:{
        required:"<p>Please Agree The Terms & Conditions<p>"
      }


    }
  });



/*Pharmacist Signup API Implementation*/

    /*api call for registeration form submit*/
 //  $('#pharma_signup').submit(function (event) {
 //    event.preventDefault();

 // alert('here')

 //    /*formvalidation for signup form*/
 //    var pham_name =$('pham_name').val();
 //    var pham_first_name = $('#pham_first_name').val();
 //    var pham_last_name = $('#pham_last_name').val();
 //    var email = $('#pham_email').val();
 //    var pham_regn =$('#pham_regn').val();
 //    var regdoc =$('regdoc').val();
 //    var password = $('#pham_password').val();
 //    var confpassword =$('#confpassword').val();
   
      

 //    // }
 //    //  formData.append('phy_licnse_file', $('input[type=file]')[0].files[0]);  
 //    // console.log(formData);
 //    // return false;
    
 //    if(pham_name!="" && pham_first_name!="" && pham_last_name !=="" && email!="" && pham_regn!="" && lic_doc!="" && password!="" ){
 //    $.ajax({
 //      type: "POST",
 //      url: api_url+"phamsistRegister",
 //      data: new FormData(this),
 //      contentType:false,
 //      cache:false,
 //      processData:false,
 //    }).done(function (res) {
 //     //    alert('done');
  
 //      // console.log(res);
 //      // return false;
 //        if(res.status == true){
 //          $('#message').html(res.message).addClass('alert alert-success');
 //          window.location.href =base_path+"pharmacist_Login";
 //        }else{
 //           $('#message').html(res.message).addClass('alert alert-danger');
 //        }
 //    });
 //   }else{
 //     // $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
 //   }

 //  });


});