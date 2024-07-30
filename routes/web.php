<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout',[SessionController::class,'destroy'])->name('logout');

    Route::get('/search', SearchController::class)->name('jobs.search');

    Route::get('/tags/{tag:name}', TagController::class)->name('jobs.tags');

    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store']);

    Route::get('/', [JobController::class, 'index'])->name('jobs.index');
});
