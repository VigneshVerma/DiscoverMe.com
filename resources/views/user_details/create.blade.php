@extends('layouts.app')

@section('content')
<br>
<a href="/home" class="btn btn-primary">Return To Dashboard</a>
<div class="page-container">

    <?php echo Form::open(['action'=> 'User_DetailsController@store', 'method'=>'POST']); ?>

    <h1>Add User Details</h1><br><br>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <h3><label>User_Name:</label></h3>
                {{Form::text('user_name', $user_name, ['class' => 'form-control', 'readonly'])}}
            </div>             
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <h3><label>First Name:</label><span style="color: red">*</span></h3> {{--Label and red star --}}
                {{Form::text('first_name','', ['class' => 'form-control', 'placeholder' => 'First Name', ($errors->has('first_name')) ? 'autofocus' : ''])}}     {{--To redirect to the error field --}}
                @if ($errors->has('first_name'))                        {{--error validation below the field--}}
                            <span class="help-block" style="color:red">
                                {{ $errors->first('first_name') }}*
                            </span>
                        @endif
            </div>             
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <h3><label>Last Name:</label><span style="color: red">*</span></h3> {{--Label and red star --}}
                {{Form::text('last_name','', ['class' => 'form-control', 'placeholder' => 'Last Name', ($errors->has('last_name')) ? 'autofocus' : ''])}}     {{--To redirect to the error field --}}
                @if ($errors->has('last_name'))                        {{--error validation below the field--}}
                            <span class="help-block" style="color:red">
                                {{ $errors->first('last_name') }}*
                            </span>
                        @endif
            </div>             
        </div>


    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                    
                <h3><label for="example-date-input" class="col-2 col-form-label">DOB:</label><span style="color: red">*</span></h3>

                    {{Form::date('dob', '', ['class'=> 'form-control', ($errors->has('dob')) ? 'autofocus' : ''] )}}
                    @if ($errors->has('dob'))
                        <span class="help-block" style="color:red">
                            {{ $errors->first('dob') }}*
                        </span>
                    @endif
                
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <h3><label>Mobile No:</label><span style="color: red">*</span></h3>
                {{Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => 'Mobile No', ($errors->has('mobile')) ? 'autofocus' : ''])}}
                @if ($errors->has('mobile'))
                            <span class="help-block" style="color:red">
                                {{ $errors->first('mobile') }}*
                            </span>
                        @endif
            </div>             
        </div>
    </div>

    <div row="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h3><label>Address:</label><span style="color: red">*</span></h3>
                {{Form::textarea('address', '', ['size' => '70x3', 'class' => 'form-control', 'placeholder' => 'Address', ($errors->has('address')) ? 'autofocus' : ''])}}
                @if ($errors->has('address'))
                        <span class="help-block" style="color:red">
                            {{ $errors->first('address') }}*
                        </span>
                    @endif
            </div>             
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <h3><label>Profile Photo:</label></h3>
                {{Form::file('profile_pic')}} 
            </div>             
        </div>
    </div>

</div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection