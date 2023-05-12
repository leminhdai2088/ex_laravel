<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\front;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

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



// home
Route::get('/', [front\HomeController::class, 'index']);
Route::get('/home', [front\HomeController::class, 'index']);




// trang admin
Route::prefix('admin')->middleware('admin')->middleware('auth')->group(function () {
    Route::get('/add', [AdminController::class, 'add']);
    Route::post('/add', [AdminController::class, 'store']);
    Route::get('/edit/{id}', [AdminController::class, 'edit']);
    Route::patch('/edit/{id}', [AdminController::class, 'editpost']);
    Route::delete('/delete_product/{id}', [AdminController::class, 'delete_pro']);
    Route::get('/orders', [AdminController::class, 'orders']);
    Route::get('/products', [AdminController::class, 'products']);
    Route::get('/order/{id}', [AdminController::class, 'order_detail']);
    Route::patch('/orders/change_status', [AdminController::class, 'change_status']);
    Route::get('/orders/filter', [AdminController::class, 'filter_order']);
    Route::get('/users', [AdminController::class, 'users']);


    // BLOG
    Route::get('/blogs', [AdminController::class, 'blogs']);
    Route::get('/add_blog', [AdminController::class, 'add_blog']);
    Route::post('/add_blog', [AdminController::class, 'store_blog']);
    Route::get('/edit_blog/{id}', [AdminController::class, 'edit_blog']);
    Route::patch('/edit_blog/{id}', [AdminController::class, 'edit_blog_post']);
    Route::delete('/delete_blog/{id}', [AdminController::class, 'delete_blog']);

});

// trang thanh toán
Route::prefix('checkout')->middleware('auth')->group(function () {
    Route::get('/', [front\CheckOutController::class, 'index']);
    Route::post('/', [front\CheckOutController::class, 'add_order']);
});


// chỉnh sửa thông tin user
Route::prefix('edit_user')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'edit']);
    Route::patch('/', [UserController::class, 'editpost']);
});



Route::get('/sign_up', [UserController::class, 'create']);

Route::post('/sign_up', [UserController::class, 'store']);

Route::get('/sign_in', [UserController::class, 'show'])->name('login');

Route::post('/sign_in', [UserController::class, 'auth']);

Route::post('/log_out', [UserController::class, 'log_out']);

Route::get('/about_us', [front\HomeController::class, 'about']);

Route::get('/blog', [front\HomeController::class, 'blog']);

Route::get('/blog/{link}', [front\HomeController::class, 'blog_detail']);

// Route::post('/blog/{id}', [front\HomeController::class, 'blog_rating']);

Route::prefix('/blog/{link}')->middleware('auth')->group(function () {
    Route::post('/', [HomeController::class, 'blog_rating']);
});


// forgot password

Route::get('/forgot_password', [UserController::class, 'forgot_pass']);

Route::post('/recover_pass', [UserController::class, 'recover_pass']);

Route::get('/update-new-password', [UserController::class, 'change_password']);

Route::post('/update-new-password', [UserController::class, 'change_passpost']);


// Route::get('/profile', [front\HomeController::class, 'profile'])->middleware('auth');
Route::prefix('/profile')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'profile']);
    Route::get('/orders/{id}', [HomeController::class, 'order_detail']);
});

Route::get('/cart', [front\HomeController::class, 'cart']);


//Cart
Route::prefix('cart')->group(function () {
    Route::get('/add/{id}', [front\CartController::class, 'add']);
    Route::get('/', [front\CartController::class, 'index']);
    Route::get('delete/{rowId}', [front\CartController::class, 'delete']);
    Route::get('destroy', [front\CartController::class, 'destroy']);
    Route::get('update', [front\CartController::class, 'update']);

});

Route::get('/{room}', [front\DisProController::class, 'index']);

Route::get('/{room}/{loai}', [front\ShopController::class, 'loai']);

Route::get('/{room}/{loai}/{id}', [front\ShopController::class, 'show']);




Route::fallback(function(){
    return view('errors.404');
});

