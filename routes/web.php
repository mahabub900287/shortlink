<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index',[UrlController::class,'index'])->name('url.index');
Route::get('/create',[UrlController::class,'create'])->name('url.create');
Route::post('/store',[UrlController::class,'store'])->name('url.store');
Route::get('/destroy/{id}',[UrlController::class,'destroy'])->name('url.destroy');
Route::get('/show/{id}',[UrlController::class,'show'])->name('url.show');
