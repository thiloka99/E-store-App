<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('index');
});
Route::post('/reg', function () {
    return view('register');
});
Route::post('/register',[UserController::class,'store'])->name('registerr');
Route::post('/login55',[LoginController::class, 'checkLogin']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/dashboard.admin',function(){
    return view('dashboard.admin');
});

Route::resources([
    'products'=> ProductController::class,
    'users' => UserController::class,
    'orders' => OrdersController::class]);

Route::get('/',[ProductController::class,'index'] );

Route::resource('productss',ProductController::class);