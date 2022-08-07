<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;

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

Route::get('/login', function () {
    return view('Login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return Redirect('login');
});


Route::post("/login" , [UserController::class,'login']);
Route::get("/" , [productController::class,'index']);
Route::get("detail/{id}" , [productController::class,'detail']);
Route::get("search" , [productController::class,'search']);
Route::post("add-to-carte" , [productController::class,'addToCart']);
