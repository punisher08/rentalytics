
@extends('layouts.admin')
@section('content')
    <div class="manage-title">
                <h2>Profile</h2>  
            </div>
                            <!-- button here -->
            <div class="profile-container">
                <div class="profile-wrapper">
                    <div>
                        <a href="{{route('admin-rental-places')}}"><button type="button">Manage Rental Places</button></a>
                    </div>
                    <div>
                        <a href="{{route('admin-credentials')}}"><button type="button">Credentials</button></a>
                    </div>
                </div>
            </div>
@endsection