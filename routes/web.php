<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');

Route::get('/user_details/create','User_DetailsController@create');
Route::post('/user_details/store','User_DetailsController@store');
Route::get('/user_details/edit/{id}','User_DetailsController@edit');
Route::get('/user_details/show/{id}','User_DetailsController@show');
Route::post('/user_details/update','User_DetailsController@update');

/*
Route::get('/users/{Name}/{id}', function($Name,$id)
{
return 'this is '.$Name.' with id '.$id;
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add','CarController@create');
Route::post('add','CarController@store');
Route::get('car','CarController@index');
Route::get('edit/{id}','CarController@edit');
Route::post('edit/{id}','CarController@update');
Route::delete('{id}','CarController@destroy');

