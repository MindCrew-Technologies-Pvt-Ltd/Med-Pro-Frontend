@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{URL::asset('assets/css/phy.css')}}" rel="stylesheet" />


<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<style>
   
.ebtn{
    background-color: #5e2dd8;
    width: 88px;
    height: 35px;
    border-radius: 10px;
    color: white;
    margin-right: 10px;
}
.dbtn{
    background-color: #cf142b;
    width: 88px;
    height: 35px;
    border-radius: 10px;
    color: white;
}
.mdbtn{
    background-color: #008000;
   
}
</style>
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
		    <div class="row">
                          
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    
                                    <div class="card-header">
                                        <h3 class="card-title viewp">View Prescription</h3>
                                        
                                   <div class="ml-auto pageheader-btn">
                                            <a href="{{ url('add_prescription') }}" class="btn btn-primary btn-icon text-white mr-2 bttttn">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a>
                                           
                                    </div>


                                    </div>
                                    <div class="card-body">
                                        <hr class="new1">
                                         <div class="text-center" id="message">
                                               
                                             </div>
                                        <div class="table-responsive">
                                            <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                                <thead class="text-lowercase">
                                                    <tr>
                                                        <th class="wd-15p">S No.</th>
                                                        <th class="wd-15p">First name</th>
                                                        <th class="wd-15p">Last name</th>
                                                        <th class="wd-20p">Notes</th>
                                                        <!-- <th class="wd-15p">Information</th> -->
                                                        <th class="wd-10p">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                              
                                                   
                                                </tbody>
                                            </table>

                                             <!-- MODAL -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Patient Profile</h5>
                                    <button type="button" class="close clear" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
<!-- Modal body -->
<div class="modal-body">
            <div class="form-group">
                <label class="form-label">Physician name</label>
                <input type="text" class="form-control w-100 fa fa-plus" name="physician_name" id="physician_name" placeholder="Physician name" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Patient name</label>
                <input type="text" class="form-control w-100" name="patient_name" id="patient_name" placeholder="Patient name" disabled>
            </div>
             <!-- table  start -->
            <div class="card-body1">
                     <div class="text-center" id="message">
                      
                    </div>
               <div class="table-responsive">
                       <table id="myTable02"  class="table table-striped table-bordered text-nowrap w-100 text-lowercase">
                           <thead class="text-lowercase">
                                <tr>
                                    <th class="wd-15p">Serial Number</th>
                                    <th class="wd-15p">Name of the medicine</th>
                                    <th class="wd-15p">Quantity</th>
                               </tr>
                           </thead>
                       <tbody id="myTable02body">
                     
                          
                       </tbody>
                       </table>
               </div>
           </div>
           <!-- TABLE WRAPPER -->

                            <!-- <div class="form-group">
                                <label class="form-label"></label>
                                <input type="text" class="form-control" name="notes" id="notes"placeholder="Notes" >
                            </div> -->
                            <div id="messagee"></div>

                            
                            <table class="table" id="noteslist1">
                                <h5>Notes</h5>
                                <thead>
                                   <tr>
                                      <th scope="col">Notes</th>
                                   </tr>
                                </thead>
                               <tbody id="tbodynotes">

                                </tbody>
                             </table>

                             <form method="post" id="addnotes">
                                @csrf 
                              <!-- <h4 class="otherlabel">Physician Notes</h4><br><br>
                              
                             <input type="text" class="form-control w-100" name="" value="" id="noteslist1" style="border-radius: 7px"disabled><br>
                              
                            
                             <h4 class="otherlabel">Pharmacist Note</h4><br><br>

                             <input type="text" class="form-control w-100" name="noteslist2" value="" id="noteslist2" style="border-radius: 7px" disabled> -->

          
                             <div class="form-group">
                                 <input type="hidden" name="prescription_id" id="prescription_id" value="">
                                 <input type="hidden" name="sender_id" id="sender_id" value="">
                                 <input type="hidden" name="sender_type" id="sender_type" value="physician">
                                 <label class="form-label"></label>
                            </div>

                            
                            <h4 class="otherlabel">Add Notes</h4><br><br>
                            <div class="form-group">
                               <!-- <textarea class="form-control col-10 message" id="message1" rows="3" name="message" placeholder="Enter Information" value=""></textarea> -->
                               <input type="text" class="form-control w-100" style="border-radius: 7px" name="message" id="message1" placeholder="Enter Notes" value="" >
                           </div>
                             <button type="submit" class="btn btn-success" id="notesbtn">Add Notes</button>
                     </form>

