<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
   /*custom functions for Admin portal*/
    public function index(){

        return view('admin/adminlogin');
    }

     public function login()
    {
    return view('admin/adminlogin');
    }
    public function dashboard()
    {

        return view('admin/index');

    }
    public function admin_pharmacist_mgmt(){
       
        return view('admin/pharmacistmgmt');
    }
    public function admin_physician_mgmt(){
        return view('admin/physicianmgmt'); 
    }

    public function admin_patient_mgmt(){
        return view('admin/patientmgmt'); 
    }
}
