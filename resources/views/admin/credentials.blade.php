@extends('layouts.admin')
@section('content')
    <div class="back-button">
            <h2>Credential</h2>
                <a href="./adminSettings.php"><button type="button">Back</button></a>
            </div>

        <div class="credential-container">
            <div class="credentail-wrapper">
                <div class="username-label">
                    <p>Username:</p>
                    <p><b>Admin</b></p>
                </div>
                <div class="btn-change-username">
                    <a href="./emailConfirm.php"><button type="button">Change username</button></a>
                </div>
                    <div class="change-pass">
                        <a href="./emailConfirm.php"><button type="button">Change Password</button></a>
                    </div>
            </div>
        </div>
@endsection