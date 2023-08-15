@extends('layouts.admin')
@section('content')

<div class="back-button">
        <h2>Manage Accounts</h2>
        <a href="mngAcc"><button type="button">Back</button></a>
    </div>

    <div class="account-details">
        <div class="account-data">
            <div class="account">
                <p>Account ID: {{$user->id}}</p>
                <p>Type: {{$user->role}}</p>
            </div>
            <div class="user-account-details">
                <p>Username: {{$user->name}}</p>
                <p>Password: {{$user->password}}</p>
            </div>
            <div class="details">
                <p>Name: {{$user->name}}</p>
                <p>Brthdate: {{$user->birthday}}</p>
                <p>Age: {{$user->age}}</p>
                <p>Sex: {{$user->gender}}</p>
                <p>Contact No: {{$user->contact}}</p>
                <p>Email: {{$user->email}}</p>
            </div>
            <div class="verify-account">
                <button type="button">Verify Account</button></a>
                <a href="verifyacc"><button type="button">See Verification</button></a>
            </div>

            <div class="post-place">
                <h4>Rental places:</h4>
                <p>Place ID:</p><button type="button">View</button>
                <br>
                <p>Place ID:</p><button type="button">View</button>
            </div>

            <!-- action if may include here the active status of acc?? hihih-->
            <div class="account-action">
            <a href="{{route('account-delete',['id' => $user->id])}}"><button type="button">Delete Account</button></a>
            </div>
        </div>
    </div>
</body>
@endsection