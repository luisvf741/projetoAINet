@extends('layouts.app')

@section('title', 'List users')

@section('content')

@if (count($users))
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td><a href="{{route('profile',$user)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
    @endforeach
    </table>
@else
    <h2>No users found</h2>
@endif
@endsection