@extends('layouts.vertical-adminmenu.master')
@section('css')
<link href="{{URL::asset('assets/css/phy.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<style>

     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap'); 

    *{
       font-family: 'Poppins', sans-serif;
       /*text-transform: capitalize;*/
};


       card-header:first-child {
           border-radius: 2px 2px 0 0;
           margin-top: -13px;
           width: 1050px;
           font-size: 21px;
         }
.form-control:disabled, .form-control[readonly] {
    width: 100%;
    background-color: #F1F1F9;
    opacity: 1;
}
.modal-conten{
    border-radius: 25px;
}
#myTable{
    text-transform: capitalize;

}
.sbmt{
    width: 203px;
    margin-right: 20px;
    margin-top: 10px;
    float: left;
    border: none;
    border-radius: 10px;
    box-shadow: none;
}
.mdbtn{
    background-color: #008000;
   
}
hr.new1 {
    border-top: 1px solid black;
    margin-top: -20px;
    width: 1150px;
    margin-left: -27px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.5rem;
    margin: 0;
    position: relative;
    /*width: 1150px;*/
    width: 1160px;
    margin-left: 14px;
}
.form-label{
    text-align:left!important;
    font-size: 18px;
    color: #7d7a7a;
}

.viewp{
    color: #7d7a7a;
    font-size: 1.1rem;
    margin-left: 10px;
}
.bttttn{
    width: 120px;
    height: 35px;
    color: white;
    background-color:#7ec1ec;
    border: none;
    border-radius: 10px;
    text-align: center;
    margin-left: 1px;

}
.dashboard{
 /*   font-size: 30px;*/
    font-weight: 400;


}
/* .card-body {
    flex: 1 1 auto;
    padding: 1.5rem;
    margin: 0;
    position: relative;
    margin-left: 35px;
    width: 1127px;
} */

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
.ok{
    border: none;
    border-radius: 10px;
    height: 30px;
    width: 50px;
    text-align: center;
    align-items: center;
    padding: 2px;
}
.btnbtn{
    margin-right: 45px;
    
}
#femail{
    text-transform: initial;
}

@media only screen and (max-width: 1440px){
       .page-header{
            width: 95%;
       }

}

@media only screen and (max-width: 1280px){
          .card-body{
           width: auto;
         }
         .card-header:first-child{
             width: 100%;
             margin-left: 20px;
         }
}
@media only screen and (max-width: 1080px){

       .card-body {
           width: auto;
       }
       
       .card-header {
            margin-left: 10px;
        }
}

