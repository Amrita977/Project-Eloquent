<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/user',UserController::class);


Route::get('/adduser', [UserController::class, 'create'])->name('adduser'); // Show form
Route::post('/adduser', [UserController::class, 'store'])->name('user.store'); // Handle form submission


Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.delete');
