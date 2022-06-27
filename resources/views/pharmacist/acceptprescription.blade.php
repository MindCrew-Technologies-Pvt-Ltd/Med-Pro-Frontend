@extends('layouts.vertical-menu1.master')
@section('css')
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
@endsection
@section('page-header')
<style>
  
     .not {
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        word-wrap: break-word;
        color: lightgreen;
      }
 
  td{
    min-width:7.5rem;
  }
  #calculate{
    height: auto;
    width: 100%;
    overflow-y: scroll;
    overflow-x: scroll;
  }
  #physician {
    padding-left: 10px;
    border: none;
    width:100%;
  }
  #notelist{
    height: auto;
    overflow-y:scroll;
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
    text-align: center;
    margin-left:1.5rem;
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
    position: relative;
    left: 18rem;
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
    /*position: absolute;*/
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
@media (min-width: 412px)and (max-width: 1180px){
    #message1{
        width:325px!important;
    }
}
</style>
<!-- PAGE-HEADER -->
<div>
  <h1 class="dashboard page-title">Prescription management</h1>
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
        <div id="message"></div>
        <div class="card-header">
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
              <label for="phy_full_name">Physician name:</label>
              <input type="text" class="form-control" id="phy_full_name" disabled>
            </div>

            <div class="form-group ">
              <label for="psnt_full_name" class="psnt_full_name">Patient name:</label>
              <input type="text" class="form-control" id="psnt_full_name" disabled>
            </div>

            <div class="form-group">
              <label for="psnt_address">Delivery address</label>
              <textarea class="form-control" id="psnt_address" rows="3" disabled></textarea>
            </div>

            <!-- table start -->
            <div class="table-responsive mt-7" id="calculate">
              <table id="myTable" class="table table-striped table-bordered text-nowrap w-100">
                <thead>
                  <tr>
                    <th class="wd-15p">S.NO</th>
                    <th class="wd-15p">Name of the medicine</th>
                    <th class="wd-15p">Requested Qty</th>
                    <th class="wd-20p">Availabilty</th>
                     <th class="wd-15p">Qty Of Medicine</th>
                    <th class="wd-15p">Insurance Availabilty</th>
                    <th class="wd-15p">Insurance %</th>
                    <th class="wd-10p">Unit Cost</th>
                    <th class="wd-10p">Final Cost</th>
                  </tr>
                </thead>
                <tbody id="prestable">
                
                </tbody>
              </table>
              <div class="shipcharge">
              
                <h7 class="ship_head" style="margin-left:42.5rem;font-weight:bold;">Shipping charges: </h7>
           
                <input type="text" id="ship" name="ship" value="" onchange="addvalue()">
              </div><br>

              <div class="totalcharges">
                
                  <h7 class="tot_charge" style="margin-left: 48.5rem;font-weight: bold;
    width: 100%;position: relative;left: 12rem;">Total charges: </h7>
              
                <h7 class="total_amount" style="margin-left:5.5rem;"></h7>
              </div>

            </div>
            <!-- table end -->
            <div class="table-responsive mt-7" id="notelist">
              <table class="table table-striped table-bordered text-nowrap w-100" id="noteslist1">
                                <thead>
                                   <tr>
                                      <th scope="col">Notes</th>
                                   </tr>
                                </thead>
                               <tbody id="tbodynotes">

                                </tbody>
              </table>
            </div>
            <div class="form-group mt-6" id="Create">
              <input type="text" class="form-control" name="message" id="message1" placeholder="Enter Notes">
              
            </div>
                <div>
                 <p class="text-red meshide" id="messagee">Please enter notes</p>
               </div>
            <div class="buttons mt-7">
              <button class="btn btn-primary border-0" id="sendquatation">Send Quatation</button>
               <button class="btn btn-primary border-0  hide" id="show">Add notes</button>
            </div>


          </form>
            <!-- <div class="buttons mt-7">
                
            </div> -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/index1.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
  var f_t;
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
  var quot_insurance_type;
  arr = window.location.href.split("/");
  // console.log("arrr", arr)
  var scrt_var = arr;
  //   console.log("index5",arr[5])

  var base_path = "http://3.220.132.29/medpro/";
  var api_url = "http://3.220.132.29:3000/api/";

    let phamacy_det = localStorage.getItem('pharm_det');
    var pham_obj = JSON.parse(phamacy_det);
  

    var pharmcy_id = pham_obj._id;
  $.ajax({
    url: api_url + "viewPsntPhyPresDetails",
    type: "post",
    dataType: 'json',
    data: {
      presciption_id: arr[5],
      phamaciest_id:pharmcy_id,
    },

  }).done(function(res) {
    // console.log("respons", res);
    //   console.log("respons,data",res.data);
    quot_insurance_type =res.data.insurance_type;
    // console.log(quot_insurance_type)
    // console.log(typeof(quot_insurance_type))
    pat = res.data.patient_id;
    // prs_details1 = [{}];
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
          // quot_med_availty: availibility,
          // quot_med_inc_cover: insurance_co,
          // quot_med_cost: tat,
        }

      }
      prs_det.push(obj)
      // console.log(prs_det, 'prs_det');
    }


    // console.log(prs_det);
    //     return false;
    $("#phy_full_name").val(res.data.phy_full_name);
    $("#psnt_full_name").val(res.data.psnt_full_name);
    $("#psnt_address").val(res.data.psnt_address);
    $("#createdAt").val(res.data.createdAt);
    var rows = '';
    res.data.prs_details.map((e, i) => {
      //    console.log("prescription ID",e.presciption_id)
      // <td> '+e.prs_information+'</td>
      i++;
      if(quot_insurance_type){
           rows = rows + '<tr><td>' + i + '</td><td>' + e.prs_med_name + '</td><td>' + e.prs_quantity + '</td><td><select class="form-control" onchange="selectListEvent(event , \'' + e._id + '\')"  class="availibility" name="avail"><option >Yes / No</option><option value="no" >No</option><option value="yes" selected>Yes</option><option value="partial">Partial</option></select></td><td><input type="text" value="' + e.prs_quantity + '" name="med_qty" class="cost" id="med_qty" onchange="selectListEvent(event , \'' + e._id + '\')" ></td><td><select class="form-control" class="insurance_co" onchange="selectListEvent(event , \'' + e._id + '\')" name="inso" ><option>Yes / No</option><option value="yes">Yes</option><option value="no">No</option></select></td><td><input type="text" value="" name="ins_per" class="cost" id="ins_per" onchange="selectListEvent(event , \'' + e._id + '\')"></td><td><input type="text" name="cost" class="cost" id="cost" onchange="selectListEvent(event , \'' + e._id + '\')"></td><td><input type="text" value="" name="final_cost" class="cost" id="final_cost"onchange="selectListEvent(event , \'' + e._id + '\')" ></td></tr>'
      }else{
        rows = rows + '<tr><td>' + i + '</td><td>' + e.prs_med_name + '</td><td>' + e.prs_quantity + '</td><td><select class="form-control" onchange="selectListEvent(event , \'' + e._id + '\')"  class="availibility" name="avail"><option >Yes / No</option><option value="yes">Yes</option><option value="no">No</option><option value="partial" selected>Partial</option></select></td><td><input type="text" value="" name="med_qty" class="cost" id="med_qty" onchange="selectListEvent(event , \'' + e._id + '\')" ></td><td><select class="form-control" class="insurance_co" onchange="selectListEvent(event , \'' + e._id + '\')" name="inso" ><option>Yes / No</option><option value="yes">Yes</option><option value="no">No</option></select></td><td><input type="text" value="" name="ins_per" class="cost" id="ins_per" onchange="selectListEvent(event , \'' + e._id + '\')"></td><td><input type="text" name="cost" class="cost" id="cost" onchange="selectListEvent(event , \'' + e._id + '\')"></td><td><input type="text" value="" name="final_cost" class="cost" id="final_cost"onchange="selectListEvent(event , \'' + e._id + '\')" ></td></tr>'
      }
      
      

    });
    $("#prestable").html(rows);

  });


  
  function selectListEvent(e, id) {
    e.preventDefault();
   var qty =0;
   var total=0;
   var med_qty;
    // console.log(e.target.value, e.target.name, id, 'aaaaaaaaaaaaaa');
    var medInd = prs_details1.findIndex(f => f.quot_med_id === id)
    // console.log(medInd,prs_details1 )
    if (e.target.name === 'avail') {
       
      // e.target.options[e.target.selectedIndex].text
    
          // alert(e.target.value)

       // console.dir(e.target.previousSibling)
      if(e.target.value == "yes"){
        // alert('yes')
         prs_details1[medInd].quot_med_availty =e.target.value
         e.target.parentNode.parentNode.childNodes[4].childNodes[0].removeAttribute("disabled", "true");;
         e.target.parentNode.parentNode.childNodes[6].childNodes[0].removeAttribute("disabled", "true");
          e.target.parentNode.parentNode.childNodes[7].childNodes[0].removeAttribute("disabled", "true");
         e.target.parentNode.parentNode.childNodes[8].childNodes[0].removeAttribute("disabled", "true");
      // med_qty =prs_details1[medInd].quot_med_quantity;
           
      }
      else if(e.target.value == "no"){
         prs_details1[medInd].quot_med_availty =e.target.value
         // alert('no')
         /*4,6,7,8*/
         e.target.parentNode.parentNode.childNodes[4].childNodes[0].setAttribute("disabled", "true");;
         e.target.parentNode.parentNode.childNodes[6].childNodes[0].setAttribute("disabled", "true");
          e.target.parentNode.parentNode.childNodes[7].childNodes[0].setAttribute("disabled", "true");
         e.target.parentNode.parentNode.childNodes[8].childNodes[0].setAttribute("disabled", "true");

      }else if(e.target.value == "partial"){
           prs_details1[medInd].quot_med_availty =e.target.value
      // med_qty=prs_details1[medInd].quot_med_quantity; 
      e.target.parentNode.parentNode.childNodes[4].childNodes[0].removeAttribute("disabled", "true");;
      e.target.parentNode.parentNode.childNodes[6].childNodes[0].removeAttribute("disabled", "true");
      e.target.parentNode.parentNode.childNodes[7].childNodes[0].removeAttribute("disabled", "true");
      e.target.parentNode.parentNode.childNodes[8].childNodes[0].removeAttribute("disabled", "true");
      }
    }
    if(e.target.name ==='med_qty'){
        // alert(quot_insurance_type)
       prs_details1[medInd].quot_med_quantity = e.target.value
        addvalue(id)
    }

    if (e.target.name === 'inso') {
      prs_details1[medInd].quot_med_inc_cover = e.target.value

      if(e.target.value == "yes"){
         // e.target.parentNode.parentNode.childNodes[6].childNodes[0].removeAttribute("disabled", "true");
      }else if(e.target.value == "no"){
          
          // e.target.parentNode.parentNode.childNodes[6].childNodes[0].value=0;
          // e.target.parentNode.parentNode.childNodes[6].childNodes[0].setAttribute("disabled", "true");
      }else{
 // e.target.parentNode.parentNode.childNodes[6].childNodes[0].removeAttribute("disabled", "true");
      }
    }
    if(e.target.name ==='ins_per'){
       prs_details1[medInd].quot_ins_per = e.target.value;
        addvalue(id)
    }
    if (e.target.name === 'cost') {
      console.log(prs_details1[medInd]);
      prs_details1[medInd].quot_med_cost = e.target.value
      addvalue(id)
    }
    
    if (e.target.name === 'final_cost') {
      prs_details1[medInd].quot_final_cost = e.target.value
    }
    // console.log(medInd, prs_details1);
   
  }


  //adding code 
  function addvalue(id) {

    var ship = 0
    var final_total=0;
    // var ins_per=0;
    var prev_total=0;

     /*gunjan sir code for calculation start here*/
    prs_details1.forEach((v, i) => {
      console.log(`value ${i}`, v);
      let total = 0, med_cost = 0, med_quantity = 0, ins_per = 0;

      if (v.quot_med_cost) med_cost =parseFloat(v.quot_med_cost);
      if (v.quot_med_quantity) med_quantity = parseFloat(v.quot_med_quantity);
      if (v.quot_ins_per) ins_per =parseFloat(v.quot_ins_per);

     
      total = (med_cost * med_quantity);
      console.log("total again", total)

      console.log("this is ins_per", ins_per)

      if (total > 0) {
        total = total - (total *((ins_per) / 100));
        console.log("total inside ins", total)
      } 
      final_total += total
    });
    /* gunjan sir code for calculation ends here*/

     /*previous working code starts here*/
   //  prs_details1.map(m => {
   //    // return total = total + (parseFloat(m.quot_med_cost) * m.quot_med_quantity)

   //    let med_cost =parseFloat(m.quot_med_cost) ||0;
   //    let med_quantity =parseFloat(m.quot_med_quantity)||0;

   //         if (med_cost == NaN || med_cost === ''|| med_cost === undefined) {
   //             med_cost =0;
   //         }
   //          if (med_quantity == NaN || med_quantity === '' || med_quantity === undefined) {
   //             med_quantity =0;
   //         }
   //          if (parseFloat(total) == NaN || total === ''|| total === undefined) {
   //             total =0;
   //         }
        
   //       total = total + (med_cost * med_quantity);
   //           console.log(med_cost,med_quantity,total)
   //     ins_per =parseFloat(m.quot_ins_per)||0;

   // if (ins_per == NaN || ins_per === '' || ins_per === undefined) {
   //             ins_per =0;
   //  }

   //   // ins_per =parseFloat(m.quot_ins_per);
    

   //         if(ins_per){
   //           final_total += total-(total *((ins_per)*.01));
   //           prev_total += final_total;
   //           console.log('ins_per hai to',final_total,prev_total)
   //         }else if(ins_per==0){
   //          final_total += total-(total *((ins_per)*.01));
   //           prev_total += final_total;
   //           console.log('ins_per zero hai',final_total,prev_total)
   //         }else{
   //          // final_total= total;
   //          // final_total=prev_total;
            
   //         }
              
           
   //     console.log('sabse last main total',med_cost,med_quantity,ins_per,total,final_total)
      
   //     if(final_total == 0){
   //         // total=0;
   //     }else{
   //      // total=final_total;
   //     }
      
   //    console.log('final total',final_total)
   //  })
           /*previous working code ends here*/
    
    ship = $('#ship').val();

    if (parseFloat(ship) == NaN || ship === '') {
      ship = 0;
    }
    console.log("ship", ship, parseFloat(ship), 'asss')

    final_total = final_total + parseFloat(ship);
   
    $('.total_amount').html('$' + final_total);

    tat = final_total;
        var rowIndex = prs_details1.findIndex(f => f.quot_med_id === id)
        // console.log(rowIndex, 'rowIndexddd')
if(rowIndex >= 0)
   { 
    var tabRow = document.getElementById('prestable').childNodes[rowIndex].childNodes[8];
    
    var quantity = document.getElementById('prestable').childNodes[rowIndex].childNodes[4];
    var cost    =document.getElementById('prestable').childNodes[rowIndex].childNodes[7];
    var ins =document.getElementById('prestable').childNodes[rowIndex].childNodes[6];
        prs_details1.map((m,i) => {
         if(rowIndex == i){
          let t=0;
      let med_cost1 =parseFloat(m.quot_med_cost)||0;
      let med_quantity1 =parseFloat(m.quot_med_quantity)||0;
      let med_per1 = parseFloat(m.quot_ins_per)||0;
     
      // if (med_cost1 == NaN || med_cost1 == ''|| med_cost1 == undefined) {
      //          med_cost1 =0;
      //      }
      // if (med_quantity1 == NaN || med_quantity1 == '' || med_quantity1 == undefined) {
      //          med_quantity1 =0;
      //      }
      // if (med_per1 == NaN || med_per1 == '' || med_per1 == undefined) {
      //           med_per1=isNaN(med_per1)||0;
      //      }

  t= (med_cost1 * med_quantity1)-(med_cost1 * med_quantity1*(med_per1/100));
         // if(isNaN(med_cost1 * med_quantity1*(med_per1/100))){
         //   t =  (med_cost1 * med_quantity1);
         // }else{
         //  t= (med_cost1 * med_quantity1)-(med_cost1 * med_quantity1*(med_per1*.01));
         // }
        console.log('final_cost field',i,med_cost1,med_quantity1,med_per1,t)
             if(t){
              tabRow.innerText = t;
            }else{
              tabRow.innerText=0;
            }
          
         }
      
       
    })  
       
       // tabRow.innerHtml = tat;
     }
        shap = ship;
  }



  $(document).ready(function() {


   // var pr_det= localStorage.getItem('presc_det');
   
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

  /*save details to localstorage*/

  $('#save').on('click',function(e){

    e.preventDefault();
    // alert('saved')
    var phy_full_name = $('phy_full_name').val();
    var psnt_full_name=$('psnt_full_name').val();
    var psnt_address = $('psnt_address').val();

    var presc_det ={
      'prescription_id':arr[5],
      'phy_full_name':phy_full_name,
      'psnt_full_name':psnt_full_name,
      'psnt_address':psnt_address,
      "quot_shping_chrge": shap,
      "quot_total_chrge": tat,
      "quot_prs_details":prs_details1
    } 

     localStorage.setItem('presc_det',presc_det);
    var pres_det =localStorage.getItem('presc_det');
    if(pres_det){
      alert('Data saved Successfully');
      for (const [key, value] of Object.entries(pres_det)) {
  console.log('-------------------------',`${key}: ${value}`);
     }

    }

  })
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
      "quot_prs_details":JSON.stringify(prs_details1),
      "quot_insurance_type":quot_insurance_type,
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
            
        // $('#message').html(res.message).addClass('alert alert-success');
           swal({
                  title: "You Quotation Send Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
        window.location.href=base_path+"pharmacist_prescription";
      } else {
        $('#message').html(res.message).addClass('alert alert-danger');
      }
    });


  });
  // end send Quotation api call

  //--------------------------------------------------


