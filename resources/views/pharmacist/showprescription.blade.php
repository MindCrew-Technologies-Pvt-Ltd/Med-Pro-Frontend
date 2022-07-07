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
  #physician {
    padding-left: 10px;
    border: none;
    width:100%;
  }

  #pharmacist {
    padding-left: 10px;
    border: none;
    width:100%;
  }

  #cost {
    width: 85px;
    color: black;
    border: none;
    height: 27px;
    background-color: transparent;
    border-radius: 0;
  }
  #final_cost{
    width: 85px;
    color: black;
    border: none;
    height: 27px;
    background-color: transparent;
    border-radius: 0;
  }
 #med_qty{
   width: 85px;
    color: black;
    border: none;
    height: 27px;
    background-color: transparent;
    border-radius: 0;
 }
 #ins_per{
  width: 85px;
    color: black;
    border: none;
    height: 27px;
    background-color: transparent;
    border-radius: 0;
 }
  #ship {
    width: 85px;
    color: black;
    border: none;
    height: 27px;
    margin-top: -4px;
    background-color: transparent;
    border-radius: 0;
    text-align:center;
  }

  .card-body {
    margin-top: -71px;
  }

  .ppname {
    color: #7D7A7A;
    font-size: 18px;
    margin-left: 5px;
  }

  .psnt_full_name {
    padding-right: 87%;
  }

  select.form-control:not([size]):not([multiple]) {
    height: 1.9rem;
    background-color: transparent;
    border: none;
    margin-top: -7px;
    text-align: center;

  }

  .shipcharge {
    margin-top: -16px;
    border-bottom: 1px solid #EAEDF1;
    border-right: 1px solid #EAEDF1;
    border-left: 1px solid #EAEDF1;
    display: flex;
    justify-content: space-between;
    padding-left: 10px;
     position: absolute;
    left: 6rem;
  }

  .totalcharges {
    margin-top: -16px;
    border-bottom: 1px solid #EAEDF1;
    border-right: 1px solid #EAEDF1;
    border-left: 1px solid #EAEDF1;
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    padding-left: 10px;
    left: 6rem;
    padding:1rem;
  }

  .meshide {
    display: none;
  }
  .form-control:disabled, .form-control[readonly] {
    background-color: #F1F1F9;
    opacity: 1;
    width: 100%;
}
</style>
<!-- PAGE-HEADER -->
<div>
  <h1 class="dashboard page-title">{{__('pham_showpres.pres_det')}}</h1>
  <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol> -->
</div>

