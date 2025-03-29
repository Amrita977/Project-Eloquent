<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects',[ProjectController::class,'index'])->name('projects.index');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
