@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<style>
.heading{
  font-size: 2.1rem;
  color: #7d7a7a;
  margin-top: -20px;
  margin-bottom: -30px;
}
.card-body {
    margin-top: -20px;
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
    <div class="container">
      <div id="message"></div>
            <div class="row">
				<div class="col-12">
                    <!-- card-body start -->
						<div class="card">
                            <!-- card-head start -->
							<div class="card-header">
										<h4 class="heading">View prescription</h4>
                            </div>
                            <!-- divider -->
                            <hr class="solid">
                            
                              <!-- card-head end -->

							<div class="card-body">

                            <!-- table start -->
                             <div class="table-responsive">
                                <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p">S No.</th>
                                                <th class="wd-15p">Patient Name</th>
                                                <th class="wd-15p">Physician name</th>
                                                <th class="wd-20p">Address</th>
                                                <th class="wd-15p">Notes</th>
                                                <th class="wd-10p">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               <!-- table body  strt -->

                                               <!-- table body  end -->
                                        </tbody>
                                </table>
                            </div>
                         <!-- table end -->







							</div>
                            <!-- card-body end -->
						</div>
                    <!-- card end -->

				</div>
                <!-- col end -->
			</div>
            <!-- row end -->
    </div>
    <!-- container end -->
         
    <!-- <button  id="'+e._id+'" onclick="editdata(this)" class="btn ebtn" data-toggle="modal" data-target="#exampleModal">View</button> -->
    <!-- <a id="'+e._id+'" href="{{url('view_prescription')}}" class="btn ebtn">View</a> -->




						
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
 $(document).ready( function () {
     var api_url="http://3.220.132.29:3000/api/";
     var base_path = "http://3.220.132.29/medpro/"; 
      var pham_details=localStorage.getItem('pharm_det');
    var details =JSON.parse(pham_details);
    
    var pharmacist_id=details._id;
    // alert(pharmacist_id);
        // var _token =document.querySelector('[name="_token"]').value;
     var formData = {
        phamaciest_id:pharmacist_id,
    };
    console.log(pharmacist_id)
    console.log(formData)

  $.ajax({
      type: "POST",
      url: api_url+"phamPatientList",
      dataType:"json",
      data: {
        phamaciest_id:pharmacist_id,
    },
      // contentType:false,
      // cache:false,
      // processData:false,
    }).done(function (res) {
        // alert(res);
      console.log("res[p]",res)

       var patientList=[];
        patientList.push(res.data);
        console.log("res.data",res.data)
       console.log(res.data.length);
        for(var i = 0; i < res.data.length; i++) {
	      patientList.push(res.data);
        }
    console.log(patientList);
    localStorage.setItem('patientList',JSON.stringify(patientList));

       

         res.data.map((e,i) => {
           console.log("-- ID",e._id)
            i++;
            let str1='<a id="'+e.presciption_id+'" href="{{url("show_prescription")}}/'+e.presciption_id+'" class="btn ebtn">View</a>'
            let str2='<a id="'+e.presciption_id+'" href="{{url("accept_prescription")}}/'+e.presciption_id+'" class="btn ebtn">View</a>'
            let str3='<a id="'+e.presciption_id+'" href="{{url("view_prescription")}}/'+e.presciption_id+'" class="btn ebtn">View</a>'
              $("#myTable").append('<tr><td>'+i+'</td><td>'+e.psnt_full_name+'</td><td>'+e.phy_full_name+'</td><td> '+e.psnt_address+'</td><td>'+e.message+'</td><td>'+(e.phpr_req_type==2 ?str1:(e.phpr_req_type==1)?str2:str3)+'<button type="button" class="btn dbtn" data-toggle="modal" data-target="#exampleModalCenter'+e._id+'">Delete</button></td></tr>');         
              $("#myTable").append('<div class="modal fade" id="exampleModalCenter'+e._id+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>Are you sure you <br> want to delete the prescription?</h4></div><div class="modal-footer"><button type="button" class="btn btn-danger sbmt" data-dismiss="modal">Cancel</button><button id="'+e._id+'" onclick="deletedata(this)" class="btn text-white sbmt mdbtn">Yes Delete It!</button></div></div></div></div>');         
    });

});









    });


   


    function deletedata($this){
      var base_path = "http://3.220.132.29/medpro/"; 
      var api_url="http://3.220.132.29:3000/api/";
    //   var id1= $this.attr('id');
  var id=$this.id;
  // alert(id)
  console.log("ID",id);
//   return false;
   $.ajax({
      url: api_url+"PrescriptionDelete",
      type: "POST",
        dataType: 'json', 
      data:{
        _id:id,
      }
    }).done(function (res) {
        // alert("response for detele successfully",res);
        console.log("response for detele successfully",res);
        // return false;

        if(res.status == true){
          $('#message').html(res.message).addClass('alert alert-success');
          window.location.href= base_path + "pharmacist_prescription";
          
        }else{
           $('#message').html(res.message).addClass('alert alert-danger');
        }
    });
}



</script>



@endsection




