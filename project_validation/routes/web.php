<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;

Route::get('/adduser', [UserController::class, 'create']);
Route::post('/adduser', [UserController::class, 'store'])->name('user.store');
