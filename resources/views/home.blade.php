@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div><br>

                {{-- <img src="data:image/png;base64,{{base64_encode($userimage)}}" height="50%" width="50" alt="Image Not Found" style="width:50% display:block margin-left: auto margin-right: auto"> --}}
                {{-- {{$username}} --}}
                {{-- <label>Profile Picture:-</label> --}}
                {{-- <input type="file" name="profile_pic" accept="image/*">  --}}
               
                {{-- @if( Session::get('flag')==true) --}}
                    {{-- <p> Details have been added successfully</p> --}}
                {{-- @endif --}}
                @if(!Session::get('added'))

                    <a href="/user_details/create" class="btn btn-primary col-lg-3">Add User Details</a>
                @endif
              
                <br>

                <a href="/user_details/show/{{auth()->user()->id}}" class="btn btn-primary col-lg-3">Profile Page</a>

                <br>
                
                <a href="/user_details/edit/{{auth()->user()->id}}" class="btn btn-primary col-lg-3">Edit User Details</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged in!</h3>
                    <br>
                   
                    {{-- <a href="/posts/create" class="btn btn-primary">Add Your Slambook Details</a> --}}
                    <a href="add" class="btn btn-primary">Add Your Slambook Details NOsql</a>
                    <br><br>
                    <p> Click Below To Logout</p>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
