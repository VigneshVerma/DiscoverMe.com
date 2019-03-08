<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\user_details;
use App\User;
use Auth;
use Redirect;

class User_DetailsController extends Controller
{
    public function create(){
    
    $user_name=auth()->user()->name;
    // Session::put('added',false);
    // return Auth()::Users()->name;
        return view('user_details.create')->with('user_name', $user_name);
    }

    public function store(Request $request)
      {  //return $request;
        
        $this->validate($request, [
            'address'=>'required',
            'mobile'=>'required|numeric|digits:10',
            'dob'=>'required|date_format:Y-m-d|before_or_equal:1998-01-01|after:1950-01-01',
            'last_name'=>'required|alpha',
            'first_name'=>'required|alpha',
            'user_name'=>'required|unique:user_details,user_name',                 
        ]);

        
        
        $user = new user_details;
        $user->user_name=$request->input('user_name');    
        $user->first_name=$request->input('first_name');
        $user->last_name=$request->input('last_name');
        $user->dob=$request->input('dob');
        $user->contact_no=$request->input('mobile');
        $user->address=$request->input('address');
        $user->profile_photo=$request->input('profile_pic');
        // Session::put('userimage',$user->profile_photo);
        // Session::put('username',$user->user_name);
        $user->save();
        // $temp=auth()->user()->name;
        $temp=auth()->user()->id;
        // Session::put('added',true);
        // return redirect('/user_details/show')->with('success', 'User Details Added');
        return Redirect::action('User_DetailsController@show', array('temp'=>$temp));
    }

    public function show($temp)
    {
        // return $temp;
        $user= user_details::find( $temp);
        // return $user;
        return view('user_details.show')->with('user', $user);
    }

    public function edit($temp)
    {
        $user= user_details::find( $temp);
        return view('user_details.edit')->with('user', $user)->with('temp',$temp);
    }

    public function update(Request $request)
      {  
        
        $this->validate($request, [
            'address'=>'required',
            'mobile'=>'required|numeric|digits:10',
            'dob'=>'required|date_format:Y-m-d|before_or_equal:1998-01-01|after:1950-01-01',
            'last_name'=>'required|alpha',
            'first_name'=>'required|alpha',
            // 'user_name'=>'required|unique:user_details,user_name',                 
        ]);

        
        
        $user = user_details::find($request->temp);
        $user->user_name=$request->input('user_name');    
        $user->first_name=$request->input('first_name');
        $user->last_name=$request->input('last_name');
        $user->dob=$request->input('dob');
        $user->contact_no=$request->input('mobile');
        $user->address=$request->input('address');
        $user->profile_photo=$request->input('profile_pic');
        // Session::put('userimage',$user->profile_photo);
        // Session::put('username',$user->user_name);
        $user->save();
        // $temp=auth()->user()->name;
        // $temp=$user->user_name;
        // Session::put('added',true);
        // return redirect('/user_details/show')->with('success', 'User Details Added');
        // return Redirect::action('User_DetailsController@show', array('temp'=>$temp));
        return redirect('/home')->with('success', 'User Details Updated');
    }


}
