


$(document).ready(function(){
  var url=window.location.href;
var locale=url.substr(url.lastIndexOf('/') +1);

var api_url="http://3.220.132.29:3000/api/";
 var base_path = "http://3.220.132.29/medpro/"; 
// var base_path = "http://localhost:8000/"


// jquery validation for English
// jQuery.validator.addMethod('validUserName', function (value) 
// {
// var regex = new RegExp("^[a-zA-Z .'()-]*$");
//         var key = value;

//         if (!regex.test(key))
//          {
//           return false;
//         }
//         return true;
// }, 'Please Enter a Valid Name | رجاء ادخل اسما صحيحا');



// jquery validation for English and arabic
jQuery.validator.addMethod('validUserName', function (value) 
{
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

    //trim white spaces
document.addEventListener('change', function (ev) {
  if(ev.target.tagName === 'INPUT' || ev.target.tagName === 'TEXTAREA')
    // alert('change')
  // ev.target.trim().toLowerCase();
   TrimText(ev.target);
});

function TrimText(el) {
  // console.log(el.value)
  el.value = el.value.
  replace(/(^\s*)|(\s*$)/gi, "").
  replace(/[ ]{2,}/gi, " ").
  replace(/\n +/, "\n");
  return;
 }

 //end trim white spaces



    $("#signupform").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      phy_first_name: {
        required: true,
        validUserName:true,
      // lettersonly: true,
        // minlength: 3
      },
       phy_last_name: {
        required: true,
        validUserName:true,
        // lettersonly: true,
        // minlength: 3
      },
      phy_email: {
         required: true,
         email: true
      },
      phy_licnse:{
        required:true,
        minlength:8
      },
     file:{
      required:true,
     },
     phy_password: {
      required:true,
      minlength:8
     },
      confpass: {
        required: true,
        minlength: 8,
        equalTo: "#password",
      },
      terms:{
           required: true
      }
    },
    messages : {
      phy_first_name: {
         required: "First Name field is Required | حقل الاسم الأول مطلوب",
         // lettersonly:"Only Alphabetical Characters are allowed",
        // minlength: "First Name should be at least 3 characters"
      },
      phy_last_name: {
          required: 'Last Name field is Required | حقل "الاسم الأخير" مطلوب ',
           lettersonly:'Only Alphabetical Characters are allowed | يسمح فقط باستخدام الأحرف الأبجدية',
        // minlength: "Last Name should be at least 3 characters"
      },
      phy_email: {
        required: "Email field is Required | حقل البريد الإلكتروني مطلوب",
        email: "The email should be in the format: abc@domain.tld | يجب أن يكون البريد الإلكتروني بالتنسيق: abc@domain.tld"
      },

     phy_licnse:{
        required:"License Number field is Required | حقل رقم الترخيص مطلوب",
        minlength: "Licence Number should be at least 8 characters | يجب ألا يقل رقم الترخيص عن 8 أحرف"
      },
      file:{
        required:"License doc is Required | مطلوب مستند الترخيص",
     },
      phy_password: {
      required:"Password field is Required | حقل كلمة المرور مطلوب",
      minlength:"Password should be of atleast 8 characters | يجب أن تتكون كلمة المرور من 8 أحرف على الأقل"
     },
     confpass: {
        required: "Confirm Password field is Required | حقل تأكيد كلمة المرور مطلوب",
        minlength: "Password and Confirm password should be same | يجب أن تكون كلمة المرور وتأكيد كلمة المرور متطابقتين",
        equalTo: "Password and Confirm password should be same | يجب أن تكون كلمة المرور وتأكيد كلمة المرور متطابقتين"
      },
      terms:{
        required:"<p>Please Agree The Terms & Conditions |يرجى الموافقة على الشروط والأحكام<p>"
      }


    }
  });

  $('#file').on('change',function(){
    var fakepath =$('#file').val();
    var filename=fakepath.split("\\").pop();
    // alert(file)
    if(filename){
      $(".file-name_reg").html(filename);
      $(".file-error").hide();
    }
  });
/*api call for physician registeration form submit*/
  $('#signupform').on('submit',function (event) {
    event.preventDefault();

    $('#terms').on('change', function(){
      this.value = this.checked ? 1 : 0;
      // alert(this.value);
   }).change();

    /*formvalidation for signup form*/
    var first_name= $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var licence_no =$('#licence_no').val();
    var file =$('file').val();
    var password = $('#password').val();
    var confpassword =$('#confpassword').val();
    var terms=$('#terms').val();
 
    console.log(terms, 'chk');
    if(first_name!="" && last_name !=="" && email!="" && licence_no!="" && file!="" && password!="" && confpassword !="" && terms=="1" ){
    $.ajax({
      type: "POST",
      url: api_url+"PhysicianRegister",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
    }).done(function (res) {
        // alert(res) 
      // console.log(res);
      // return false;
	      if(res.status == true){
	      	$('#message').html(res.message).addClass('alert alert-success');
	      	// window.location.href =base_path+"login";
          window.location.href = base_path+"login"

	      }else{
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
    //  alphanumeric: true

     }
      
    },
          errorElement: "span",

    messages : {
     
      email: {
        required: "Email field is Required | حقل البريد الإلكتروني مطلوب",
      },

      pass: {
      required:"Password field is Required | حقل كلمة المرور مطلوب",
      minlength:"8 characters Required  |مطلوب 8 أحرف",
      // alphanumeric: "Password Should be Alphanumeric",

     },
    


    }
  });

/*api call for login form submit*/

  $("#loginform").submit(function (event) {
  	 event.preventDefault();

  
 
  var phy_email = $('#email').val();
    var phy_password = $('#password').val();


    var formData = {
    phy_email:$('#email').val(),
    phy_password:$('#password').val() ,
    };
 console.log(phy_password.length, 'phy_password.length');
   if(phy_email!="" &&  phy_password !=="" && phy_password.length >=8){
    $.ajax({
      type: "POST",
      url: api_url+"physicianLogin",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (res) {
      console.log(res.data);
      localStorage.setItem('user_det', JSON.stringify(res.data));
     

        if(res.status == true){
        	$('#message').html(res.message + "تم تسجيل الدخول بنجاح").addClass('alert alert-success');
        	window.location.href=base_path+"dashboard";
        }else{
          //  $('#message').html(res.message).addClass('alert alert-danger');
           $('#hidepp').html(res.message).removeClass('hidep');
        }

  });
   
 }

 });

    /*api call for forgot password*/
     // $("#forgot_pass").validate({
     //  errorElement: "span",
     //  errorClass: "error fail-alert",
     //   validClass: "valid success-alert",
     //  rules: {
        
     //     eemail: {
     //        required: true,
         
     //     },
     //     messages : {
     
     //       eemail: {
     //        required: "Email field is Required | حقل البريد الإلكتروني مطلوب",
     //       },
     //     }
     //   }
     //   });

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
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href=base_path+"forgot_password2";
        }else{
          //  $('#message').html(res.message).addClass('alert alert-danger');
          $('#hideem').html(res.message).removeClass('hideemail');

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
        validUserName:true
        
        
      },
       pham_first_name: {
        required: true,
        validUserName:true
        // lettersonly: true
       
      },
       pham_last_name: {
        required: true,
        // lettersonly: true,
        validUserName:true
      },
      pham_email: {
         required: true,
        email: true
      },
      pham_address: {
        required: true
      },
      pham_registration_num:{
        required:true,
        minlength:8
      },
     file:{
      required:true
     },
     pham_password: {
      required:true,
      minlength:8
     },
      confpass: {
        required: true,
        minlength: 8,
        equalTo: "#pham_password"
      },
      terms:{
           required: true
      }
    },
    errorElement: "span",

    messages : {

     pham_name: {
        required: "Pharmacy Name field is Required | حقل اسم الصيدلية مطلوب"
     
      },
      pham_first_name: {
        required: "First Name field is Required | حقل الاسم الأول مطلوب",
        lettersonly:"Only Alphabetical Characters are allowed |يسمح فقط باستخدام الأحرف الأبجدية"
    
     },
      pham_last_name: {
          required: 'Last Name field is Required |حقل "الاسم الأخير" مطلوب'
       
      },
      pham_email: {
        required: "Email field is Required | حقل البريد الإلكتروني مطلوب",
        email: "The email should be in the format: abc@domain.tld | يجب أن يكون البريد الإلكتروني بالتنسيق: abc@domain.tld"
      },
      pham_address: {
        required: "Address field is Required |حقل العنوان مطلوب"
      },
      pham_registration_num:{
        required:"License Number field is Required |حقل رقم الترخيص مطلوب",
        minlength: "Licence Number should be at least 8 characters | يجب ألا يقل رقم الترخيص عن 8 أحرف"
      },
      file:{
        required:"License doc is Required |مطلوب مستند الترخيص",
     },
      pham_password: {
      required:"Password field is Required | حقل كلمة المرور مطلوب",
      minlength:"Password should be of atleast 8 characters | يجب أن تتكون كلمة المرور من 8 أحرف على الأقل"
     },
     confpass: {
        required: "Confirm Password field is Required |حقل تأكيد كلمة المرور مطلوب",
        minlength: "Password and Confirm password should be same | يجب أن تكون كلمة المرور وتأكيد كلمة المرور متطابقتين",
        equalTo: "Password and Confirm password should be same | يجب أن تكون كلمة المرور وتأكيد كلمة المرور متطابقتين"
      },
      terms:{
        required:"<p>Please Agree The Terms & Conditions |يرجى الموافقة على الشروط والأحكام<p>"
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