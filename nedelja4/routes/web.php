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
    return view('layout');
});

Route::get("/home/products", function () {
    return view('home');
});

Route::get("/", [\App\Http\Controllers\FrontendController::class, "index"])->name("home");
Route::get("/cart", [\App\Http\Controllers\FrontendController::class, "cart"])->name("cart");
