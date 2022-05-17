@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<style>
    #physician{
        padding-left: 50px;
        border: none;
    }
    #cost{
        width: 100%;
        color: black;
        border: none;
        border-radius: 0;
    }
</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">Prescription management</h1>
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
                            </div>

                        <!-- PAGE-HEADER END -->
@endsection
@section('content')
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="container">
        
            <div class="row">
				<div class="col-12">
                    <!-- card-body start -->
						<div class="card">
							<div class="card-header">
										
                            <input type="text" id="createdAt" value="" class="date" disabled>


							</div>
							<div class="card-body">
                               <form action="" method="post">
                                   @csrf 
                                   <div class="form-group ">
                                      <label for="phy_full_name">Physician name:</label>
                                      <input type="text" class="form-control" id="phy_full_name" disabled>
                                   </div>

                                   <div class="form-group ">
                                      <label for="psnt_full_name">Patient name:</label>
                                      <input type="text" class="form-control" id="psnt_full_name" disabled>
                                   </div>

                                   <div class="form-group">
                                       <label for="psnt_address">Delivery address</label>
                                       <textarea class="form-control" id="psnt_address" rows="3" disabled></textarea>
                                     </div>

                                                                 <!-- table start -->
                             <div class="table-responsive mt-7">
                                <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p">serial number</th>
                                                <th class="wd-15p">Name of the medicine</th>
                                                <th class="wd-15p">Quantity</th>
                                                <th class="wd-20p">Availibility</th>
                                                <th class="wd-15p">Insurance C.</th>
                                                <th class="wd-10p">Cost</th> 
                                            </tr>
                                        </thead>
                                        <tbody id="prestable">
                                               <!-- table body  strt -->
<!-- <div class="form-group col-2"><label for="availibility">Availibility</label><select class="form-control" id="availibility"><option value="yes">Yes</option><option value="no">No</option></select></div> -->

<!-- <div class="form-group col-2"><label for="insurance_co">Insurance C.</label><select class="form-control" id="insurance_co"><option value="yes">Yes</option><option value="no">No</option></select></div> -->
                                               <!-- table body  end -->
                                        </tbody>
                                </table>
                            </div>
                         <!-- table end -->
                                 

									<input class="input100" type="text" name="physician" id="physician" placeholder="Physician" disabled>
									<!-- <i class="zmdi zmdi-email" aria-hidden="true" style="position: absolute;float:right;left: 3rem;top: 28.7rem;"></i> -->
									

                                    <div class="form-group mt-6">
                                      <input type="text" class="form-control" id="notes" placeholder="Type something">
                                   </div>

                                    <div class="buttons mt-7">
                                         <button class="btn btn-primary border-0">Send Quatation</button>
                                         <button class="btn btn-primary border-0" id="show" onclick="myFunction()">Add notes</button>
                                    </div>
                                     
                                   
                               </form>


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
         





						
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $( document ).ready(function() {
        $("#show").click(function(){
           $("#notes").show();
     });



        //end document.ready
});
</script>

<script>
   
      var arr =[];
      arr =window.location.href.split("/");
      console.log("arrr",arr)
       var scrt_var=arr;
    //   console.log("index5",arr[5])
    
     var base_path = "http://3.220.132.29/medpro/";
     var api_url="http://3.220.132.29:3000/api/";

    
     var availibility = $('#availibility').val();
     var insurance_co = $('#insurance_co').val();
     var cost = $('#cost').val();

    $.ajax({
      url: api_url+"viewPsntPhyPresDetails",
      type: "post",
      dataType: 'json', 
      data:{
        presciption_id:arr[5],
      },
    
    }).done(function (res) {
          console.log("respons",res);
        //   console.log("respons,data",res.data);

         //     return false;
              $("#phy_full_name").val(res.data.phy_full_name) ;   
              $("#psnt_full_name").val(res.data.psnt_full_name) ;   
              $("#psnt_address").val(res.data.psnt_address) ;   
              $("#createdAt").val(res.data.createdAt) ;   
              
              res.data.prs_details.map((e,i) => {
        //    console.log("prescription ID",e.presciption_id)
        // <td> '+e.prs_information+'</td>
            i++;
              $("#prestable").html('<tr><td>'+i+'</td><td>'+e.prs_med_name+'</td><td>'+e.prs_quantity+'</td><td><select class="form-control" id="availibility"><option value="yes">Yes</option><option value="no">No</option></select></td><td><select class="form-control" id="insurance_co"><option value="yes">Yes</option><option value="no">No</option></select></td><td><input type="text" name="cost" id="cost"></td></tr>');         
            //   $("#myTable").append('<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>Are you sure you <br> want to delete the prescription?</h4></div><div class="modal-footer"><button type="button" class="btn btn-danger sbmt" data-dismiss="modal">Cancel</button><button id="'+e.presciption_id+'" onclick="deletedata(this)" class="btn text-white sbmt mdbtn">Yes Delete It!</button></div></div></div></div>');         
    });
    });




    //notes list

    var arr1 =[];
      arr1 =window.location.href.split("/");
    // alert(arr1[5])

    $.ajax({
      url: api_url+"notesList",
      type: "post",
      dataType: 'json', 
      data:{
        prescription_id:arr1[5],

      },
    
    }).done(function (res1) {
       console.log("res1",res1)
        let data1 =res1.data.message;
        // console.log("data1",data1);
        // $("#physician").val(res1.data.message) ; 
        
        
        res1.data.map((e,i) => {
           
            

           $("#physician").val(e.message) ;

        
  });

    });
       
        
   
          
    
</script>


@endsection




