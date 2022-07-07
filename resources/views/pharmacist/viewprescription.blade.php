<?php $locale = Session::get('locale'); ?>
@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<style>
    @media (min-width: 375px)and (max-width:812px){
      #flag{
        position: relative;
        left:12rem!important;
        top:-2rem!important;
    }
     
     .date{
        width: 100px!important;
        font-size:.875rem!important;
     }
     #req_type1{
        position: relative!important;
        /*left: -24px!important;*/

     }
    }
    #physician{
       
        border: none;
        width:100%;
    }
    .date {
    width: 149px!important;
    height: 50px;
    padding-left: 22px!important;
    background-color: #F1F1F9;
    border-radius: 10px;
    margin-left: 85%;
    border: none;
    margin-top: -20px;
    margin-bottom: -35px;
    font-size: 19px;
}

.icon{
 color: #7D7C94;
  position: absolute;
  top: 34.4rem;
  right: 61rem;
}
.form-control:disabled, .form-control[readonly] {
    background-color: #F1F1F9;
    opacity: 1;
    width: 100%;
}
@media (min-width: 820px) and (max-width: 1180px) {

.danger{
    width: 150px!important;
}

.success{
    width: 150px!important;
}

}
@media (min-width: 412px)and (max-width: 1180px){
    .ml-5{
        margin-left: 0.5rem!important;
    }
}
</style>
                        <!-- PAGE-HEADER -->
                            <div>
                                <h1 class="dashboard page-title">{{__('pham_viewpres.pres_mgmt')}}</h1>
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
                                <div id="message"></div>
                               <form action="" method="post" id="denyallow">
                                   @csrf 
                                   <div class="form-group ">
                                      <label for="phy_full_name" >{{__('pham_viewpres.phy_name')}}:</label>
                                      <input type="text" class="form-control" id="phy_full_name" disabled>
                                   </div>

                                   <div class="form-group ">
                                      <label for="psnt_full_name" id="pname">{{__('pham_viewpres.pat_name')}}:</label>
                                      <input type="text" class="form-control" id="psnt_full_name" disabled>
                                   </div>

                                   <div class="form-group">
                                       <label for="psnt_address">{{__('pham_viewpres.add')}}</label>
                                       <textarea class="form-control" id="psnt_address" rows="3" disabled></textarea>
                                     </div>

                                                                 <!-- table start -->
                             <div class="table-responsive mt-7">
                                <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p">{{__('pham_viewpres.ser_no')}}</th>
                                                <th class="wd-15p">{{__('pham_viewpres.med_name')}}</th>
                                                <th class="wd-15p">{{__('pham_viewpres.qty')}}</th>
                                                <th class="wd-15p">{{__('pham_viewpres.info')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="prestable">
                                               <!-- table body  strt -->
                                               
                                               <!-- table body  end -->
                                        </tbody>
                                </table>
                            </div>
                         <!-- table end -->                        



                               <div class="form-group ">
                                      <label for="insurance_type"><span>{{__('pham_viewpres.sel_avl')}}:</span></label>
                                      <select name="insurance_type" id="insurance_type" class="form-control" onchange="update()">
                                        <option>{{__('pham_viewpres.sel')}}</option>
                                        <option value="0">{{__('pham_viewpres.par_avl')}}</option>
                                         <option value="1">{{__('pham_viewpres.ful_avl')}}</option>
                                        
                                      </select>
                              </div>
                      
                                 <!--   <label for="physician">Physician Notes</label>
									<input class="input100" type="text" name="physician" id="physician" value="" placeholder="Physician" disabled> -->
                                
                  
                  </form>

                                        
                                    <div class="buttons" id="addbuttons">
                                         <button class="btn danger" id="req_type0"  value="0">{{__('pham_viewpres.deny')}}</button>
                                       
                                         <button class="btn success" value="1" id="req_type1" >{{__('pham_viewpres.accept')}}</button>
                                    </div>
                                    <div><br><br></div>
                                    <div class="form-group">

                                        <h4>{{__('pham_viewpres.notes')}}</h4>
                                         <table class="table" id="noteslist2">
                                                <thead>
                                                   <tr>
                                                      <th scope="col">{{__('pham_viewpres.notes')}}</th>
                                                   </tr>
                                                </thead>
                                               <tbody id="tbodynotes">

                                                </tbody>
                                         </table>   
                                    </div>
                                 
                            


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
       let phamacy_det = localStorage.getItem('pharm_det');
    var pham_obj = JSON.parse(phamacy_det);
  

    var pharmcy_id = pham_obj._id;  
    $.ajax({
      url: api_url+"viewPsntPhyPresDetails",
      type: "post",
      dataType: 'json', 
      data:{
        presciption_id:arr[5],
         phamaciest_id:pharmcy_id,
      },
    
    }).done(function (res) {
          console.log("respons",res);
        //   console.log("respons,data",res.data);

         //     return false;
              $("#phy_full_name").val(res.data.phy_full_name) ;   
              $("#psnt_full_name").val(res.data.psnt_full_name) ;   
              $("#psnt_address").val(res.data.psnt_address) ;   
              $("#createdAt").val(res.data.createdAt) ;   
              var rows = '';
              res.data.prs_details.map((e,i) => {
        //    console.log("prescription ID",e.presciption_id)
            i++;
            rows=rows+'<tr><td>'+i+'</td><td>'+e.prs_med_name+'</td><td>'+e.prs_quantity+'</td><td> '+e.prs_information+'</td></tr>'
                      
           
    });
    $("#prestable").html(rows)
    });


var pham_det123=localStorage.getItem('pharm_det');
            var deta123 =JSON.parse(pham_det123);
            console.log("deta",deta123)
            var id123=deta123._id;

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
         user_id:id123,
         user_type:"Phamaciest"
      },
    
    }).done(function (res1) {
         $("#noteslist2").html('');
       console.log("res1",res1)
       localStorage.setItem('pres_id',JSON.stringify(res1.data._id));

        let data1 =res1.data.message;
        // console.log("data1",data1);
        // $("#physician").val(res1.data.message) ; 
        
        
             if(res1.data.length > 0){
          
          var row='';   
        res1.data.map((e,i) => {
           
            
            if(e.sender_type =='Phamaciest'){
               $("#noteslist2").append('<tr><td><li class="list-group-item list-group-item-primary" style="text-align:justify;text-align-last: left;list-style-type:none;background-color: #f1f1f9;"><h4>Pharmacist Note</h4>'+e.message+'</li></td><tr>') ;
            } else if(e.sender_type =='physician'){
               $("#noteslist2").append('<tr><td><li class="list-group-item list-group-item-secondary" style="text-align:justify;text-align-last: right;list-style-type:none;background-color: #e3e0ea;"><h4>Physician Notes</h4>'+e.message+'</li></td><tr>') ;
            }
            else{

            }       
   });
   
         // $("#noteslist2").append(row);   
       }else{
        // row="";
           $("#noteslist2").html('');
        
     }

    }
    );
       
        
   
          
    
