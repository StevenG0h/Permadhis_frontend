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

Route::get('/', function(){
    return redirect('home');
});

Route::middleware('auth')->group(function(){
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('adminHome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
