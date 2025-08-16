<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// Suas rotas existentes
Route::apiResource('students', StudentController::class);
Route::apiResource('courses', CourseController::class);

// Rota de teste - Adicione esta parte
Route::get('/test', function () {
    return response()->json(['message' => 'API OK!']);
});

Route::get('/', function () {
    return view('welcome');
});