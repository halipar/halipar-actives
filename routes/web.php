<?php

use App\Http\Controllers\ActivesController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ActivesController::class, 'index'])->name('home');

Route::resource('actives', ActivesController::class);

Route::resource('sys', PcController::class);

    
Route::view('login', 'loginView');
