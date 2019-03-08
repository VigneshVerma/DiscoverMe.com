@extends('layouts.app')

@section('content')
    
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small> Written on {{$post->created_at}}</small>
    <p>This is the post Body</p>
    <hr>
    {!!Form::open(['action' =>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
    {{!!Form::close()!!}}
    
@endsection