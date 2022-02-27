<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [ImageController::class,'index']);

Route::get('/about', [HomeController::class,'about']);


Route::get('/add/photo', [ImageController::class,'addPhoto']);
Route::get('/show/{id}',[ImageController::class,'showOne']);

Route::get('/edit/{id}', [ImageController::class,'edit']);

Route::post('/store/update/{id}', [ImageController::class,'update']);

 Route::post('/stored', [ImageController::class,'stored']);

 Route::get('/delete/{id}',[ImageController::class,'delete']);