<!-- PAGE-HEADER END -->
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">

  <div class="row">
    <div class="col-12">
      <!-- card-body start -->
      <div class="card">
        <div class="card-header">

          <!-- <input type="text" id="createdAt" value="" class="date" disabled> -->


        </div>
        <div class="card-body">
          <form action="" method="post">
            @csrf
            <div class="form-group">
              <input type="hidden" name="prescription_id" id="prescription_id" value="">
              <input type="hidden" name="sender_id" id="sender_id" value="">
              <input type="hidden" name="sender_type" id="sender_type" value="Phamaciest">
              <label class="form-label"></label>
            </div>
            <div class="form-group ">
              <label for="phy_full_name">{{__('pham_showpres.phy_name')}}:</label>
              <input type="text" class="form-control" id="phy_full_name" disabled>
            </div>

            <div class="form-group ">
              <label for="psnt_full_name" class="psnt_full_name">{{__('pham_showpres.pat_name')}}:</label>
              <input type="text" class="form-control" id="psnt_full_name" disabled>
            </div>

            <div class="form-group">
              <label for="psnt_address">{{__('pham_showpres.del_add')}}:</label>
              <textarea class="form-control" id="psnt_address" rows="3" disabled></textarea>
            </div>

            <!-- table start -->
            <div class="table-responsive mt-7">
              <table id="myTable" class="table table-striped table-bordered text-nowrap w-100">
                <thead>
                  <tr>
                    <th class="wd-15p">{{__('pham_showpres.sno')}}</th>
                    <th class="wd-15p">{{__('pham_showpres.med_name')}}</th>
                    <th class="wd-15p">{{__('pham_showpres.qty')}}</th>
                    <th class="wd-20p">{{__('pham_showpres.avl')}}</th>
                    <th class="wd-15p">{{__('pham_showpres.ins_avl')}}</th>
                    <th class="wd-15p">{{__('pham_showpres.ins_per')}}</th>
                    <th class="wd-10p">{{__('pham_showpres.unitcost')}}</th>
                    
                  </tr>
                </thead>
                <tbody id="prestable">
                
                </tbody>
              </table>
              <div class="shipcharge">
              
                <h7 class="ship_head" style="margin-left:44.5rem;font-weight:bold;">{{__('pham_showpres.ship_charges')}}: </h7>
           
                <input type="text" id="ship" style="width:50px;"name="ship" value="" onchange="addvalue()">
                <!-- <h7 class=""></h7> -->
              </div><br>

              <div class="totalcharges">
                
                  <h7 class="tot_amount" style="margin-left:48.5rem;font-weight:bold;">{{__('pham_showpres.tot_charges')}}: </h7>
              
                <h7 class="total_amount" style="margin: 0 1.5rem;text-align:center;" id="total_amount"></h7>
              </div>

            </div>
            <!-- table end -->

 
            <a class="btn  btn-primary mt-5 mb-3 float-right border-0" href="{{url('pharmacist_prescription')}}<?="/".$locale; ?>">{{__('pham_showpres.back')}}</a>

           <!--  <div class="buttons mt-7">
              <button class="btn btn-primary border-0" id="sendquatation">Send Quatation</button>
              <button class="btn btn-primary border-0  hide" id="show">Add notes</button>
            </div> -->


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
   var qty1 =[];
  var pat = 0;
  var tat = 0;
  var shap = 0;
  var med_id = 0;
  var prs_det = [{}];
  var avail = [];
  var insurance = [];
  var arr = [];
  var prs_details1 = [];
  arr = window.location.href.split("/");
  console.log("arrr", arr)
  var scrt_var = arr;
  //   console.log("index5",arr[5])
  var base_path = "http://3.220.132.29/medpro/";
  var api_url = "http://3.220.132.29:3000/api/";
   let phamacy_det = localStorage.getItem('pharm_det');
    var pham_obj = JSON.parse(phamacy_det);
  

    var pharmcy_id = pham_obj._id;

   /* view patient prescripttion details api called*/
  $.ajax({
    url: api_url + "viewPsntPhyPresDetails",
    type: "post",
    dataType: 'json',
    data: {
      presciption_id: arr[5],
      phamaciest_id:pharmcy_id,
    },

  }).done(function(res) {
    console.log("respons", res);
    pat = res.data.patient_id;
    for (var i = 0; i <= res.data.prs_details.length - 1; i++) {
      prs_details1.push({
        quot_med_id: res.data.prs_details[i]._id,
        quot_med_name: res.data.prs_details[i].prs_med_name,
        quot_med_quantity: res.data.prs_details[i].prs_quantity,
        quot_med_availty: 'no',
        quot_med_inc_cover: 'no',
        quot_med_cost: 0,

      })
      console.log(prs_details1, res.data.prs_details);
      for (let key of prs_details1) {
        obj = {
          quot_med_id: key._id,
          quot_med_name: key.prs_med_name,
          quot_med_quantity: key.prs_quantity
        }

      }
      prs_det.push(obj)
      console.log(prs_det, 'prs_det');
    }
    console.log(prs_det);
    //     return false;
    $("#phy_full_name").val(res.data.phy_full_name);
    $("#psnt_full_name").val(res.data.psnt_full_name);
    $("#psnt_address").val(res.data.psnt_address);
    $("#createdAt").val(res.data.createdAt);
    
    res.data.prs_details.map((e, i) => {
      i++;
    });



    // $("#prestable").html(rows);
  });


  $(document).ready(function(){
     var  pharm_id2;
     var arr1 = window.location.href.split("/");
     var pham_det=localStorage.getItem('pharm_det');
     var deta =JSON.parse(pham_det);
     console.log("deta",deta)
     var pharm_id2=deta._id;
     var rows = '';
  console.log("arrr", arr1)
    $.ajax({
        url: api_url + "QuotationDetails",
        type: "post",
        dataType: 'json',
        data: {
          phamaciest_id:pharm_id2,
          presciption_id: arr1[5]
        },

      }).done(function(res) {
        console.log("respons", res.data);

          var ship_charge = res.data.quot_shping_chrge;
          var total_amount = res.data.quot_total_chrge;
           $('#ship').val(ship_charge);
           $('#total_amount').html("QR "+total_amount)
            res.data.quot_prs_details.map((v,i)=>{

        console.log(v,i)
        rows= rows +'<tr><td>'+(i+1)+'</td><td>'+v.quot_med_name+'</td><td>'+v.quot_med_quantity+'</td><td>'+v.quot_med_availty+'</td><td>'+v.quot_med_inc_cover+'</td><td>'+v.quot_ins_per+'</td><td>'+v.quot_med_cost+'</td></tr>'
          })
        
        $("#prestable").html(rows) 
        
        });

   
  });

