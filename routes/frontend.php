<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\Frontend\ActivityController;
use App\Http\Controllers\Frontend\EducationController;
use App\Http\Controllers\Frontend\ExperienceController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProblemSolvingController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\SkillController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/cv/download', [CvController::class, 'downloadCv'])->name('cv.download');
    Route::get('/education', [EducationController::class, 'index'])->name('education');
    Route::get('/skills', [SkillController::class, 'index'])->name('skills');
    Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences');
    Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
    Route::get('problem-solvings', [ProblemSolvingController::class, 'index'])->name('problem_solvings');
    Route::get('projects', [ProjectController::class, 'index'])->name('projects');
});