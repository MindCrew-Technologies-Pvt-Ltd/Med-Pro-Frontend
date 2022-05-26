@extends('layouts.vertical-menu1.master')
@section('css')
@endsection
@section('page-header')
<style>
  #physician {
    padding-left: 10px;
    border: none;
  }

  #pharmacist {
    padding-left: 10px;
    border: none;
  }

  #cost {
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
    padding-right: 88%;
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
  }

  .meshide {
    display: none;
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
            <div class="table-responsive mt-7">
              <table id="myTable" class="table table-striped table-bordered text-nowrap w-100">
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
              <div class="shipcharge">
                <h7 class="">Shipping charges</h7>
                <input type="text" id="ship" name="ship" value="" onchange="addvalue()">
                <!-- <h7 class=""></h7> -->
              </div><br>

              <div class="totalcharges">
                <h7>Total charges</h7>
                <h7 class="total_amount"></h7>
              </div>

            </div>
            <!-- table end -->

            <h4 class="float-left ppname">Physician Note</h4><br><br>
            <input class="input100" type="text" name="physician" id="physician" placeholder="Physician" disabled><br><br>
            <h4 class="float-left ppname">Pharmacist Note</h4><br><br>
            <input class="input100" type="text" name="pharmacist" id="pharmacist" placeholder="pharmacist" disabled>
            <!-- <i class="zmdi zmdi-email" aria-hidden="true" style="position: absolute;float:right;left: 3rem;top: 28.7rem;"></i> -->


            <div class="form-group mt-6" id="Create">
              <input type="text" class="form-control" name="message" id="message1" placeholder="Enter Notes">
              <p class="text-red meshide" id="messagee">Please enter notes</p>
            </div>
            <a class="btn  btn-primary mt-5 mb-3 float-right border-0" href="{{url('pharmacist_prescription')}}">Ok</a>

            <div class="buttons mt-7">
              <button class="btn btn-primary border-0" id="sendquatation">Send Quatation</button>
              <button class="btn btn-primary border-0  hide" id="show">Add notes</button>
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

  $.ajax({
    url: api_url + "viewPsntPhyPresDetails",
    type: "post",
    dataType: 'json',
    data: {
      presciption_id: arr[5],
    },

  }).done(function(res) {
    console.log("respons", res);
    //   console.log("respons,data",res.data);

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
        // console.log(key._id);
        // console.log(key.prs_information);
        // console.log(key.prs_med_name);
        // console.log(key.prs_quantity);
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
      console.log(prs_det, 'prs_det');
    }


    console.log(prs_det);
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
      rows = rows + '<tr><td>' + i + '</td><td>' + e.prs_med_name + '</td><td>' + e.prs_quantity + '</td><td><select class="form-control" onchange="selectListEvent(event , \'' + e._id + '\')"  class="availibility" name="avail"><option >Yes / No</option><option value="yes">Yes</option><option value="no">No</option></select></td><td><select class="form-control" class="insurance_co" onchange="selectListEvent(event , \'' + e._id + '\')" name="inso" ><option>Yes / No</option><option value="yes">Yes</option><option value="no">No</option></select></td><td><input type="text" value="" name="cost" class="cost" id="cost" onchange="selectListEvent(event , \'' + e._id + '\')"></td></tr>'
      //   $("#myTable").append('<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4>Are you sure you <br> want to delete the prescription?</h4></div><div class="modal-footer"><button type="button" class="btn btn-danger sbmt" data-dismiss="modal">Cancel</button><button id="'+e.presciption_id+'" onclick="deletedata(this)" class="btn text-white sbmt mdbtn">Yes Delete It!</button></div></div></div></div>');         

    });
    $("#prestable").html(rows);

  });


  //--------------------------------------------------
  function selectListEvent(e, id) {
    e.preventDefault();

    console.log(e.target.value, e.target.name, id, 'aaaaaaaaaaaaaa');
    var medInd = prs_details1.findIndex(f => f.quot_med_id === id)
    console.log(medInd,prs_details1 )
    if (e.target.name === 'avail') {
      prs_details1[medInd].quot_med_availty = e.target.value
    }
    if (e.target.name === 'inso') {
      prs_details1[medInd].quot_med_inc_cover = e.target.value
    }
    if (e.target.name === 'cost') {
      console.log(prs_details1[medInd]);
      prs_details1[medInd].quot_med_cost = e.target.value
      addvalue()
    }
    console.log(medInd, prs_details1);

  }
  //adding code 
  function addvalue() {

    var total = 0;
    var ship = 0

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
      return total = total + (parseFloat(m.quot_med_cost) * m.quot_med_quantity)
    })
    console.log(total);
    ship = $('#ship').val();

    if (parseFloat(ship) == NaN || ship === '') {
      ship = 0;
    }
    console.log("ship", ship, parseFloat(ship), 'asss')

    total = total + parseFloat(ship);

    $('.total_amount').html('$' + total);

    tat = total;
    shap = ship;
  }
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
<script>
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
          window.location.href = base_path + "accept_prescription/" + arr5[5];
        } else {
          $('#messagee').html(res.message).removeClass('meshide');
        }
      });
    } else {
      // $('#messagee').html('<p style="color:red;">'+'please enter notes'+'</p>');
    }

  });
</script>



@endsection