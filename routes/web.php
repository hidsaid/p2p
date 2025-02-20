<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProjectController;

// Landing Routes
//Landing English version
Route::get("/index",[LandingController::class,'show'])->name('EnLanding');
Route::get('/projects', [ProjectController::class, 'showPageProjects'])->name('projects.show');
Route::get('/projects/{projectId}/guides', [GuideController::class, 'show'])->name('project.guides');
// Route to show the form for creating a new guide
Route::get('/guides/create/{projectId}', [GuideController::class, 'create'])->name('guide.create');

// Route to store the guide
Route::post('/guides/store', [GuideController::class, 'store'])->name('guide.store');


//handle 42 api
Route::get("/",[UserController::class,'showLogin'])->name('showLogin');
Route::get('/auth/42', [AuthController::class, 'redirectTo42'])->name('auth.42');
Route::get('/auth/42/callback', [AuthController::class, 'handle42Callback']);