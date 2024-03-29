@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{URL::asset('assets/css/phy.css')}}" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<!-- <script type="text/javascript">
$(document).ready(function() {
    $('.js-example-responsive').select2({
    placeholder: "Please select a Patient",
    allowClear: true
  });
});

</script> -->
<style type="text/css">
     .input-group-append{
        margin-top:1.5rem !important;
    }
@media (min-width: 414px) and (max-width:896px) {
      #profile-user{
        position: relative!important;
        left: 0rem!important;
       
     }

     .dropdown-menu{
        text-align:right;
        left: 9rem;
      }
    }
</style>
@endsection
@section('page-header')
<!-- PAGE-HEADER -->
<div>
    <h1 class="dashboard page-title">{{__('addpres.pres_mgmt')}}</h1>
    <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
</div>


<!-- PAGE-HEADER END -->
@endsection
@section('content')

<div class="container">

    <div class="col-md-12 col-lg-12">
        <div class="card">
           
            <div class="card-header">
                <h3 class="card-title">{{__('addpres.add_pres')}}</h3>

                <div class="ml-auto pageheader-btn">
                    <!-- <a href="{{ url('add_patient') }}" class="btn btn-primary btn-icon text-white mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a> -->

                </div>


            </div>
            <div class="card-body">
                <div id="message">
                </div>
                <form class="login100-form validate-form preform" enctype="multipart/form-data" id="pat_signup" method="post">
                    @csrf
            
                    <div class="form-group">
                           <select class="js-example-responsive form-control col-10 classic " id="patient_name" name="patient_name">
                             <option value="">{{__('addpres.sel')}}</option> 
                    </select>
                    </div>
                      <!-- input div start -->
                      
                    <div id="" class="inputFormRow">
                    
                      <i class="ti-trash iconn" id="removeRow" style="color: #4ec1ec"></i>
              
                        <!-- <div class="row"> -->
                            <!-- <div class="col"> -->
                               <input type="text" name="prs_med_name[]" class="form-control m-input" id="prs_med_name" placeholder="{{__('addpres.med_name')}}" 
                               autocomplete="off" />
                               
                            <!-- </div> -->
                            <!-- <div class="col"> -->
                                 <input type="text" name="prs_quantity[]" class="form-control m-input prs_quantity" id="prs_quantity"  placeholder="{{__('addpres.qty')}}" autocomplete="off" />
                            <!-- </div> -->
                        <!-- </div><br> -->
                        <!-- <div class="row"> -->
                          
                            <!-- <div class="col"> -->
                               <textarea class="form-control col-10 prs_information" id="prs_information[]" rows="3" name="prs_information[]" placeholder="{{__('addpres.info')}}"></textarea>
                            <!-- </div> -->
                               
                                
                        <!-- </div> -->
                         
                       
                    </div><br>
                     <!-- input div End-->

                    <!-- dynamic field inside div -->
                    <div id="newRow"></div>
                   <!-- dynamic field inside div -->


                    <!-- add -->
                    <!-- <div id="addinfo" class="border">
                     <h5 class="text-center">Medicine Details</h5>
                    </div> -->
                    <!-- add -->

                    <!-- box start -->
                    <!-- <div class="infodesign">
                        <div class="design">
                            <div class="row">
                                <div class="col">
                                    <h4>Medicine Name</h4>
                                </div>
                                <div class="col">
                                    <h4>Qty</h4>
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="text-center">Describtion</h4>
                            </div>
                        </div>
                    </div> -->

                    <!-- box End-->


            <!-- <div class="box border " id="box"></div> -->
                   <h5 class="text-red hidemm" id="hidea"></h5>
                    <button id="addRow" type="button">+ {{__('addpres.add_more')}}</button>

                    <!-- <div class="form-group"> -->
                       <a href="{{ url('prescription_management') }}" class="cancelbutton" data-dismiss="modal">
                        {{__('addpres.can')}}
                       </a>
                       <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->
                       <input type="submit" class="acceptbutton" id="submit" name="submit" value=" {{__('addpres.sub')}}">
                    <!-- </div> -->
            </form>

         </div> 
    </div>
    <!-- TABLE WRAPPER -->
 </div> 
<!-- SECTION WRAPPER -->
</div> 
<!-- </div> -->
<!-- </div> --> 

