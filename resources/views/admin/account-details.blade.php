@extends('layouts.admin')
@section('content')
<div class="back-button">
        <h2>Manage Accounts</h2>
        <a href="mngAcc"><button type="button">Back</button></a>
    </div>

    <div class="account-details">
        <div class="account-data">
            <div class="account">
                <p>Account ID:</p>
                <p>Type:</p>
            </div>
            <div class="user-account-details">
                <p>Username:</p>
                <p>Password:</p>
            </div>
            <div class="details">
                <p>Name:</p>
                <p>Brthdate:</p>
                <p>Ages:</p>
                <p>Sex:</p>
                <p>Contact No:</p>
                <p>Email:</p>
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
                <button type="button">Delete Account</button>
            </div>
        </div>
    </div>
</body>
@endsection