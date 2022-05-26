@extends('layouts.vertical-menu.master')
@section('css')
<style>
    .btn-lg {
        min-width: 16.75rem !important;
    }

    .form-label {
        text-align: left !important;
    }
    .infodesign{
        border: 1.5px solid grey;
        border-radius: 10px;
    }

    .error{
     	color: red;
      /* margin-right: 179px; */
    }
    .valid{
	    color: green;
	
   }
   
   .sbmt{
    width: 424px;
    margin-right: 20px;
    float: left;
    border-radius: 15px;
    height: 40px;
    border: none;

}
.medicined{
  margin-right: 185px;
  
}
#submit{
    background-color: #008000!important;
    border-radius: 15px;
    border: none;


}
#prs_med_name{
  width: 625px;
}
#prs_quantity{
  width: 224px;
  margin-left: -5px;
}
#patient_name{
  height: 45px;
}
#addRow{
  width: 866px;
  float: left;
  background-color: #7EC1EC;
  border: none;
  border-radius: 15px;
  height: 40px;
}
.iconn {
     margin-left: 731px;
    
} 

.ti-trash:before {
    content: "\e605";
    position: absolute;
    top: 7.4rem;
    font-size: 15px;
}
.trashd{
    top: -7.2rem!important;
    position: absolute;
    font-size: 15px!important;
}
.hidemm{
  display: none;
  
}
/* select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, blue 50%),
    linear-gradient(135deg, blue 50%, transparent 50%),
    linear-gradient(to right, skyblue, skyblue);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
} */

select::-ms-expand {
  display: none;
}
select {
  appearance: none;
  background-color: transparent;
  margin: 0;
  cursor: inherit;
  
}

@media only screen and (max-width: 1536px){
      .error {
           margin-right: 179px;
       }
}
@media only screen and (max-width: 1440px){
       .page-header{
            width: 100%;
       }
       .error {
           margin-right: 179px;
       }
 

}
@media only screen and (max-width: 1180px){
        #prs_med_name {
          width: 450px;
         }
         #addRow {
            width: 695px;
         }
         .sbmt {
              width: 338px;
        }
}

@media only screen and (max-width: 1080px){
       .page-header{
            width: 100%;
       }
       #prs_med_name {
            width: 366px;
        }
        #addRow {
             width: 608px;
        }
        .sbmt {
             width: 295px;
        }
        .error {
             margin-right: 179px;
       }
}
@media only screen and (max-width: 820px){
      #prs_med_name {
          width: 229px;
       }
       #prs_quantity {
          width: 146px;
          margin-left: -5px;
      }
       #addRow {
           width: 397px;
       }
       .sbmt {
          width: 386px;
      }

}
@media only screen and (max-width: 768px){
     #prs_quantity {
       width: 105px;
       }
       #addRow {
        width: 352px;
     }
     .sbmt {
       width: 352px;
     }
     .iconn {
       margin-left: 305px;
     }

}


@media only screen and (max-width: 480px) {
      .dashboard{
        font-size:20px;
        color:white;
        }
        #prs_med_name{
         width: 200px;
         margin-bottom:18px;
        }
       #prs_quantity{
         border-radius: 5px;
          width: 200px;
          margin-left: -3px;
       }
       #patient_name{
          height: 45px;
          width: 200px;
          border-radius: 5px;

        }
        #prs_information{
          border-radius: 5px;
          width:240px;
        }
        #addRow{
          width:260px;
          margin-left:-15px;

        }
        .sbmt{
             width: 180px;
             margin-left:-15px;
             margin-bottom:10px;
             
            }
            .page-header {
              width:310px;
            }
            textarea{
              width:250px;
            }
}
</style>
@endsection
@section('page-header')
<!-- PAGE-HEADER -->
<div>
    <h1 class="dashboard page-title">Prescription Management</h1>
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
                <h3 class="card-title">Add Prescription</h3>

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
                <form class="login100-form validate-form" enctype="multipart/form-data" id="pat_signup" method="post">
                    @csrf
            
                    <div class="form-group">
                           <select class="form-control col-10 classic" id="patient_name" name="patient_name">
                             <option value="">Select Patient</option> 
                             
                           </select>
                    </div>
                      <!-- input div start -->
                      
                    <div id="" class="inputFormRow">
                    
                      <i class="ti-trash iconn" id="removeRow" style="color: #4ec1ec"></i>
              
                        <div class="row">
                            <div class="col">
                               <input type="text" name="prs_med_name[]" class="form-control m-input" id="prs_med_name" placeholder="Medicine Name" autocomplete="off" />
                               
                            </div>
                            <div class="col">
                                 <input type="text" name="prs_quantity[]" class="form-control m-input" id="prs_quantity"  placeholder="Quantity" autocomplete="off" />
                            </div>
                        </div><br>
                        <div class="row">
                          
                            <div class="col">
                               <textarea class="form-control col-10 prs_information" id="prs_information" rows="3" name="prs_information[]" placeholder="Enter Information"></textarea>
                            </div>
                               
                                
                        </div>
                         
                       
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
                    <button id="addRow" type="button" class="btn btn-info mb-3 mt-3 " >+ Add More Medicine Details</button>

                    <div class="form-group">
                       <a href="{{ url('prescription_management') }}" class="btn btn-danger btn-lg sbmt" data-dismiss="modal">
                           Cancel
                       </a>
                       <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->
                       <input type="submit" class="btn btn-primary btn-lg sbmt" id="submit" name="submit" value="Submit">
                    </div>
            </form>
        </div>
    </div>
    <!-- TABLE WRAPPER -->
