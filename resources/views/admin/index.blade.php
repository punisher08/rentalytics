@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="admin-tabs">
            <div>
                <a href="{{route('admin-accounts')}}"><button type="button">Manage Accounts</button></a>
            </div>
            <div>
                <a href="{{route('admin-data-analytics')}}"><button type="button">Data Analytics Reports</button></a>
            </div>
            <div>
                <a href="mapAdmin.php"><button type="button">View Map</button></a>
            </div>
        </div>
    </div>
@endsection