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
    return view('dutch/home');
});

Route::get('/projecten', function (){
    return view('dutch/projecten');
});

Route::get('/hobbys', function (){
    return view('dutch/hobbys');
});

Route::get('/huisdieren', function (){
    return view('dutch/huisdieren');
});

Route::get('/werk', function (){
    return view('dutch/werk');
});

Route::get('/prestaties', function (){
    return view('dutch/prestaties');
});
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
