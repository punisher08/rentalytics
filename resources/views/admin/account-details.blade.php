@extends('layouts.admin')
@section('content')
<section class="container">
    <div class="back-button">
        <h2>Manage Accounts</h2>
        <a href="{{ url()->previous() }}"><button type="button">Back</button></a>
    </div>
    <account-details :user="{{$user}}"></account-details>
</section>
</body>
@endsection