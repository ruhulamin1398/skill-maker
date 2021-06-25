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
    return view('index');
});
Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('seminers', function () {
    return view('seminer');
})->name('seminer');
Route::get('success-stories', function () {
    return view('successStories');
})->name('success-stories');
Route::get('form', function () {
    return view('form');
})->name('form');

Route::get('tranings', function () {
    return view('traning');
})->name('traning');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('one-one', function () {
    return view('oneToOne');
})->name('oneToOne');
Route::get('officies', function () {
    return view('officies');
})->name('officies');
Route::get('support', function () {
    return view('support');
})->name('support');
Route::get('about', function(){
    return view('about');
}) -> name('about');
