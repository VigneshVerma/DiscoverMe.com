@extends('layouts.app')
@section('content')
    <br>
    <br>
    <h1>Add Slambook Details</h1>
    {!! Form::open(['action' => 'PostsController@store' , 'method'=> 'POST' ]) !!}
    <div class="form-group">
        {{Form::label('title','Hobbies')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Enter Your Hobbies')}}
        {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection