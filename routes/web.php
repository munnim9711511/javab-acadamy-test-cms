<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/get/{id}', [IndexController::class, 'show']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'post']);


Route::middleware(['auth'])->group(function(){
    Route::get('/post',[PostController::class,'index']);
    Route::post('/post',[PostController::class,'store']);
    Route::get('/post/edit/{id}',[PostController::class,'edit']);
    Route::post('/post/update',[PostController::class,'update']);
    Route::get('/post/delete/{id}',[PostController::class,'destroy']);
});
Route::get('/seed-admin',function(){
    $user = new User();
    $user->password = Hash::make('Welcome#Admin2023');
    $user->name = 'admin';
    $user->email = 'admin@gmail.com';
    $user->save();
    return "admin created";
});
