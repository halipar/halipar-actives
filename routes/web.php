<?php

use App\Http\Controllers\ActivesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('registrations', [ActivesController::class,'store']) -> name('registrations');
Route::get('create', [ActivesController::class,'create'])->name('create');
    
Route::view('login', 'loginView');