<!-- ROW-1 CLOSED -->


@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
<script src="{{ URL::asset('assets/js/formapi.js') }}"></script>
<script>
    // var pat_list=[{}];
//     var pat_list=JSON.parse(localStorage.getItem('patientList'));
 
//     console.log(pat_list[0])
  
// $.each(pat_list[0], function(key,value){
//   console.log(value.psnt_first_name + value.psnt_last_name);
//   $("#patient_name").append('<option value="'+value._id+'">'+ value.psnt_first_name + " "+ value.psnt_last_name +'</option>');
// });


</script>
<script>

    /*load patient list on this page*/
    // <script>
 $(document).ready( function () {
     var api_url="http://3.220.132.29:3000/api/";
   var base_path = "http://3.220.132.29/medpro/"; 
      var user_details=localStorage.getItem('user_det');
    var details =JSON.parse(user_details);
    var physician_id=details._id;
        // var _token =document.querySelector('[name="_token"]').value;
     var formData = {
        physician_id:physician_id,
    };
    // console.log(physician_id)
    // console.log(formData)
  $.ajax({
      type: "POST",
      url: api_url+"patientList",
      dataType:"json",
      data: {
        physician_id:physician_id,
    },
    }).done(function (res) {


       var patientList=[];
        patientList.push(res.data);
    localStorage.setItem('patientList',JSON.stringify(patientList));

    var pat_list=JSON.parse(localStorage.getItem('patientList'));
 
 // console.log(pat_list[0].sort())
 pat_list[0]=pat_list[0].sort()
$.each(pat_list[0], function(key,value){
// console.log(value.psnt_first_name + value.psnt_last_name);
$("#patient_name").append('<option value="'+value._id+'">'+ value.psnt_first_name + " "+ value.psnt_last_name +'</option>');
});

});



jQuery.validator.addMethod('validUsername', function (value) 
{
var regex = new RegExp("^[a-zA-Z .'()-]*$" || "شا زا زت");
        var key = value;
      if (!regex.test(key))
         {
          return false;
        }
        return true;
}, 'Please enter a valid name' || "رجاء ادخل اسما صحيحا");




$("#pat_signup").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
        patient_name: {
        // required: true,
        // minlength: 3
      },
      'prs_med_name[]': {
         // required: true,
     // minlength: 2
      },
      'prs_quantity[]': {
         // required: true,
         number: true,
         minlength: 1
      },
      'prs_information[]':{
        // required:true,
      }

      
    },
    
    messages : {
        patient_name: {
         // required: "Patient Name field is Required |حقل اسم المريض مطلوب",
        //  lettersonly:"Only Alphabetical Characters are allowed & Space Not allowed | يُسمح فقط باستخدام الأحرف الأبجدية ولا يُسمح باستخدام المسافات",
        // minlength: "First Name should be at least 3 characters"
      },
      'prs_med_name[]': {
          // required: "Medicine Name field is Required |حقل اسم الدواء مطلوب",
           lettersonly:"Only Alphabetical Characters are allowed & Space Not allowed | يُسمح فقط باستخدام الأحرف الأبجدية ولا يُسمح باستخدام المسافات",
        // minlength: "Last Name should be at least 3 characters"
      },
      'prs_quantity[]': {
        // required: "Quantity Nmae field is Required |حقل الكمية مطلوب",
        minlength: "Minimum Lenght One |الحد الأدنى لطول واحد",
        number: "Enter Number Only | أدخل الرقم فقط"
        },
        'prs_information[]':{
        // required:"Information Name field is Required",
        }


    }
  });
 
/*add prescription added here*/