</div>
<!-- SECTION WRAPPER -->
</div>

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
    console.log(physician_id)
    console.log(formData)
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
 
 console.log(pat_list[0])

$.each(pat_list[0], function(key,value){
console.log(value.psnt_first_name + value.psnt_last_name);
$("#patient_name").append('<option value="'+value._id+'">'+ value.psnt_first_name + " "+ value.psnt_last_name +'</option>');
});

});




$("#pat_signup").validate({
  
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
        patient_name: {
        required: true,
        // minlength: 3
      },
      prs_med_name: {
        required: true,
        // minlength: 3
      },
      prs_quantity: {
         required: true,
         number: true,
         minlength: 1

      },
      
    },
    
    messages : {
        patient_name: {
         required: "Patient Name field is Required",
         lettersonly:"Only Alphabetical Characters are allowed & Space Not allowed",
        // minlength: "First Name should be at least 3 characters"
      },
      prs_med_name: {
          required: "Medicine Name field is Required",
           lettersonly:"Only Alphabetical Characters are allowed & Space Not allowed",
        // minlength: "Last Name should be at least 3 characters"
      },
      prs_quantity: {
        required: "Quantity field is Required",
        minlength: "minimum lenght one",
        number: "Enter Number Only"
        
      }


    }
  });
 
/*add prescription added here*/

$('#pat_signup').submit(function(event) {
   // console.log(event.target);
        event.preventDefault();
        // alert('thhhhhhhhhhhhh')
        let patientid;
       
           patientid = $('#patient_name').val();
       
      
        let physician_det = localStorage.getItem('user_det');
             
              var prs_med_name = document.getElementsByName('prs_med_name[]').value; 
              var quantity = document.getElementsByName('prs_quantity[]').value; 
              var prs_information = document.getElementsByTagName('textarea').value; 
            //  console.log(prs_med_name,quantity,prs_information);
              
              var namevalues = [];
              var quanvalues = [];
              var infovalues = [];
              $("input[name='prs_med_name[]']").each(function(i) {
                namevalues.push($(this).val());
                 
              });
              $("input[name='prs_quantity[]']").each(function(i) {
                quanvalues.push($(this).val());
               
            });
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
         

              let formdata1={
                patient_id: patientid,
                physician_id:phy_id ,
                prs_details: JSON.stringify(values),
            }

                

                // console.log("Fdata",formdata1);
                // return false;
              if(patientid !="" && physician_id !="" && (namevalues.length >0) &&  (quanvalues.length >0) &&(infovalues.length>0)){
                $.ajax({
                  type: "POST",
                  url: api_url + "addPrescription",
                  data: formdata1,
              }).done(function(res) {
                     //alert('done');

                     console.log(res);
                    //  return false;
  
                   if(res.status == true){
                    $(':input[type="submit"]').prop('disabled', true);

                  $('#message').html(res.message).addClass('alert alert-success');
                  setInterval(window.location.href= base_path +"prescription_management",500);
        }else{
          //  $('#message').html(res.message).addClass('alert alert-danger');
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
        html += '<input type="text" name="prs_med_name[]" id="prs_med_name" class="form-control m-input col-6" placeholder="Medicine Name" autocomplete="off">';
        html += '<input type="text" class="form-control col-4 ml-3" name="prs_quantity[]" id="prs_quantity" placeholder="Quantity">';
        html += '<div class="input-group-append">';
        html += '<i class="ti-trash mt-3 ml-3 trashd" id="removeRow" style="color: #4ec1ec"></i>';
        html += '</div>';
        html += '</div>';
        html += '<div class="form-group inputFormRow"><textarea class="form-control col-10 " id="prs_information" rows="3" name="prs_information[]" placeholder="Enter Information"></textarea></div>';
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