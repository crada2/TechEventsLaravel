<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
//use App\Mail\SendCourse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\RegisterCourse;
use App\Models\User;


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

/*Route::get('/', function () {
    return view('landing');
});*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create')->middleware('Admin');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/show/{id}', [EventController::class, 'show'])->name('show');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/events/{id}', [EventController::class, 'edit'])->name('edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('update');


//Route::post('/events/email/{id}', [SendController::class,'email'])->name('email');

Auth::routes();

//Admin routes
Route::get('/dashboard', [LandingController::class, 'admin'])->name('admin.index')->middleware('Admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/enroll/{id}', [App\Http\Controllers\HomeController::class, 'enroll'])->name('enroll');
Route::delete('/enroll/{id}', [App\Http\Controllers\HomeController::class, 'unsubscribe'])->name('unsubscribe');

//Mails
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