$('#pat_signup').submit(function(event) {
  
  
        event.preventDefault();
       
        let patientid;
       
        patientid = $('#patient_name').val();
           
      
        let physician_det = localStorage.getItem('user_det');
       


         // var prs_med_name = document.getElementsByName('prs_med_name[]').value; 
              // var quantity = document.getElementsByName('prs_quantity[]').value; 
              // var prs_information = document.getElementsByTagName('textarea').value; 
             // console.log(prs_med_name,quantity,prs_information);

        var prs_med_name = $('#prs_med_name').val();
        var prs_quantity = $('#prs_quantity').val();
        var prs_information = $('textarea').val();
        // console.log(prs_med_name,prs_quantity,prs_information,"data....")
        
             
             
              
              var namevalues = [];
              var quanvalues = [];
              var infovalues = [];
              $("input[name='prs_med_name[]']").each(function(i) {
                namevalues.push($(this).val());
                 
              });


              // $("input[name='prs_med_name']").each(function(i) {
              //   namevalues.push($(this).val());
              // });
              
              $("input[name='prs_quantity[]']").each(function(i) {
                quanvalues.push($(this).val());
               
            });


            //   $("input[name='prs_quantity']").each(function(i) {
            //     quanvalues.push($(this).val());
               
            // });
           

            // $("textarea[name='prs_information']").each(function(i) {
            //   infovalues.push($(this).val());
             
            // });


             $("textarea[name='prs_information[]']").each(function(i) {
              infovalues.push($(this).val());
             
            });
           



            var values = [];
            // namevalues.each((i)=>{
            //   values.push({'name':namevalues[i], 'quantity':quanvalues[i], 'info':infovalues[i]})
            // })
            namevalues.forEach((element,i) => {
              values.push({'prs_med_name':namevalues[i], 'prs_quantity':quanvalues[i], 'prs_information':infovalues[i]})
            });

            // alert(values);
            // console.log(values);
                physician=   JSON.parse(physician_det);
               
                var phy_id = physician._id;

                // console.log(values,"valuesss")
         

              let formdata1={
                patient_id: patientid,
                physician_id:phy_id ,
                prs_details: JSON.stringify(values),
            }

            console.log(formdata1,"formdata")
 
              if(patientid !="" && physician_id !="" && (namevalues.length >0) &&  (quanvalues.length >0) &&(infovalues.length>0)){
                $.ajax({
                  type: "POST",
                  url: api_url + "addPrescription",
                  data: formdata1,
              }).done(function(res) {
                     //alert('done');
                     // console.log(res);
                    //  return false;
  
                   if(res.status == true){
                    $(':input[type="submit"]').prop('disabled', true);

                  $('#message').html(res.message).addClass('alert alert-success');
                  setInterval(window.location.href= base_path +"prescription_management",500);
        }else{
           // $('#message').html(res.message).addClass('alert alert-danger');
           $('#hidea').html(res.message).removeClass('hidemm');

        }

                
              });
              }else{

              }
           

               
        });



    });

   


</script>




<script type="text/javascript">

    var i =0;

    $("#addRow").click(function() {
    i++;
        var html = '';
        html += '<div class="inputFormRow">';
        // html += '<h4 class="text-primary medicined">Medicine details '+i+'</h4>';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="prs_med_name[]" id="prs_med_name" class="form-control m-input col-6" placeholder="{{__('addpres.med_name')}}" autocomplete="off">';
        html += '<input type="text" class="form-control col-4 ml-3" name="prs_quantity[]" id="prs_quantity" placeholder="{{__('addpres.qty')}}">';
        html += '<div class="input-group-append">';
        html += '<i class="ti-trash mt-3 ml-3 trashd" id="removeRow" style="color: #4ec1ec"></i>';
        html += '</div>';
        html += '</div>';
        html += '<div class="form-group inputFormRow"><textarea class="form-control col-10 " id="prs_information" rows="3" name="prs_information[]" placeholder="{{__('addpres.info')}}"></textarea></div>';
        // <i class="ti-plus  mt-3 ml-3" id="submitrow" style="color: blue"></i>
        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
            $(this).closest('.inputFormRow').remove();
        });
</script>


<!-- <script>
    $(document).on('click', '#submitrow', function() {
        $("#addinfo").append($(".inputFormRow").html(this.value));

    });
</script> -->
<script>
// $(document).ready(function() {

// $("#pat_signup").validate();

// $('input[name^="prs_quantity"]').each(function() {
//     $(this).rules('add', {
//         required: true
//     });
    
// });
// $('input[name^="prs_med_name"]').each(function() {
//     $(this).rules('add', {
//         required: true
         
//     });
  
// });
// $('textarea[name^="prs_information"]').each(function() {
//     $(this).rules('add', {
//         required: true
        
//     });
  
// });


// });
</script>



@endsection