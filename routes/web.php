<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thes
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [EventController::class, 'index'])
    ->name('root')
    ->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD用
    Route::resource('events', EventController::class);

    // カレンダー用
    Route::get('calendar', function () {
        return view('full-calendar');
    })->name('calendar');
    Route::get('calendar/action', [FullCalendarController::class, 'index']);
    Route::post('calendar/action', [FullCalendarController::class, 'action']);
});
