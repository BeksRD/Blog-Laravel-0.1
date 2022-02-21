<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    $image = DB::table('image')
        ->select('*')
        ->get();
    dd($image->pluck('image')->all());
    dd(get_class_methods($image));
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/add/photo', function () {
    return view('add_photo');
});
Route::get('/show',function (){
    return view('show');
});

Route::get('/edit', function (){
    return view('edit');
});

 Route::post('/stored', function (Request $request){
     $image = $request->file('image');
     $fileName = $image->store('images');
     DB::table('image')->insert(['image'=>$fileName]);
     return redirect('/');
 });
