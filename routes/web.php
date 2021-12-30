<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\TrainerCourseController;
use App\Http\Controllers\Admin\TrainerSeminarController;
use App\Http\Controllers\Admin\UserSeminarController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserCourseController;
use GuzzleHttp\Middleware;
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

// redirection route after login 

Route::get('redirection', function () {

    $user = Auth::user();
    //////////////// adding role if not exist

    if ($user->hasRole('admin')) {
        return redirect(route('admin.index'));
    } else if ($user->hasRole('branch_admin')) {
        return redirect(route('branchAdmin.index'));
    } else if ($user->hasRole('trainer')) {
        return redirect(route('trainer.index'));
    } else if ($user->hasRole('student')) {
        // return "he is already a student";
        return redirect(route('users.index'));
    } else {
        $user->assignRole('student');

        // return "add as student successfull";
        return redirect(route('users.index'));
    }
})->middleware('auth')->name('redirection');







Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'users.'], function () {
    Route::get('/', function () {
        return view('user.index');
    })->name('index');



    Route::resource('enrolls', EnrollController::class);
    Route::resource('seminars', UserSeminarController::class);

    Route::get('services', [UserCourseController::class, 'services'])->name('services');
    Route::get('trainings', [UserCourseController::class, 'trainings'])->name('trainings');
});

Route::group(['prefix' => 'trainer', 'middleware' => ['auth'], 'as' => 'trainer.'], function () {
    Route::get('/', function () {
        return view('trainer.index');
    })->name('index');
    Route::resource('seminar', TrainerSeminarController::class);
    Route::resource('course', TrainerCourseController::class);
});











Route::get('/', [HomeController::class, 'index'])->name('home');

// Serviec Route
Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::get('single-services/{id}', [ServiceController::class, 'singleService'])->name('singleService');

// Freelancer Route
Route::get('marketplace', [FreelancerController::class, 'index'])->name('marketplace');
Route::get('freelancer-profile/{id}', [FreelancerController::class, 'singleFreelancer'])->name('freelancer-profile');

// Seminar Route
Route::get('seminars', [SeminarController::class, 'index'])->name('seminar');
Route::get('single-seminar/{id}', [SeminarController::class, 'singleSeminar'])->name('singleSeminar');
// Support Route
Route::get('support', [SupportController::class, 'index'])->name('support');
// Training Route
Route::get('trainings', [TrainingController::class, 'index'])->name('trainings');
Route::get('single-training/{id}', [TrainingController::class, 'singleTraining'])->name('singleTrainings');
// Office Route
Route::get('officies', [OfficeController::class, 'index'])->name('officies');
// About Route
Route::get('about', [AboutController::class, 'index'])->name('about');
// Sucess Stories
Route::get('out-team', [OurTeamController::class, 'index'])->name('ourTeam');

Route::get('form', function () {
    return view('form');
})->name('form');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('one-one', function () {
    return view('oneToOne');
})->name('oneToOne');




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
