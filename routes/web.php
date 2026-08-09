<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;

Route::get('/',[PortfolioController::class,'index']);
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.detail');