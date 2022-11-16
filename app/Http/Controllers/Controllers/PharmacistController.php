<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    // register page of pharmacist
    public function registration()
    {
        return view('pharmacist/pharmacistregister');
    }

    public function index()
    {
        return view('pharmacist/pharm_edit_profile');
    }
}
