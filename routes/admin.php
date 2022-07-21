<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
        Route::get('/candidature',[App\Http\Controllers\CandidatureController::class,'index'])->name('candidature-index');
        Route::get('/candidature/{id}',[App\Http\Controllers\CandidatureController::class,'update'])->name('candidature-confirm');
});