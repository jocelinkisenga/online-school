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


Route::middleware('auth')->group(function(){
        Route::get('candidature/',[App\Http\Controllers\CandidatureController::class,'store'])->name('candidature');
});


require __DIR__.'/admin.php';

require __DIR__.'/auth.php';
