<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;

Route::get('/test-vercel', function () {
    return response()->json([
        'status' => 'Laravel is running',
        'php' => PHP_VERSION,
        'app_key' => !empty(config('app.key')),
        'base_path' => base_path(),
        'public_path' => public_path(),
        'manifest_exists' => file_exists(public_path('build/manifest.json')),
    ]);
});
Route::get('/',[PortfolioController::class,'index']);
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.detail');