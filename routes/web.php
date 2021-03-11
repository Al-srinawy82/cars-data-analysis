<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('vehicle', function(){
    return view('vehicle');
});

Route::get('date', function(){
    return view('date');
});

Route::get('gate', function(){
    return view('gate');
});


Route::post('upload', 'CarDataController@fiterData')->name('upload');