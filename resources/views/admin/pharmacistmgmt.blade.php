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

/*----------------------------------------------*/
/*css for default*/

*{
       font-family: 'Poppins', sans-serif;
       /*text-transform: capitalize;*/

   }


 card-header:first-child {
           border-radius: 2px 2px 0 0;
           margin-top: -13px;
           width: 1050px;
           font-size: 21px;
         }
 }
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
    width: 1185px;
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
    background-color: #7ec1ec;
    border: none;
    border-radius: 10px;
    text-align: center;
    margin-left: 1px;

}

.dashboard{
   /* font-size: 30px;*/
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
    width: 100px;
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



/*.......................................*/
/*arabic*/

*:lang(ar){
       font-family: 'Poppins', sans-serif;
       /*text-transform: capitalize;*/

   }


 card-header:first-child:lang(ar) {
           border-radius: 2px 2px 0 0;
           margin-top: -13px;
           width: 1050px;
           font-size: 21px;
         }
 }
   }

.form-control:disabled:lang(ar), .form-control[readonly]:lang(ar) {
    width: 100%;
    background-color: #F1F1F9;
    opacity: 1;
}


.modal-conten:lang(ar){
    border-radius: 25px;
}


#myTable:lang(ar){
    text-transform: capitalize;
}


.sbmt:lang(ar){
    width: 203px;
    margin-right: 20px;
    margin-top: 10px;
    float: left;
    border: none;
    border-radius: 10px;
    box-shadow: none;
}

.mdbtn:lang(ar){
    background-color: #008000;
}


hr.new1:lang(ar){
    border-top: 1px solid black;
    margin-top: -20px;
    width: 1150px;
    /*margin-left: -27px;*/
    margin-right: -27px;
}

.card-body:lang(ar){
    flex: 1 1 auto;
    padding: 1.5rem;
    margin: 0;
    position: relative;
    /*width: 1150px;*/
    width: 1185px;
   /* margin-left: 14px;*/
    margin-right: 14px;
}

.form-label:lang(ar){
    text-align:left!important;
    font-size: 18px;
    color: #7d7a7a;
}

.viewp:lang(ar){
    color: #7d7a7a;
    font-size: 1.1rem;
   /* margin-left: 10px;*/
   margin-right: 10px;
}

.bttttn:lang(ar){
    width: 120px;
    height: 35px;
    color: white;
    background-color: #7ec1ec;
    border: none;
    border-radius: 10px;
    text-align: center;
    /*margin-left: 1px;*/
    margin-right: 1px;

}

.dashboard:lang(ar){
   /* font-size: 30px;*/
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

.ebtn:lang(ar){
    background-color: #5e2dd8;
    width: 88px;
    height: 35px;
    border-radius: 10px;
    color: white;
    margin-right: 10px;
}

.dbtn:lang(ar){
    background-color: #cf142b;
    width: 88px;
    height: 35px;
    border-radius: 10px;
    color: white;
}

.ok:lang(ar){
    border: none;
    border-radius: 10px;
    height: 30px;
    width: 100px;
    text-align: center;
    align-items: center;
    padding: 2px;
}

.btnbtn:lang(ar){
    margin-right: 45px;
    
}

#femail:lang(ar){
    text-transform: initial;
}





