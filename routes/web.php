<?php

use App\Http\Controllers\Api\Notifications\NotificationController as NotificationsNotificationController;
use App\Http\Controllers\Api\Timeline\TimelineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Notifications\NotificationController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/timeline', [TimelineController::class, 'index']);

Route::get('/notifications', [NotificationController::class, 'index']);