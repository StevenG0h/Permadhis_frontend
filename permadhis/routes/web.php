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
    Route::get('/add',[App\Http\Controllers\adminAdd::class,'index'])->name('add');
    Route::post('/addProcess',[App\Http\Controllers\adminAdd::class,'addProcess'])->name('addProcess');
    Route::get('/update/{id}',[App\Http\Controllers\adminUpdate::class,'index'])->name('update');
    Route::post('/updateImage/{id}',[App\Http\Controllers\adminUpdate::class,'updateImage'])->name('updateImage');
    Route::get('/delete',[ App\Http\Controllers\adminDelete::class,'index'])->name('delete');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