</style>
@endsection
@section('page-header')
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title ">{{__('sidebar.pharm_mgmt')}}</h1>
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
                                        
                                        <h3 class="card-title viewp" style="position:absolute;">Manage Pharmacist</h3>
                                       
                                        
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
                                            <input class="form-control"  style="width:100%;" type="text" id="myInput" onkeyup="myFunction()" placeholder="{{__('patientmgmt.search')}}">
                                            </div>
                                         
                                          <div class="table-responsive">
                                            <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100" data-sticky-header="true" >
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">{{__('patientmgmt.sno')}}</th>
                                                        <th class="wd-15p">{{__('patientmgmt.fname')}}</th>
                                                        <th class="wd-15p">{{__('patientmgmt.lname')}}</th>
                                                        <th class="wd-20p">{{__('patientmgmt.email')}}</th>
                                                        <th class="wd-15p">{{__('patientmgmt.ins_no')}}</th>
                                                        <th class="wd-15p">{{__('sidebar.app_status')}}</th>
                                                        <th class="wd-10p">{{__('patientmgmt.action')}}</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <!-- MODAL -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{__('sidebar.pham_profile')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form method="post" id="approve">

                                    @csrf
                                <div class="modal-body">
                                <div id="message1"></div>
                                    <div class="form-group">
                                        <input type="hidden" id="pham_id" name="pham_id" value="">
                                    <label class="form-label">{{__('sidebar.pham_name')}}</label>
                                    <input type="text" class="form-control" id="fullname" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('sidebar.pham_email')}}</label>
                                    <input type="email" class="form-control" id="femail" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('sidebar.pham_reg')}}</label>
                                    <input type="text" class="form-control" id="ins_no" value="" disabled>
                                    </div>
                                     <div class="form-group">
                                    <label  class="form-label">{{__('sidebar.reg_img')}}</label>
                                    <a href="" id="image_link">
                                    <img src="" alt="insurace_image" id='ins_img' style="height:200px;width:200px;">
                                       </a>
                                    <!-- <input type="email" class="form-control" id="femail" value=""> -->
                                    </div>
                                
                                </div>
                                <div class="modal-footer">
                                     <input type="submit" id="approve2" class="btn btn-primary ok"  value="Approve">
                                   <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL CLOSED -->
                                
                                                    
                                                   
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
      url: api_url+"adminphamlist",
      dataType:"json",
    
    }).done(function (res) {
      // console.log(res.data)
      // return false;

       var phamList=[];
        // phamList.push(res.data);
       console.log(res.data.length);
        for(var i = 0; i < res.data.length; i++) {
          phamList.push(res.data);
        }
    console.log(phamList);
    localStorage.setItem('phamList',JSON.stringify(phamList));

        

         res.data.map((e,i) => {
            let str1="Approved";
           let str2="Pending";
            i++;
              $("#myTable").append('<tr><td>'+i+'</td><td>'+e.pham_first_name+'</td><td>'+e.pham_last_name+'</td><td>'+e.pham_email+'</td><td> '+e.pham_licnse+'</td><td> '+(e.approval_type>0?str1:str2)+'</td><td><button  id="'+e.pharmacist_id+'" onclick="editdata(this)" class="btn ebtn" data-toggle="modal" data-target="#exampleModal">{{__('patientmgmt.view')}}</button><button type="button" class="btn dbtn" data-toggle="modal" data-target="#exampleModalCenter'+e.pharmacist_id+'">{{__('patientmgmt.delete')}}</button></td></tr>');         
              $("#myTable").append('<div class="modal fade" id="exampleModalCenter'+e.pharmacist_id+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>{{__('sidebar.ayspp')}}</h4></div><div class="modal-footer"><button type="button" class="btn btn-danger sbmt" data-dismiss="modal">{{__('patientmgmt.can')}}</button><button id="'+e.pharmacist_id+'" onclick="deletedata(this)" class="btn text-white sbmt mdbtn">{{__('patientmgmt.yes')}}</button></div></div></div></div>');         
    });
     
});









    });


   




</script>
<script type="text/javascript">

     $(document).ready(function(){
    var base_path = "http://3.220.132.29/medpro/";
      var api_url="http://3.220.132.29:3000/api/";
         $('#approve').submit(function(e){

        let pham_id =$('#pham_id').val();
                $.ajax({
              url: api_url+"phamapprove",
              type: "POST",
                dataType: 'json', 
              data:{
                pham_id:pham_id,
              }
            }).done(function (res) {
              // console.log(res);
              // return false;
                if(res.status == true){
                  
                  $('#message1').html(res.message).addClass('alert alert-success');
                  window.location.href= base_path + "admin_pharmacist_mgmt";
                  
                }else{
                   $('#message1').html(res.message).addClass('alert alert-danger');
                }
            });
               });
    })
     function deletedata($this){
      var base_path = "http://3.220.132.29/medpro/";
      var api_url="http://3.220.132.29:3000/api/";
    //   var id1= $this.attr('id');
  var id=$this.id;
  // console.log(id);
  // alert(id)
//   console.log(id1);
//   return false;
   $.ajax({
      url: api_url+"phamDelete",
      type: "POST",
        dataType: 'json', 
      data:{
        pham_id:id,
      }
    }).done(function (res) {

        if(res.status == true){
            $('.mdbtn').prop('disabled', true);
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href= base_path + "admin_pharmacist_mgmt";
          
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
}





   function editdata($this){
    var api_url="http://3.220.132.29:3000/api/";
    var id=$this.id;
    // alert(id)
    $.ajax({
      url: api_url+"phamViewProfile",
      type: "post",
      dataType: 'json', 
      data:{
        phamaciest_id:id,
      },
    
      // contentType: "application/json; charset=utf-8",
     // data: JSON.stringify(data),
    }).done(function (res) {
              let image_name=res.data.pham_registration_file;
              let ext =image_name.split(".");
              // console.log(ext[(ext.length)-1]);
              // return false;
              ext =ext[(ext.length)-1];
          // console.log(res)
            $('#pham_id').val(res.data._id);
              $("#fullname").val(res.data.pham_first_name+' '+res.data.pham_last_name) ;   
            $('#femail').val(res.data.pham_email);
            $('#ins_no').val(res.data.pham_registration_num);
            if(ext == "pdf"){
                 $('#ins_img').attr('src',"https://cdn.pixabay.com/photo/2013/07/13/01/18/pdf-155498_640.png");
                
                  $('#image_link').attr('href',res.data.pham_registration_file)
            }else{
                $('#ins_img').attr('src',res.data.pham_registration_file);
                $('#image_link').attr('href',res.data.pham_registration_file)
            }
            // $('#ins_img').attr('src',res.data.psnt_insrnce_img);
            if(res.data.approval_type==1){
                $('#approve2').hide();
            }else{
                $('#approve2').show();
            }
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




