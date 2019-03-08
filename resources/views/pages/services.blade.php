@extends('layouts.app')
@section('content')
        <h1> {{$title}}</h1>
        <h3><body>This is the services page of  DiscoverMe application</body></h3>
        @if(count($services)>0)
                <ul class="list-group">
                @foreach ($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
                </ul>
        @endif
                <br>
        <a href="/home" class="btn btn-primary">Return To Dashboard</a>
@endsection
