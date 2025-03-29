<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [UserController::class, 'showUsers']);


Route::get('/allusers', [UserController::class, 'allUsers']);
Route::get('/singleuser/{id}', [UserController::class, 'singleUser']);

Route::get('/add',[UserController::class,'addUser']);
Route::get('/update',[UserController::class,'updateUser']);
Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete.user');

Route::view('newuser','/adduser');

// Route::get('/user/{id}', [UserController::class, 'singleUser'])->name('view.user');
// Route::get('/add', [UserController::class, 'addUsers']);

