<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
        Route::get('/candidatures',[App\Http\Controllers\CandidatureController::class,'index'])->name('candidature-index');
        Route::post('/candidature-confirm/',[App\Http\Controllers\CandidatureController::class,'update'])->name('candidature-confirm');
        Route::get('/categorie',[App\Http\Controllers\CategoryController::class,'create'])->name('categorie-create');
        Route::post('/categorie',[App\Http\Controllers\CategoryController::class,'store'])->name('categorie-store');
        Route::get('/courses',[App\Http\Controllers\CourseController::class,'not_confirmed'])->name('course_notConfirmed');
        Route::get('/course/{id}',[App\Http\Controllers\CourseController::class,'update'])->name('course-confirm');
});

Route::middleware('confirmed')->group(function(){
		Route::get('course',[App\Http\Controllers\CourseController::class,'create'])->name('course-create');
                Route::post('course',[App\Http\Controllers\CourseController::class,'store'])->name('course-store');
                Route::get('chapter/{course_id}',[App\Http\Controllers\ChapterController::class,'create'])->name('chapter-create');
                Route::post('chapter/',[App\Http\Controllers\ChapterController::class,'store'])->name('chapter-store');
});