@media only screen and (max-width: 820px) {
    
    .card-body {
    width: 100%;
     }
}

    @media only screen and (max-width: 480px) {
        .dashboard{
            font-size: 20px;
        }
        .viewp{
            font-size: 17px;
            padding-right: 80px;
        }
        /* .bttttn{
            padding-bottom: 5px;
         width: 70px;
         height: 30px;

        } */
        .ebtn{
           /* width: 50px;
            padding-left: 8px;*/
            width: 88px;
        height: 35px;
        border-radius: 10px;
        color: white;
        margin-right: 10px;
        }
        .dbtn{
            /*width: 50px;
            padding-left: 3px;*/

        height: 35px;
        border-radius: 10px;
        color: white;
        margin-right: 10px;
        }
        .card-body {
           flex: 1 1 auto;
           padding: 1.5rem;
           position: relative;
           width: 100%;
           margin-left: 11px;
           margin: 0;
        }
        /*.page-header {
              width:310px;
            }*/



}
@media screen and (min-device-width: 360px){
 .sbmt{
  width: 128px;
 }
}
</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title ">{{__('patientmgmt.patient_mgmt')}}</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol> -->
                            </div>

                         
                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
            <div class="row">
                          
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header" style="position:relative">
                                        
                                        <h3 class="card-title viewp" style="position:absolute;">Manage Patient</h3>
                                       
                                        
                                   <!-- <div class="ml-auto pageheader-btn btnbtn">
                                            <a href="{{ url('add_patient') }}" class="btn bttttn mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> {{__('patientmgmt.add')}}</h3>
                                       
                                            </a>
                                           
                                    </div> -->
                                    


                                    </div>
                                    <div class="card-body">
                                        <hr class="new1">
                                         <div class="text-center" id="message">
                                               
                                             </div>
                                            <div class="search" style="padding-bottom: 50px;">
                                            <input class="form-control"  style="width:100%"; type="text" id="myInput" onkeyup="myFunction()" placeholder="{{__('patientmgmt.search')}}">
                                            </div>

                                         <!--   <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">{{__('patientmgmt.sno')}}</th>
                                                        <th class="wd-15p">{{__('patientmgmt.fname')}}</th>
                                                        <th class="wd-15p">{{__('patientmgmt.lname')}}</th>
                                                        <th class="wd-20p">{{__('patientmgmt.email')}}</th>
                                                        <th class="wd-15p">{{__('patientmgmt.ins_no')}}</th>
                                                        <th class="wd-10p">{{__('patientmgmt.action')}}</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   MODAL 
                    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{__('patientmgmt.pat_profile')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                
                                    <div class="form-group">
                                    <label class="form-label">{{__('patientmgmt.fullname')}}</label>
                                    <input type="text" class="form-control" id="fullname" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('patientmgmt.email1')}}</label>
                                    <input type="email" class="form-control" id="femail" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('patientmgmt.ins_no1')}}</label>
                                    <input type="text" class="form-control" id="ins_no" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('patientmgmt.ins_img')}}</label>
                                    <a href="" id="image_link">
                                    <img src="" alt="insurance_image" id='ins_img' style="height:200px;width:200px;">
                                       </a>
                                   
                                     <input type="email" class="form-control" id="femail" value=""> 
                                    </div>
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary ok" data-dismiss="modal">{{__('patientmgmt.ok')}}</button>
                                     <button type="button" class="btn btn-primary">Save changes</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                    MODAL CLOSED 
                                
                                                    
                                                   
                                                </tbody>
                                            </table> -->

<div class="table-responsive">
<table  id="myTable" class="table table-striped table-bordered text-nowrap w-100" data-sticky-header=true>
  <thead data-sticky-header="true">
    <tr>
    <th class="wd-15p">{{__('patientmgmt.sno')}}</th>
    <th class="wd-15p">{{__('patientmgmt.fname')}}</th>
    <th class="wd-15p">{{__('patientmgmt.lname')}}</th>
    <th class="wd-20p">{{__('patientmgmt.email')}}</th>
    <th class="wd-15p">{{__('patientmgmt.ins_no')}}</th>
    <th class="wd-10p">{{__('patientmgmt.action')}}</th>
</tr>
  </thead>
  <tbody>
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{__('patientmgmt.pat_profile')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                
                                    <div class="form-group">
                                    <label class="form-label">{{__('patientmgmt.fullname')}}</label>
                                    <input type="text" class="form-control" id="fullname" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('patientmgmt.email1')}}</label>
                                    <input type="email" class="form-control" id="femail" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('patientmgmt.ins_no1')}}</label>
                                    <input type="text" class="form-control" id="ins_no" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('patientmgmt.ins_img')}}</label>
                                    <a href="" id="image_link">
                                    <img src="" alt="insurance_image" id='ins_img' style="height:200px;width:200px;">
                                       </a>
                                   
                                     <input type="email" class="form-control" id="femail" value=""> 
                                    </div>
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary ok" data-dismiss="modal">{{__('patientmgmt.ok')}}</button>
                                     <button type="button" class="btn btn-primary">Save changes</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL CLOSED  -->
                </tbody>
