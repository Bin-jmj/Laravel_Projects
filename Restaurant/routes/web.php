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

// Route::get('/{info}', function ($info) {
//     // echo $info;
//     return view('welcome',['info'=>$info]);
// });

// Route::get('/','RestoController@index'); this is not work with new version of laravel
Route::view('/','home');
// Route::get('/', 'App\Http\Controllers\RestoController@index');
Route::get('list','App\Http\Controllers\RestoController@list' );
Route::view('add','add');
Route::post('add','App\Http\Controllers\RestoController@add');
// Route::get('/', [RestoController::class, 'index']);