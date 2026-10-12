<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
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
        });