</table>
                                        </div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->   
                        

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle">Delete Patient..?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>Sure, you want delete this patient</h4></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button><button id="'+e._id+'" onclick="deletedata(this)" class="btn btn-danger">Yes Delete It!</button></div></div></div></div>  -->
                        
                        
                        
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
     var base_path = "http://3.220.132.29/medpro/"; 
    
    
  $.ajax({
      type: "POST",
      url: api_url+"patList",
      dataType:"json",
    }).done(function (res) {


       var patientList=[];
        patientList.push(res.data);
       console.log(res.data.length);
       //  for(var i = 0; i < res.data.length; i++) {
          // patientList.push(res.data);
       //  }
    console.log(patientList);
    localStorage.setItem('patientList',JSON.stringify(patientList));

    res.data.sort(function(a, b){
    var keyA = new Date(a.createdAt),
        keyB = new Date(b.createdAt);
    // Compare the 2 dates
    if(keyA > keyB) return -1;
    if(keyA < keyB) return 1;
    return 0;
});

         res.data.map((e,i) => {
           
            i++;
              $("#myTable").append('<tr><td>'+i+'</td><td>'+e.psnt_first_name+'</td><td>'+e.psnt_last_name+'</td><td>'+e.psnt_email+'</td><td> '+e.psnt_insrnce_num+'</td><td><button  id="'+e.patient_id+'" onclick="editdata(this)" class="btn ebtn" data-toggle="modal" data-target="#exampleModal">{{__('patientmgmt.view')}}</button><button type="button" class="btn dbtn" data-toggle="modal" data-target="#exampleModalCenter'+e.patient_id+'">{{__('patientmgmt.delete')}}</button></td></tr>');         
              $("#myTable").append('<div class="modal fade" id="exampleModalCenter'+e.patient_id+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>{{__('patientmgmt.ays')}}</h4></div><div class="modal-footer"><button type="button" class="btn btn-danger sbmt" data-dismiss="modal">{{__('patientmgmt.can')}}</button><button id="'+e.patient_id+'" onclick="deletedata(this)" class="btn text-white sbmt mdbtn">{{__('patientmgmt.yes')}}</button></div></div></div></div>');         
    });
     
});









    });


   




</script>
<script type="text/javascript">
     function deletedata($this){
      var base_path = "http://3.220.132.29/medpro/";
      var api_url="http://3.220.132.29:3000/api/";
    //   var id1= $this.attr('id');
  var id=$this.id;
  console.log(id);
//   console.log(id1);
//   return false;
   $.ajax({
      url: api_url+"patientDelete",
      type: "POST",
        dataType: 'json', 
      data:{
        Patient_id:id,
      }
    }).done(function (res) {

        if(res.status == true){
            $('.mdbtn').prop('disabled', true);
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href= base_path + "admin_patient_mgmt";
          
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
}





   function editdata($this){
    var api_url="http://3.220.132.29:3000/api/";
    var id=$this.id;
    $.ajax({
      url: api_url+"patientProfileView",
      type: "post",
      dataType: 'json', 
      data:{
        Patient_id:id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
              let image_name=res.data.psnt_insrnce_img;
              let ext =image_name.split(".");
              // console.log(ext[(ext.length)-1]);
              // return false;
              ext =ext[(ext.length)-1];
          // console.log(res)
              $("#fullname").val(res.data.psnt_first_name+' '+res.data.psnt_last_name) ;   
            $('#femail').val(res.data.psnt_email);
            $('#ins_no').val(res.data.psnt_insrnce_num);
            if(ext == "pdf"){
                 $('#ins_img').attr('src',"https://cdn.pixabay.com/photo/2013/07/13/01/18/pdf-155498_640.png");
                
                  $('#image_link').attr('href',res.data.psnt_insrnce_img)
            }else{
                $('#ins_img').attr('src',res.data.psnt_insrnce_img);
                $('#image_link').attr('href',res.data.psnt_insrnce_img)
            }
            // $('#ins_img').attr('src',res.data.psnt_insrnce_img);
    });
    
   }


    </script>

   <script>
   function myFunction() {

  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  // alert(filter)
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];

    if (td) {
      txtValue = td.textContent || td.innerText;
      // alert(txtValue)
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

@endsection




