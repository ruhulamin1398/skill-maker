<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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



Route::group(['middleware' => ['auth','role_or_permission:admin|test']], function () {
    Route::get('/', function () {
        // return "sadfasdf";
        $user= User::find(5);




        //////////////// adding role if not exist

        // if( $user->hasRole('trainer')){
        //     return " Error He is already a trainer";
        // }
        // else{

        // $user ->assignRole('trainer');
        // return $user->getRoleNames();
        // }


        ////////////////// remove role if exist
        //     if( $user->hasRole('trainer')){
        //         $user ->removeRole('trainer');
        //         return $user->getRoleNames();

        // }
        // else{
        //     return " Error He is not a trainer";

        // }

// return  User::with('roles')->get();;


        return view('admin.index');
    });
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
Route::resource('courses', CourseControllernew::class);
Route::resource('batch-trainers', BatchTrainerController::class);
Route::resource('coursevideos', CourseVideoController::class);
Route::resource('freelancers', FreelancerController::class);
Route::resource('seminar-trainers', SeminarTrainerController::class);
Route::resource('batches', BatchController::class);

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


//Route::get('seminar-trainers/index/{id}', [SeminerTrainerController::class, 'seminar'])->name('admin.seminar-trainers.seminar');





Route::group(['middleware' => ['auth']], function () {

Route::resource('chats', ChatController::class);
Route::resource('chat-messages', ChatMessageController::class);

});
