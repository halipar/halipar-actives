<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    User::create([ 'name' => 'Apolobastos',]);
    return view('welcome');
});

Route::post('registrations', [UserController::class,'regis']) -> name('registrations');
Route::get('home', [UserController::class,'index']);
