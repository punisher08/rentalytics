<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use \App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){

        return view('admin.index');
    }

    public function accounts(){
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.accounts',compact('users'));
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
    public function userDetails($id){
        $user = User::find($id);
        return view('admin.account-details',compact('user'));
    }
    public function dataAnalytics(){
        
        return view('admin.data-analytics');
    }
    public function rentalPlaces(){
        
        return view('admin.rental-places');
    }
    public function rentalAccountDetails(){
        
        return view('admin.rental-account-details');
    }
    public function deleteAccount( $id ){
        $user = User::find($id);
        $user->delete();
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.accounts',compact('users'));
    }
}
