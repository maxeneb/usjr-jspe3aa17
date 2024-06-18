<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/students/all', [UniversityController::class, 'showAllStudents'])->name('student.index');
Route::get('/show/student/{studid}', [UniversityController::class, 'showStudent'])->name('student.show');
Route::get('/show/colleges', [UniversityController::class, 'showAllColleges'])->name('college.index');
Route::get('/show/college/{collid}', [UniversityController::class, 'showCollege'])->name('college.show');
Route::get('/show/departments', [UniversityController::class, 'showDepartments'])->name('department.index');