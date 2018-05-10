@extends('layouts.login')

@section('content')

    <h1>This is Admin Page</h1>
    <a href="{{url('log')}}"><button class="btn btn-outline-success">Login</button></a>
    <a href="{{url('reg')}}"><button class="btn btn-outline-success">Register</button></a>
    <a href="{{url('admin/users')}}"><button class="btn btn-outline-info">Users</button></a>
@endsection