//--------------------------------------------------
  //notes list
let phama1321 = localStorage.getItem('pharm_det');
    var obja1321 = JSON.parse(phama1321);
    //  console.log("phama1",phama1)
    var pharm_id1321 = obja1321._id;
  var arr1 = [];
  arr1 = window.location.href.split("/");
  // alert(arr1[5])

  $.ajax({
    url: api_url + "notesList",
    type: "post",
    dataType: 'json',
    data: {
      prescription_id: arr1[5],
       user_id:pharm_id1321,
      user_type:"Phamaciest"
    },

  }).done(function(res1) {
    console.log("res1", res1)
    let data1 = res1.data.message;
    // console.log("data1",data1);
    // $("#physician").val(res1.data.message); 
   var row='';

    res1.data.map((e, i) => {


          // if(e.sender_type =='Phamaciest'){
        
          //      $("#noteslist1").append('<tr><td><li class="list-group-item list-group-item-primary" style="text-align:justify;text-align-last: left;list-style-type:none;background-color: #f1f1f9;"><h4>Pharmacist Note</h4>'+e.message+'</li></td><tr>') ;
          //   } else if(e.sender_type =='physician'){
         
          //      $("#noteslist1").append('<tr><td><li class="list-group-item list-group-item-secondary" style="text-align:justify;text-align-last: right;list-style-type:none;background-color: #e3e0ea;"><h4>Physician Notes</h4>'+e.message+'</li></td><tr>') ;
          //   }
     
           if(e.sender_type =='Phamaciest'){
        
               $("#noteslist1").append('<tr><td style="background-color:#f1f1f9;border:1px solid white;"><div class="not clearfix" style="text-align:justify;background-color:#f1f1f9;color:grey;float:right;"><h4 style="float:right;">Pharmacist Note</h4><br><div style="float:right;">'+e.message+'</div></div></td></tr>') ;
            } else if(e.sender_type =='physician'){
         
               $("#noteslist1").append('<tr><td style="background-color:#e3e0ea;border:1px solid white;"><div class="not  clearfix" style="text-align:justify;background-color:#e3e0ea;color:blue;float:left;"><h4 style="float:left;">Physician Notes</h4><br><div style="float:left;">'+e.message+'</div></div></td></tr>') ;
            }

    });

  });
