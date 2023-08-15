
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="back-button">
        <h2>Manage Rental Places</h2>
        <a href="{{ url()->previous() }}"><button type="button">Back</button></a>
    </div>
    <rental-places></rental-places>
</div>
@endsection 