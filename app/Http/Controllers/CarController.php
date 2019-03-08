<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class CarController extends Controller
{
    public function create()
    {
        return view('carcreate');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');        
        $car->fblink = $request->get('fblink');
        $car->instalink = $request->get('instalink');
        $car->photolink = $request->get('photolink');
        $car->snapchatid = $request->get('snapchatid');
        $car->sportsperson = $request->get('sportsperson');
        $car->favoritebook = $request->get('favoritebook');
        $car->favoritebike = $request->get('favoritebike');
        $car->favoritecar = $request->get('favoritecar');
        $car->favoritebrand = $request->get('favoritebrand');

        $car->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }
    public function index()
    {
        $cars=Car::all();
        return view('carindex',compact('cars'));
    }
}
