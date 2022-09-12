<?php

use App\Http\Controllers\UserController;
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
Auth::routes([
    'register' => false
]);
Route::get('/', function(){
    return redirect('home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('adminHome');
    Route::get('/add',[App\Http\Controllers\adminAdd::class,'index'])->name('add');
    Route::post('/addProcess',[App\Http\Controllers\adminAdd::class,'addProcess'])->name('addProcess');
    Route::get('/update/{id}',[App\Http\Controllers\adminUpdate::class,'index'])->name('update');
    Route::post('/updateImage/{id}',[App\Http\Controllers\adminUpdate::class,'updateImage'])->name('updateImage');
    Route::post('/updateEvent/{id}',[App\Http\Controllers\adminUpdate::class,'updateEvent'])->name('updateEvent');
    Route::post('/updateLogo/{title}',[App\Http\Controllers\adminUpdate::class,'updateLogo'])->name('updateLogo');
    Route::post('/uploadImage/{title}',[App\Http\Controllers\adminUpdate::class,'uploadImage'])->name('uploadImage');
    Route::post('/delete/{id}',[ App\Http\Controllers\adminDelete::class,'index'])->name('delete');
    Route::get('/register',[App\Http\Controllers\RegisterController::class,'index'])->name('registerForm');
    Route::post('/registerProcess',[App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');
    Route::get('/users',[App\Http\Controllers\UserController::class,'index'])->name('showUser');
    Route::get('/updateUser/',[App\Http\Controllers\UserController::class,'updateUser'])->name('updateUser');
    Route::post('/updateUserProcess/',[App\Http\Controllers\UserController::class,'updateUserProcess'])->name('updateUserProcess');
    Route::post('/updateUserPassword/',[App\Http\Controllers\UserController::class,'updateUserPassword'])->name('updateUserPassword');
    Route::post('/deleteUser/{id}',[App\Http\Controllers\UserController::class,'deleteUser'])->name('deleteUser');
});
    


Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
