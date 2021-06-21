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

Route::get('/', function () {
    return view('admin.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('service', ServiceController::class);
Route::resource('office', OfficeController::class);
Route::resource('success_story', SuccessStoryController::class);
Route::resource('seminar', SeminarController::class);
Route::resource('faq', FaqController::class);
Route::resource('perticipators', PerticipatorController::class);
Route::resource('trainers', TrainerController::class);
Route::resource('buycourses', BuycourseController::class);
Route::resource('supports', SupportController::class);