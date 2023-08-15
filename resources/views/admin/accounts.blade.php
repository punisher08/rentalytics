@extends('layouts.admin')
@section('content')
<div class="user-container">
            <div class="user-data">
                @foreach ($users as $user)
                <div>
                    <h2>{{$user->id}}</h2>
                </div>
                <div>
                    <h2>{{$user->name}}</h2>
                </div>
                <div>
                    <a href="/admin/{{$user->id}}/details"><button>View</button></a>
                </div>
                @endforeach
            </div>
        </div>
        </div>
@endsection