<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenterController extends Controller
{
    //
    public function dashboard(){
        return view('renter.index');
    }
    public function houseDetails(){
        return view('renter.house-details');
    }
    public function search(){
        return view('renter.search');
    }
    public function profile(){
        return view('renter.profile');
    }

 
}
