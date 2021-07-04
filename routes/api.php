<?php

use App\Http\Controllers\Api\Timeline\TimelineController;
use App\Http\Controllers\Api\TweetLikeController;
use App\Http\Controllers\Api\Tweets\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/timeline', [TimelineController::class, 'index']);

Route::post('/tweets', [TweetController::class, 'store']);

Route::post('/tweets/{tweet}/likes', [TweetLikeController::class, 'store']);
Route::delete('/tweets/{tweet}/likes', [TweetLikeController::class, 'destroy']);
