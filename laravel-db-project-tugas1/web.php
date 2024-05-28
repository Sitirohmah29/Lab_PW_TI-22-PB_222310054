<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/details/{student}', [StudentController::class, 'getDataByID']);

Route::get('/update/{student}', [StudentController::class, 'edit']);
Route::put('/update/{student}/edit', [StudentController::class, 'update']);
Route::delete('/delete/{student}', [StudentController::class, 'destroy']);


