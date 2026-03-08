<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/submit',[AuthController::class,'store'])->name('submit');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login/submit',[AuthController::class,'authLogin'])->name('login_submit');

Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');