// v.quot_med_availty
  function selectListEvent(e,id) {
    e.preventDefault();
   var qty =0;
   var total=0;
    // const table = document.querySelector("#prestable");  
    // for (const row of table.rows) {  
    //   for (const cell of row.cells) {  
       
    //     console.log(cell.innerText)  
    //   }  
    // }
     var med_qty;
    console.log(e.target.value, e.target.name, id, 'aaaaaaaaaaaaaa');
    var medInd = prs_details1.findIndex(f => f.quot_med_id === id)
    console.log(medInd,prs_details1 )
    if (e.target.name === 'avail') {
       
      prs_details1[medInd].quot_med_availty = e.target.value
    

       // console.dir(e.target.previousSibling)
      if(e.target.value == "yes"){

        console.log(prs_details1[medInd].quot_med_quantity)
      med_qty =prs_details1[medInd].quot_med_quantity;
           
      }
      else if(e.target.value == "no"){
         
      med_qty=0

        
      }else if(e.target.value == "partial"){
 
      med_qty=prs_details1[medInd].quot_med_quantity; 
         
      }
    }
    if(e.target.name ==='med_qty'){
       prs_details1[medInd].quot_med_quantity = e.target.value
    }

    if (e.target.name === 'inso') {
      prs_details1[medInd].quot_med_inc_cover = e.target.value
    }
    if(e.target.name ==='ins_per'){
       prs_details1[medInd].quot_ins_per = e.target.value
    }
    if (e.target.name === 'cost') {
      console.log(prs_details1[medInd]);
      prs_details1[medInd].quot_med_cost = e.target.value
      addvalue(id)
    }
    
    if (e.target.name === 'final_cost') {
      prs_details1[medInd].quot_final_cost = e.target.value
    }
    console.log(medInd, prs_details1);

  }


  //adding code 
  function addvalue(id) {

    var total = 0;
    var ship = 0
    var final_total=0;
    // $('table tr').each(function() {
    //   if ($(this).find('td').length && $(this).find('td input').length) {
    //     var quant = parseFloat($(this).find('td input').eq(0).val()),
    //       price = parseFloat($(this).find('td input').eq(1).val());
    //       console.log(quant, price, '111');
    //       if(!quant){
    //         quant = 0
    //       }
    //       if(!price){
    //         price = 0
    //       }
    //     $(this).find('.totalcharges').html(quant * price);
    //     total += quant;
    //   }
    //   console.log(quant, '222');
    //   // console.log(price)
    // });
    // var total = 0;
    prs_details1.map(m => {
      // return total = total + (parseFloat(m.quot_med_cost) * m.quot_med_quantity)
      total = total + (parseFloat(m.quot_med_cost) * m.quot_med_quantity);
     
      final_total= total-(total *((parseFloat(m.quot_ins_per))*.01));
      console.log('--total',total)
       
      // qty1.push(final_total)
       if(final_total == 0){
        total=0;
       }else{
        // total=final_total;
       }
      // alert(qty1)
      console.log('final total',final_total)
    })

    console.log('final_total',qty1);
    // console.log('final total',final_total)
    ship = $('#ship').val();

    if (parseFloat(ship) == NaN || ship === '') {
      ship = 0;
    }
    console.log("ship", ship, parseFloat(ship), 'asss')

    final_total = final_total + parseFloat(ship);

    $('.total_amount').html('$' + final_total);

    tat = final_total;
        var rowIndex = prs_details1.findIndex(f => f.quot_med_id === id)
        console.log(rowIndex, 'rowIndexddd')
if(rowIndex >= 0)
   { 
    var tabRow = document.getElementById('prestable').childNodes[rowIndex].childNodes[8];
    
    var quantity = document.getElementById('prestable').childNodes[rowIndex].childNodes[4];
    var cost    =document.getElementById('prestable').childNodes[rowIndex].childNodes[7];
    var ins =document.getElementById('prestable').childNodes[rowIndex].childNodes[6];
       // console.log(tabRow, 'tabRowtabRow')
       //  console.log(quantity, 'quantity')
       //   console.log(cost, 'cost')
       //   console.log(ins, 'ins')
        prs_details1.map((m,i) => {
         if(rowIndex == i){
          let t=0;
         t =  (parseFloat(m.quot_med_cost) * m.quot_med_quantity)-parseFloat(m.quot_med_cost * m.quot_med_quantity*m.quot_ins_per*.01);
      
          tabRow.innerText = t;
         }
      
       
    })  
       
       // tabRow.innerHtml = tat;
     }
        shap = ship;
  }


   // $('table tr').each(function() {
   //    if ($(this).find('td').length && $(this).find('td input').length) {
   //      var quant = parseFloat($(this).find('td input').eq(4).val()),
   //        price = parseFloat($(this).find('td input').eq(7).val());
   //        alert(quant)
   //        alert(price)
   //        console.log('------------------',quant, price);
   //        if(!quant){
   //          quant = 0
   //        }
   //        if(!price){
   //          price = 0
   //        }
   //      $(this).find('.totalcharges').html(quant * price);
   //      total += quant;
   //    }
     
   //  });
  // $(".availibility"+i).change(function(event) {
  //           var avl1 = event.target.value;
  //             console.log(avl1);
  //         });
  // $(".insurance_co"+i).change(function(event) {
  //   var insurance1 = event.target.value;
  //     console.log(insurance1);
  // });
  // function addselect(){
  //   var avl;
  //   var ins;
  //   $('table tr').each( function(e) {
  //     var avl1 = $(this).find('select.availibility').val();
  //           var insurance1 = $(this).find('select.insurance_co').val();
  //           if (avl !== undefined && insurance1 !== undefined) {
  //               var avl = avl1;
  //               var ins =insurance1;
  //           }

  // });
  // // e.preventDefault();
  //   console.log(avl);
  //    console.log(ins);
  // }

  $(document).ready(function() {
    // $('#myTable').change(function() {
    //   let val = $("select[name=avail]").val();
    //   let myName = $("select[name=inso]").val();
    //   console.log(val);
    //   console.log(myName);
    // })






    // $('#myTable').on('change', function (e) {
    //   var availability="";
    //   var insurance="";
    //     $('table tr').each(function () {
    //          availability = $(this).find('select.availibility>option:checked').eq(0).val();
    //         insurance = $(this).find('select.insurance_co>option:checked').eq(1).val();
    //         if (availability !== undefined && insurance !== undefined) {
    //             // var dateTotal = (hours * rate);
    //             // $(this).find('input.date-total').val(dateTotal);
    //             alert(availability);
    //             alert(insurance)
    //         }else{
    //           alert('null')
    //         }
    //     });
    //     e.preventDefault();
    // });
  });
  // end adding field calculator

  //--------------------------------------------------
  // send Quotation api call
  $('#sendquatation').on('click', function(evt) {
    // alert("helll")
    evt.preventDefault();


    let phama1 = localStorage.getItem('pharm_det');
    var obja1 = JSON.parse(phama1);
    //  console.log("phama1",phama1)
    var pharm_id1 = obja1._id;

    var availibility = $('#availibility').val();
    var insurance_co = $('#insurance_co').val();

    // alert(shap)
    console.log(prs_details1, 'prs_details1');
    // console.log(typeof(prs_details1), 'prs_details1');
    var formData = {
      "quot_pham_id": pharm_id1,
      "quot_psnt_id": pat,
      "quot_presciption_id": arr[5],
      "quot_shping_chrge": shap,
      "quot_total_chrge": tat,
      "quot_prs_details":JSON.stringify(prs_details1)
    }

    console.log(formData);
    $.ajax({
      type: "POST",
      url: api_url + "sendQuotation",
      data: formData,

    }).done(function(res) {
      //    alert('done');

      // console.log(res);
      // return false;
      if (res.status == true) {
        $(':input[type="submit"]').prop('disabled', true);
            
        $('#message').html(res.message).addClass('alert alert-success');
           
        window.location.href = base_path + "pharmacist_prescription";
      } else {
        $('#message').html(res.message).addClass('alert alert-danger');
      }
    });


  });
  // end send Quotation api call

  //--------------------------------------------------


//--------------------------------------------------
  //notes list

  var arr1 = [];
  arr1 = window.location.href.split("/");
  // alert(arr1[5])

  $.ajax({
    url: api_url + "notesList",
    type: "post",
    dataType: 'json',
    data: {
      prescription_id: arr1[5],

    },

  }).done(function(res1) {
    console.log("res1", res1)
    let data1 = res1.data.message;
    // console.log("data1",data1);
    // $("#physician").val(res1.data.message) ; 


    res1.data.map((e, i) => {



      $("#physician").val(e.message);
      $("#pharmacist").val(e.message);


    });

  });
</script>




@endsection