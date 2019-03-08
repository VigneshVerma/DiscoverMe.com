<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\user_details;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = user_details::find();
        Session::put('added',false);
        $profilephoto=Session::get('userimage');
        //$username=Session::get('username');
        //$user=Auth::user();
        //Session::put('userimage',$user->profile_photo);
        return view('home')->with('userimage', $profilephoto);
    }
}
