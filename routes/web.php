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

Route::prefix('admin')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');
    });

Route::get('/admin/about', function () {
    return view('admin.about');
})->name('admin.about');

Route::prefix('admin')
    ->group(function () {
        // STUDENT
        Route::get('/student', [StudentController::class, 'index'])
            ->name('admin.student');
        // CLASSROOM
        Route::get('/classroom', [ClassroomController::class, 'index'])
            ->name('/admin.classroom');
    });
Route::get('/subjects', [SubjectsController::class, 'index'])->name('subjects.index');
Route::get('/subjects', [TeachersController::class, 'index'])->name('subjects.index');
