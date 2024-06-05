<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [JobController::class, 'index'])->name('jobs.index');

// Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');


Route::get('/search', SearchController::class);
// by default {tag} is aspected to be an id
// {tag:name} sets tag to name field
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [SessionController::class, 'destroy']);
    Route::get('/logout', [SessionController::class, 'destroy']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::post('/jobs', [JobController::class, 'store']);
});
