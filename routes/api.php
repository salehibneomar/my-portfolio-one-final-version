<?php

use App\Http\Controllers\Frontend\ProjectController;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('projects/description/{id}', [ProjectController::class, 'description'])->name('frontend.projects.description');
