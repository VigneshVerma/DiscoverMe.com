@extends('layouts.app')

@section('content')

    
    <h2><label>Profile Picture:-</label></h2><br><br>
    {{-- <img src="{{ $user->profile_photo }}" alt="Any alt text"/> --}}
    <img src="data:image/png;base64,{{base64_encode($user->profile_photo)}}" height="50%" width="50%" alt="KHUL JA SIM SIM" style="width:50% display:block margin-left: auto margin-right: auto">
    <br>
    <h2><label>User Name:- </label>{{$user->user_name}}</h2>
    <h2><label>First Name:- </label>{{$user->first_name}}</h2>
    <h2><label>Last Name:- </label>{{$user->last_name}}</h2>
    <h2><label>Date Of Birth:- </label>{{$user->dob}}</h2>
    <h2><label>Mobile Number:- </label>{{$user->contact_no}}</h2>
    <br>
    <a href="/home" class="btn btn-primary">Return To Dashboard</a>
@endsection    