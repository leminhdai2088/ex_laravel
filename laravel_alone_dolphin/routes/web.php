<?php

use App\Models\product_category;
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

Route::get('/bath_room', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.bath_room');

});


Route::get('/bed_room', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.bed_room');

});