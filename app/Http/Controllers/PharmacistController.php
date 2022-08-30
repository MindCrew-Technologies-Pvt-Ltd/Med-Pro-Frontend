<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    public function PharmacistLogin()
    {
        return view('pharmacist/pharmacistlogin');
    }
    public function pharmacistregister()
    {
        return view('pharmacist/pharmacistregister');
    }
    public function pharmasictforgotpassword()
    {
        return view('pharmacist/pharmasictforgotpassword');
    }
    public function pharmasictforgotpassword02()
    {
        return view('pharmacist/pharmasictforgotpassword02');
    }
    public function pharmacist_prescription()
    {
        return view('pharmacist/pharmacist_prescription');
    }
    public function reset_password()
    {
        return view('pharmacist/reset_password');
    }

    public function reset_success()
    {
        return view('pharmacist/reset_success');
    }
    public function dashboard()
    {
        return view('pharmacist/index');
    }
    public function pharmacistManagement()
    {
        return view('pharmacist/Pharmacy_management');
    }
    public function viewPrescription()
    {
        return view('pharmacist/viewprescription');
    }
    public function acceptPrescription()
    {
        return view('pharmacist/acceptprescription');
    }
    public function editPharmProfile()
    {
        return view('pharmacist/pharm_edit_profile');
    }
    public function viewPharmProfile()
    {
        return view('pharmacist/pharm_profile');
    }
    public function landing()
    {
        return view('landing');
    }
     public function showPrescription()
    {
        return view('pharmacist/showprescription');
    }
}