</div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-primary clear ok" id="clear" data-dismiss="modal">Ok</button> -->
                                   <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL CLOSED -->


                                        </div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
 $(document).ready( function () {
     var api_url="http://3.220.132.29:3000/api/";
   
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
      url: api_url+"PrescriptionPaitentList",
      dataType:"json",
      data: {
        physician_id:physician_id,
    },
    }).done(function (res) {
        let data =res.data;
        console.log(data);
   
    //   console.log(res)
    //   return false;

       var patientList=[];
        patientList.push(res.data);
       console.log(res.data.length);
       //  for(var i = 0; i < res.data.length; i++) {
	      // patientList.push(res.data);
       //  }
    console.log(patientList);
    localStorage.setItem('patientList',JSON.stringify(patientList));

          
          if(res.data.length>0){
         res.data.map((e,i) => {
           
            i++;
              $("#myTable").append('<tr><td>'+i+'</td><td>'+e.psnt_first_name+'</td><td>'+e.psnt_last_name+'</td><td>'+e.message+'</td><td><button  id="'+e.prescription_id+'" onclick="editdata1(this)" class="btn btn-info in-btn text-white ebtn" data-toggle="modal" data-target="#exampleModal">View</button><button type="button" class="btn dbtn " data-toggle="modal" data-target="#exampleModalCenter'+e.prescription_id+'">Delete</button></td></tr>');         
              $("#myTable").append('<div class="modal fade" id="exampleModalCenter'+e.prescription_id+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>Are you sure <br><br>you want to delete this prescription?</h4></div><div class="modal-footer"><button type="button" class="btn btn-danger sbmt" data-dismiss="modal">Cancel</button><button id="'+e.prescription_id+'" onclick="deletedata(this)" class="btn text-white sbmt mdbtn">Yes Delete It!</button></div></div></div></div>');         

            });
     }

});







    });

</script>


<!-- medicine  -->
<script>
 $(document).ready( function () {

     var api_url="http://3.220.132.29:3000/api/";
   
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
      url: api_url+"PrescriptionList",
      dataType:"json",
      data: {
        prescription_id:physician_id,
    },
      // contentType:false,
      // cache:false,
      // processData:false,
    }).done(function (res) {
      console.log("resposss",res)
    //   return false;

       var patientList=[];
        patientList.push(res.data);
       console.log(res.data.length);
       //  for(var i = 0; i < res.data.length; i++) {
	      // patientList.push(res.data);
       //  }
    console.log(patientList);
    localStorage.setItem('patientList',JSON.stringify(patientList));

       

         res.data.map((e,i) => {
           
            i++;
              $("#myTable02body").html('<tr><td>'+i+'</td><td>'+e.prs_med_name+'</td><td>'+e.prs_quantity+'</td>');         
    });

});

// calling edit data


    });

</script>
<script>

