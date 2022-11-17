<?php

// use App\Http\Controllers\API\FullCalendarController;
// use App\Http\Controllers\FullCalendarController as Calendar;
use App\Http\Controllers\API\FullCalendarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('calendar', function () {
//     return view('full-calendar');
// })->name('api.calendar');
Route::get('calendar', [FullCalendarController::class, 'index'])->name('api.calendar.index');
Route::get('calendar/action', [FullCalendarController::class, 'index'])->name('api.calendar.index');
Route::post('calendar/action', [FullCalendarController::class, 'action'])->name('api.calendar.action');

// Route::get('calendar/action', [Calendar::class, 'index'])->name('api.calendar.index')->middleware('auth:api');
// Route::post('calendar/action', [Calendar::class, 'action'])->name('api.calendar.action')->middleware('auth:api');
