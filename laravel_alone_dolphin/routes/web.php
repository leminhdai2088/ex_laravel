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
Route::get('/home', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.home');

});
Route::get('/page_intro', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.page_intro');

});
Route::get('/living_room', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.living_room');

});
Route::get('/list_product', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.list_product');

});
Route::get('/home_office', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.home_office');

});
Route::get('/kitchen_room', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.kitchen_room');

});
Route::get('/product_details', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.product_details');

});
Route::get('/sign-in', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.sign-in');

});
Route::get('/sign-up', function () {
   // return \App\Models\rooms::find(2)->products;
   return view('front.sign-up');

});
Route::get('/', function(){
   return \App\Models\rooms::find(2)->products;
});