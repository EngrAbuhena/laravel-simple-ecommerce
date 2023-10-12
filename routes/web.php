<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add-to-cart",[ProductController::class,'addToCart']);
Route::get("cart-list",[ProductController::class,'cartList']);
Route::get("remove-cart/{id}",[ProductController::class,'removeCart']);
Route::get("order-now",[ProductController::class,'orderNow']);
Route::post("place-order",[ProductController::class,'placeOrder']);
Route::get("orders",[ProductController::class,'myOrders']);