</script>
<script type="text/javascript">
  $('#Create').hide();
  $(document).ready(function() {

    $("#show").click(function() {
      $("#Create").show();
    });
  });

  var api_url = "http://3.220.132.29:3000/api/";
  var base_path = "http://3.220.132.29/medpro/";
  let phama = localStorage.getItem('pharm_det');
  var obja = JSON.parse(phama);
  console.log("phama", phama)
  var pharm_id = obj._id;
  $('#show').on('click', function(event) {
    event.preventDefault();

    var arr5 = [];
    arr5 = window.location.href.split("/");
    /*formvalidation for signup form*/
    var message1 = $('#message1').val();
    var prescription_id = $('#prescription_id').val();
    var sender_id = $('#sender_id').val();
    var sender_type = $('#sender_type').val();

    var formdata = {
      prescription_id: arr5[5],
      sender_id: pharm_id,
      message: message1,
      sender_type: sender_type,
    };
    //    console.log(formdata);
    //    return false;

    if (message1 != "") {
      $.ajax({
        type: "POST",
        url: api_url + "addPresNotes",
        data: formdata,
        dataType: "json",
      }).done(function(res) {
        // alert('done');

        console.log(res);
        //   return false;
        if (res.status == true) {
          $('#messagee').html(res.message).addClass('alert alert-success');
          // alert("done")
          swal({
                  title: "Notes Sent Successfully!",
                  type: "success",
                  buttons: false,
                  showCancelButton: false,
                  showConfirmButton: false,
                  closeOnCancel: false,
                });
          window.location.href=base_path +"accept_prescription/"+arr5[5];
          
            window.location.href=window.location.href;
        } else {
          $('#messagee').html(res.message).removeClass('meshide');
        }
        // window.location.href=window.location.href;
      });
    } else {
      // $('#messagee').html('<p style="color:red;">'+'please enter notes'+'</p>');
    }
     // window.location.reload();

  });
</script>



@endsection