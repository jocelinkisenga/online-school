<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/course/{id}',[App\Http\Controllers\CourseController::class,'show'])->name('course-detail');

Route::middleware('auth')->group(function(){
        Route::get('candidature/',[App\Http\Controllers\CandidatureController::class,'store'])->name('candidature');
        Route::get('profile/',[App\Http\Controllers\ProfileController::class,'create'])->name('profile');
        Route::post('profile/',[App\Http\Controllers\ProfileController::class,'store'])->name('profile-store');

});


require __DIR__.'/admin.php';

require __DIR__.'/auth.php';
