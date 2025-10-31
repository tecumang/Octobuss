<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/feature',[HomeController::class, 'feature'])->name('feature');

Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/login',[HomeController::class, 'login'])->name('login');
