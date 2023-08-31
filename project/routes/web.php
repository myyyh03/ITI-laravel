<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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






Route::get('register', function () {
    return view('register');
});



Route::post('register' , [UserController::class,'store'])->name('register');
Route::get('loginPage' , [UserController::class,'login'])->name('loginPage');
Route::get('userHome' , [UserController::class , 'show'])->name('userHome');
Route::get('buy/{id}' , [UserController::class , 'buy'])->name('buy');
Route::get('logOut' ,[UserController::class , 'logOut'])->name('logOut');
Route::get('userProfile' , [UserController::class , 'profile'])->name('userProfile');
Route::get('adminHome' , [UserController::class , 'admin'])->name('adminHome');
Route::get('delete/{id}' , [UserController::class , 'delete'])->name('delete');
Route::get('addPage' , [UserController::class , 'addPage'])->name('addPage');
Route::post('addProduct' , [UserController::class , 'addProduct'])->name('addProduct');
