<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::get('/admin/about', function () {
    return view('admin.about');
})->name('admin.about');

Route::prefix('admin')->group(function () {
    // student
    Route::get('/students', [StudentController::class, 'index'])
        ->name('admin.student.index');

    Route::post('/students', [StudentController::class, 'store'])
        ->name('admin.student.store');

    Route::put('/students/{id}', [StudentController::class, 'update'])
        ->name('admin.student.update');

    Route::delete('/students/{id}', [StudentController::class, 'destroy'])
        ->name('admin.student.destroy');

    // classroom
    Route::get('/classroom', [ClassroomController::class, 'index'])
        ->name('admin.classroom.index');
    Route::post('/classroom', [ClassroomController::class, 'store'])
        ->name('admin.classroom.store');
    Route::put('/classroom/{id}', [ClassroomController::class, 'update'])
        ->name('admin.classroom.update');
    Route::delete('/classroom/{id}', [ClassroomController::class, 'destroy'])
        ->name('admin.classroom.destroy');

    // subject
    Route::get('/subjects', [SubjectsController::class, 'index'])->name('admin.subjects.index');
    Route::post('/subjects', [SubjectsController::class, 'store'])->name('admin.subjects.store');
    Route::put('/subjects/{id}', [SubjectsController::class, 'update'])->name('admin.subjects.update');
    Route::delete('/subjects{id}', [SubjectsController::class, 'destroy'])->name('admin.subjects.destroy');

    // teachers
    Route::get('/teachers', [TeachersController::class, 'index'])->name('admin.teacher.index');
    Route::post('/teachers', [TeachersController::class, 'store'])->name('admin.teacher.store');
    Route::put('/teachers/{id}', [TeachersController::class, 'update'])->name('admin.teacher.update');
    Route::delete('/teachers{id}', [TeachersController::class, 'destroy'])->name('admin.teacher.destroy');
});
