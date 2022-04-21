@extends('layouts.vertical-menu1.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('page-header')
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
                                        <h3 class="card-title">View Prescription</h3>
                                        
                                   <div class="ml-auto pageheader-btn">
                                            {{-- <a href="{{ url('add_prescription') }}" class="btn btn-primary btn-icon text-white mr-2">
                                                <span>
                                                    <i class="fe fe-plus"></i>
                                                </span> Add 
                                            </a> --}}
                                           
                                    </div>


                                    </div>
                                    <div class="card-body">
                                         <div class="text-center" id="message">
                                               
                                             </div>
                                        <div class="table-responsive">
                                            <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p">S.No</th>
                                                        <th class="wd-15p">Patient Name</th>
                                                        <th class="wd-15p">Physician name</th>
                                                        <th class="wd-20p">Address</th>
                                                        <th class="wd-15p">Notes</th>
                                                        <th class="wd-10p">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                              
                                                   
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                View
                                              </button>
                                        </div>
                                    </div>
                                    <!-- TABLE WRAPPER -->
                                </div>
                                <!-- SECTION WRAPPER -->
                            </div>
                            <!-- Button trigger modal -->

  
  <!-- Modal -->
 

  {{-- xl --}}
   

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-group">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="physician_name" id="physician_name"placeholder="Physician namee" >
            </div>
            <div class="form-group">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="patient_name" id="patient_name"placeholder="Patient name" >
            </div>
             {{-- table  start--}}
            <div class="card-body">
                     <div class="text-center" id="message">
                      
                    </div>
               <div class="table-responsive">
                       <table id="myTable"  class="table table-striped table-bordered text-nowrap w-100">
                           <thead>
                                <tr>
                                    <th class="wd-15p">Serial Number</th>
                                    <th class="wd-15p">Name of the medicine</th>
                                    <th class="wd-15p">Quantity</th>
                                    {{-- <th class="wd-20p">Messages</th>
                                    <th class="wd-15p">Information</th>
                                    <th class="wd-10p">Action</th> --}}
                               
                                </tr>
                           </thead>
                       <tbody>
                     
                          
                       </tbody>
                       </table>
               </div>
           </div>
           <!-- TABLE WRAPPER -->

            <div class="form-group">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="notes" id="notes"placeholder="Notes" >
            </div>
            <div class="form-group">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="physician" id="physician"placeholder="Physician" >
            </div>
            <div class="form-group">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="pharmicist" id="pharmacy_name"placeholder="pharmicist" >
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  {{-- xl --}}


  
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

   

@endsection