function deletedata($this){
    var base_path = "http://3.220.132.29/medpro/"; 
      var api_url="http://3.220.132.29:3000/api/";
    //   var id1= $this.attr('id');
  var id=$this.id;
  console.log(id);
//   console.log(id1);
//   return false;
   $.ajax({
      url: api_url+"deletePrescription",
      type: "POST",
        dataType: 'json', 
      data:{
        prescription_id:id,
      }
    }).done(function (res) {
        console.log("response for detele successfully",res);
        // return false;
        
        if(res.status == true){
            
            $('.mdbtn').prop('disabled', true);
            location.reload(true);
            // $('#message').html(res.message).addClass('alert alert-success');
            
          
          window.location.href= base_path + "prescription_management";
          
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
}




    function editdata1($this){
    var api_url="http://3.220.132.29:3000/api/";
    var id=$this.id;
console.log(id)
    // return false;

$(document).ready(function(){
var counter=1;
    $.ajax({
      url: api_url+"PrescriptionList",
      type: "post",
      dataType: 'json', 
      data:{
        prescription_id:id,

      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
            $("#patient_name").val(res.data.patient_name) ;   
            $('#physician_name').val(res.data.physician_name);
            $('#prescription_id').val(res.data._id);
            $('#sender_id').val(res.data.physician_id);
            res.data.prs_details.map((e,i) => {
           i++;
           if(counter<=1){
            $("#myTable02").append('<tr><td>'+i+'</td><td>'+e.prs_med_name+'</td><td>'+e.prs_quantity+'</td>'); 
            }        
   });              
    });

  var user_details123=localStorage.getItem('user_det');
    var details1 =JSON.parse(user_details123);
    var physician_id=details1._id;
    $.ajax({
      url: api_url+"notesList",
      type: "post",
      dataType: 'json', 
      data:{
        prescription_id:id,
        user_id:physician_id,
        user_type:"Physician"
      },
    
    }).done(function (res1) {
        $("#noteslist1").html('');
        let data1 =res1.data;
        console.log("data1",data1);
     var counter=0;
     var row='';
 
         if(res1.data.length > 0){
            counter++;
            
        res1.data.map((e,i) => {
           
            
            if(e.sender_type =='Phamaciest'){
               $("#noteslist1").append('<tr><td><li class="list-group-item list-group-item-primary" style="text-align:justify;text-align-last: left;list-style-type:none;background-color: #f1f1f9;"><h4>Pharmacist Note</h4>'+e.message+'</li></td><tr>') ;
            } else if(e.sender_type =='physician'){
               $("#noteslist1").append('<tr><td><li class="list-group-item list-group-item-secondary" style="text-align:justify;text-align-last: right;list-style-type:none;background-color: #e3e0ea;"><h4>Physician Notes</h4>'+e.message+'</li></td><tr>') ;
            }
            else{

            }       
   });
   
         $("#noteslist1").append(row);   
       }else{
        row="";
           $("#noteslist1").html('');
        
     }
       
    });  
     
})
  
   
   }



</script>
<script>
    $('.clear').on('click',function(){
        // alert('clicked');
        $('#myTable02body').empty();
    })
</script>

<!-- ADD  NOTEs API CALLING -->

<script>
    var api_url="http://3.220.132.29:3000/api/";
   var base_path = "http://3.220.132.29/medpro/"; 
   $("#addnotes").validate({
      errorElement: "span",
    // $('.eye1 i').css({'display':'none'});       
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
        message:{
            required: true,
        }
    },
    messages:{
        message:{
            required: "Please Enter Notes",
        }
    }
})
$('#addnotes').submit(function (event) {
    event.preventDefault();
    /*formvalidation for signup form*/
     var message1 = $('#message1').val();
     var prescription_id =$('#prescription_id').val();
     var sender_id =$('#sender_id').val();
     var sender_type =$('#sender_type').val();

    var formdata = {
        prescription_id: prescription_id,
        sender_id: sender_id,
        message: message1,
        sender_type: sender_type,
};

    
    if(message !="" ){
    $.ajax({
      type: "POST",
      url: api_url+"addPresNotes",
      data: formdata,
      dataType: "json",
    }).done(function (res) {
      console.log(res);
	      if(res.status == true){
	      	$('#messagee').html(res.message).addClass('alert alert-success');
	      	window.location.href =base_path+"prescription_management";
	      }else{
	        //  $('#messagee').html(res.message).addClass('alert alert-danger');
	      }
    });
   }else{
     // $('#message').html('<p style="color:red;">'+'All the fields are mandatory'+'</p>');
   }

  });

    
</script>

<script>
//     $(document).ready( function () {
//     $('#myTable').DataTable();
// } );
</script>
<script>  

</script>

@endsection




