<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/courses', function () {
    return view('courses');
});