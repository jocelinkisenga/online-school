<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
        Route::get('/candidature',[App\Http\Controllers\CandidatureController::class,'index'])->name('candidature-index');
        Route::get('/candidature/{id}',[App\Http\Controllers\CandidatureController::class,'update'])->name('candidature-confirm');
        Route::get('/categorie',[App\Http\Controllers\CategoryController::class,'create'])->name('categorie-create');
         Route::post('/categorie',[App\Http\Controllers\CategoryController::class,'store'])->name('categorie-store');
});

Route::middleware('confirmed')->group(function(){
		Route::get('course',[App\Http\Controllers\CourseController::class,'create'])->name('course-create');
});