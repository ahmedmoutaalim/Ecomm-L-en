<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\productController;
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


Route::post("/login" , [UserController::class,'login']);
Route::get("/" , [productController::class,'index']);
Route::get("detail/{id}" , [productController::class,'detail']);
Route::get("search" , [productController::class,'search']);
Route::post("add-to-carte" , [productController::class,'addToCart']);
