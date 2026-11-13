<?php

use App\Http\Controllers\ActivesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ActivesController::class, 'index'])->name('home');

Route::resource('actives', ActivesController::class);

    
Route::view('login', 'loginView');
