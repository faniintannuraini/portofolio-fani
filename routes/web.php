<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', [PortfolioController::class, 'index']);

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Protected Routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    
    // Skills CRUD
    Route::post('/skills', [AdminController::class, 'storeSkill'])->name('admin.skills.store');
    Route::put('/skills/{skill}', [AdminController::class, 'updateSkill'])->name('admin.skills.update');
    Route::delete('/skills/{skill}', [AdminController::class, 'deleteSkill'])->name('admin.skills.delete');
    
    // Projects CRUD
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::put('/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');
});
