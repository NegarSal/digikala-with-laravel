<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserCart;
use App\Http\Controllers\SliderController;

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

Route::view('/', 'index');

Route::post("user",[UserAuth::class,'userLogin']);

Route::view('/login', 'login');

Route::view('/cart', 'cart');

Route::view('/product', 'product');

//Route::get('/', [SliderController::class,'show']);
//Route::get('/','App\Http\Controllers\MasterController@index');


