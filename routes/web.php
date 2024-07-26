<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/register',[RegisteredUserController::class,'create'])->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::delete('/logout',[SessionController::class,'destroy'])->name('logout');

Route::get('/', [JobController::class, 'index'])->name('jobs.index');
