<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('Auth.SignIn');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/admin', function(){
    return view('Admin.Dashboard');
})->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    return view('Auth.SignUp');
})->name('signup');

Route::get('/signup', [SignupController::class, 'showRegistrationForm'])->name('register');
Route::post('/signup', [SignupController::class, 'signup']);
