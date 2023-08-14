<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.index');
    }

    public function accounts(){
        return view('admin.accounts');
    }

    public function accountDetails(){
        return view('admin.account-details');
    }
    public function settings(){
        return view('admin.settings');
    }
    public function credentials(){
        return view('admin.credentials');
    }
    public function termsAndPolicies(){
        return view('admin.terms-and-policies');
    }
}