</script>


<script>
    var insurance_type;
    function update(){
    var select = document.getElementById('insurance_type');
                var insurance_type = select.options[select.selectedIndex].value;
     localStorage.setItem('insurance_type',insurance_type);
   }
  $('#req_type0').on('click',function(){
    // alert('clicked0')
    var base_path = "http://3.220.132.29/medpro/";
            var api_url="http://3.220.132.29:3000/api/";

            var pham_det=localStorage.getItem('pharm_det');
            var deta =JSON.parse(pham_det);
            console.log("deta",deta)
            var id=deta._id;
          // alert(id)
          var arrp =[];
            arrp =window.location.href.split("/");
            
            // var insurance_type =  $('#insurance_type').val();
          insurance_type= localStorage.getItem('insurance_type')
            // console.log(typeof(insurance_type))
          var formdata1 = {
              presciption_id:arrp[5],
              phamaciest_id:id,
              req_type:0,
              insurance_type:insurance_type,
              }


    console.log("formdata",formdata1);
    // return false;
  //  alert(formData)
        $.ajax({
          type: "POST",
          url: api_url+"presRequestType",
          // data: JSON.stringify(formdata1),
          data:formdata1,
         
        
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
  

  $('#req_type1').on('click',function(){
    // alert('clicked1')

    var base_path = "http://3.220.132.29/medpro/";
            var api_url="http://3.220.132.29:3000/api/";

            var pham_det1=localStorage.getItem('pharm_det');
            var deta1 =JSON.parse(pham_det1);
            console.log("deta",deta1)
            var id=deta1._id;
          // alert(id)
          var arrp1 =[];
            arrp1 =window.location.href.split("/");
            
       
             insurance_type= parseInt(localStorage.getItem('insurance_type'))
             console.log(typeof(insurance_type))
            // alert(arrp[5])
          var formdata2 = {
              presciption_id:arrp1[5],
              phamaciest_id:id,
              req_type:1,
              insurance_type:insurance_type,
              }


    // console.log("formdata",formdata2);
    // return false;
  //  alert(formData)
        $.ajax({
          type: "POST",
          url: api_url+"presRequestType",
          // data: JSON.stringify(formdata1),
          data:formdata2,
         
        
        }).done(function (res) {
         //    alert('done');
       
          console.log("deny Response",res);
          // return false;
            if(res.status == true){
              $('#message').html(res.message).addClass('alert alert-success');
              window.location.href =base_path +"accept_prescription/"+arrp1[5]+'<?="/".$locale; ?>'
            }else{
               $('#message').html(res.message).addClass('alert alert-danger');
            }
        });
       
  });
  
  
</script>
@endsection




