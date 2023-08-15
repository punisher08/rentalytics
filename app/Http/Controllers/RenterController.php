<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RenterController extends Controller
{
    //
    public function __construct(){
        // $this->middleware('verifyrole');
        // dd(Auth::user());
    }
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
