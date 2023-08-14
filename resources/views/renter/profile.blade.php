@extends('layouts.renter')
@section('content')
<div class="profile-container">
        <div class="profile-title">
            <h2>Profile</h2>
        </div>
        <!-- profile tab -->
        <!-- show din p sana yung sa username before personal info  -->
        <div class="profile-wrapper" id="profile-wrap">
            <div class="Buttons">
                <a href="inforR"><button type="button">Personal Information</button></a>
                <a href="togoR"><button type="button">To-Go Rental Places</button></a>
                <a href="personalInfoR"><button type="button">Settings</button></a>
                <a href="tnpR"><button type="button">Terms & Privacy Policies</button></a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <button type="button">Logout</button>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                </form>
            </div>
        </div>
    </div>
@endsection