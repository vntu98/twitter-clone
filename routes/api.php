<?php

use App\Http\Controllers\Api\Media\MediaController;
use App\Http\Controllers\Api\Media\MediaTypeController;
use App\Http\Controllers\Api\Notifications\NotificationController;
use App\Http\Controllers\Api\Timeline\TimelineController;
use App\Http\Controllers\Api\Tweets\TweetLikeController;
use App\Http\Controllers\Api\Tweets\TweetController;
use App\Http\Controllers\Api\Tweets\TweetQuoteController;
use App\Http\Controllers\Api\Tweets\TweetReplyController;
use App\Http\Controllers\Api\Tweets\TweetRetweetController;
use Illuminate\Support\Facades\Route;

Route::get('/timeline', [TimelineController::class, 'index']);

Route::get('/tweets', [TweetController::class, 'index']);
Route::get('/tweets/{tweet}', [TweetController::class, 'show']);
Route::post('/tweets', [TweetController::class, 'store']);

Route::get('/tweets/{tweet}/replies', [TweetReplyController::class, 'show']);
Route::post('/tweets/{tweet}/replies', [TweetReplyController::class, 'store']);

Route::post('/tweets/{tweet}/likes', [TweetLikeController::class, 'store']);
Route::delete('/tweets/{tweet}/likes', [TweetLikeController::class, 'destroy']);

Route::post('/tweets/{tweet}/retweets', [TweetRetweetController::class, 'store']);
Route::delete('/tweets/{tweet}/retweets', [TweetRetweetController::class, 'destroy']);

Route::post('/tweets/{tweet}/quotes', [TweetQuoteController::class, 'store']);

Route::post('/media', [MediaController::class, 'store']);
Route::get('/media/types', [MediaTypeController::class, 'index']);

Route::get('/notifications', [NotificationController::class, 'index']);
