<?php

use App\Http\Controllers\Api\Media\MediaTypeController;
use App\Http\Controllers\Api\Timeline\TimelineController;
use App\Http\Controllers\Api\Tweets\TweetLikeController;
use App\Http\Controllers\Api\Tweets\TweetController;
use App\Http\Controllers\Api\Tweets\TweetRetweetController;
use Illuminate\Support\Facades\Route;

Route::get('/timeline', [TimelineController::class, 'index']);

Route::post('/tweets', [TweetController::class, 'store']);

Route::post('/tweets/{tweet}/likes', [TweetLikeController::class, 'store']);
Route::delete('/tweets/{tweet}/likes', [TweetLikeController::class, 'destroy']);

Route::post('/tweets/{tweet}/retweets', [TweetRetweetController::class, 'store']);
Route::delete('/tweets/{tweet}/retweets', [TweetRetweetController::class, 'destroy']);

Route::get('/media/types', [MediaTypeController::class, 'index']);
