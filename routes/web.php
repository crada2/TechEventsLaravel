<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;

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
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');


Auth::routes();

//Admin routes
Route::get('/dashboard', function(){
    return view('admin.index');
})->name('admin.index')->middleware('Admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
