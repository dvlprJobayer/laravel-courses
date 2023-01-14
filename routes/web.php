<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/course/{slug}', [App\Http\Controllers\CourseController::class, 'show'])->name('course-show');

// Pending Route
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('course-index');
Route::get('/series/{slug}', [App\Http\Controllers\SeriesController::class, 'index'])->name('series-index');
Route::get('/topics/{slug}', [App\Http\Controllers\TopicController::class, 'index'])->name('topic-index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
