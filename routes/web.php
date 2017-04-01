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

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::post('/signup',function () {
//    dd('signup');
//});

Route::group(['prefix' => 'user'], function() {
    Route::get('/signup', 'SignupController@create');
    Route::post('/signup', 'SignupController@store');

    Route::get('/signin', 'SigninController@create');
    Route::post('/signin', 'SigninController@store');
});
Route::get('/room/acadamic', 'AcadamicController@create')->name('academic');
Route::get('/shop/shop', function(){
   return view('shop.shop');
});
