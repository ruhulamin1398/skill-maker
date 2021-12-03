<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TrainingController;
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
// Serviec Route
Route::get('services', [ServiceController::class, 'index']) -> name('services');
Route::get('single-services/{id}', [ServiceController::class, 'singleService']) -> name('singleService');

// Freelancer Route
Route::get('marketplace', [FreelancerController::class, 'index']) -> name('marketplace');
Route::get('freelancer-profile/{id}', [FreelancerController::class, 'singleFreelancer']) -> name('freelancer-profile');

// Seminar Route
Route::get('seminers', [SeminarController::class, 'index']) -> name('seminer');
Route::get('single-training/{id}', [ServiceController::class, 'singleService']) -> name('singleTraining');
// Support Route
Route::get('support', [SupportController::class, 'index']) -> name('support');
// Training Route
Route::get('tranings', [TrainingController::class, 'index']) -> name('traning');
// Office Route
Route::get('officies', [OfficeController::class, 'index']) -> name('officies');
// About Route
Route::get('about', [AboutController::class, 'index']) -> name('about');
// Sucess Stories
Route::get('success-stories', [SuccessStoriesController::class, 'index']) -> name('success-stories');
Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('single-services/{id}', [HomeController::class, 'singleService']);

Route::get('form', function () {
    return view('form');
})->name('form');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('one-one', function () {
    return view('oneToOne');
})->name('oneToOne');
