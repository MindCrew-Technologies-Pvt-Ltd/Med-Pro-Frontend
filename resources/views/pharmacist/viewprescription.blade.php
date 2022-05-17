@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<style>
    #physician{
        padding-left: 50px;
        border: none;
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
										
                            <!-- <div class="date"> -->
                                <input type="text" id="createdAt" value="" class="date" disabled>
                            <!-- </div> -->

							</div>
							<div class="card-body">
                               <form action="" method="post" id="denyallow">
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
                                                <th class="wd-15p">Information</th>
                                            </tr>
                                        </thead>
                                        <tbody id="prestable">
                                               <!-- table body  strt -->
                                               
                                               <!-- table body  end -->
                                        </tbody>
                                </table>
                            </div>
                         <!-- table end -->
<!--                          
                         <div class="form-group ">
                                      <label for="physician">Physician Note:</label>
                                      <input type="text" class="form-control" id="physician" disabled>
                                   </div> -->
									<input class="input100" type="text" name="physician" id="physician" value="" placeholder="Physician" disabled>
									<!-- <i class="zmdi zmdi-email" aria-hidden="true" style="position: absolute;float:right;left: 3rem;top: 28.7rem;"></i> -->
									
                                    <div class="buttons" id="addbuttons">
                                         <button class="btn danger" id="req_type0" onclick="denny($this)" value="0">Deny</button>
                                         <!-- <a href="" class="btn danger" id="req_type0" onclick="denny()">Deny</a> -->
                                         <!-- <a href="{{url('accept_prescription')}}/" class="btn success" onclick="location.href=this.href+scrt_var;return false;">Accept</a> -->
                                         <!-- <a href="" class="btn success" id="req_type1" value="1">Accept</a> -->
                                         <button class="btn success" value="1" id="req_type1" onclick="allow($this)">Accept</button>
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

<script>
   
      var arr =[];
      arr =window.location.href.split("/");
      console.log("arrr",arr)
       var scrt_var=arr;
    //   console.log("index5",arr[5])
    
     var base_path = "http://3.220.132.29/medpro/";
     var api_url="http://3.220.132.29:3000/api/";
        
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
            i++;
              $("#prestable").html('<tr><td>'+i+'</td><td>'+e.prs_med_name+'</td><td>'+e.prs_quantity+'</td><td> '+e.prs_information+'</td></tr>');         
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
       localStorage.setItem('pres_id',JSON.stringify(res1.data._id));

        let data1 =res1.data.message;
        // console.log("data1",data1);
        // $("#physician").val(res1.data.message) ; 
        
        
        res1.data.map((e,i) => {
           
            

           $("#physician").val(e.message) ;

        
  });

    }
    );
       
        
   
          
    
</script>
<script>
//     function adding()
// {
//         num1 = document.getElementById("firstNumber").value;
//         num2 = document.getElementById("secondNumber").value;
           //result input
//         document.getElementById("result").innerHTML = num1 + num2;
// }
</script>
<script>
//      var arrrrrr =[];
//      arrrrrr =window.location.href.split("/");
   
    

//     var arrr =[];
//       arrr =window.location.href.split("/");

//     $('.success').each(function(){
//     $(this).wrapInner('<a href="{{url("accept_prescription")}}/'+arr[5]+'" />');
// });​
</script>

<script>
  $('#denyallow').on("click",function(e){
    e.preventDefault();


     
            var base_path = "http://3.220.132.29/medpro/";
            var api_url="http://3.220.132.29:3000/api/";
            // let pharm_dataa=localStorage.getItem('patientList');

            let pharm_datta=localStorage.getItem('pharm_det');
            var pharm_obj = JSON.parse(pharm_datta);
            console.log("[pharm]",pharm_obj)
            var pharm_id=pharm_obj._id;
            alert("phamid",pharm_id)


            let prescriid=localStorage.getItem('pres_id');
            var pres_ibj = JSON.parse(prescriid);
             var presid=pres_ibj._id;
             alert("presid",presid)
            
            var arry =[];
             arry =window.location.href.split("/");
            //  alert("pres",arry[5])
            // var objj = JSON.parse(pharm_dataa);
            // console.log("objj",objj)
  
            // var req_type=$('#req_type0').val();
            // phamaciest_id=objj.phamaciest_id;
            // presciption_id=objj.presciption_id;
            // alert("phamaciest_id",phamaciest_id)
            // alert("presciption_id",presciption_id)
            

     
          var formData = {
              req_type:req_type,
              presciption_id:arry[5],
              phamaciest_id:pharm_id,
              }


    console.log(formData);
   alert(formData)
        $.ajax({
          type: "POST",
          url: api_url+"presRequestType",
          data: formData,
        
        }).done(function (res) {
         //    alert('done');
        
          console.log("deny Response",res);
          // return false;
            if(res.status == true){
              $('#message').html(res.message).addClass('alert alert-success');
              window.location.href =base_path +"pharmacist_prescription";
            }else{
               $('#message').html(res.message).addClass('alert alert-danger');
            }
        });
       

   



  });
</script>
@endsection




