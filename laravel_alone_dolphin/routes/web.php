<?php


use App\Http\Controllers\front;
use App\Http\Controllers\front\HomeController;
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

Route::get('/', [front\HomeController::class, 'index']);

Route::get('/about_us', [front\HomeController::class, 'about']);

Route::get('/sign_in', [front\HomeController::class, 'signin']);

Route::get('/sign_up', [front\HomeController::class, 'signup']);

Route::get('/{room}',[front\DisProController::class, 'index'] );

Route::get('/{room}/{loai}',[front\ShopController::class,'loai']);

Route::get('/{room}/{loai}/{id}',[front\ShopController::class,'show']);