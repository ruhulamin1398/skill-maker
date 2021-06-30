<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\SeminerTrainerController;
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
    // return Auth::user();
    return view('admin.index');
})->middleware(['auth']);

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
Route::resource('courses', CourseControllernew::class);
Route::resource('coursetrainers', CourseTrainerController::class);
Route::resource('coursevideos', CourseVideoController::class);
Route::resource('freelancers', FreelancerController::class);

Route::get('/user', function(){
    return view('user.index');
});
Route::get('/trainer', function(){
    return view('trainer.index');
});

// Route::resource('courses', CourseController::class);
Route::resource('training', TrainingController::class);
Route::resource('seminars', UserSeminarController::class);
Route::resource('trainer_seminar', TrainerSeminarController::class);
Route::resource('trainer_course', TrainerCourseController::class);
Route::resource('seminar-trainers', SeminerTrainerController::class);
Route::resource('chats', ChatController::class);
Route::resource('chat-messages', ChatMessageController::class);

//Route::get('seminar-trainers/index/{id}', [SeminerTrainerController::class, 'seminar'])->name('admin.seminar-trainers.seminar');
