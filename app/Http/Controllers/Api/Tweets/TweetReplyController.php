<?php

namespace App\Http\Controllers\Api\Tweets;

use App\Events\Tweets\TweetRepliesWereUpdated;
use App\Http\Controllers\Controller;
use App\Http\Resources\TweetCollection;
use App\Models\Tweet;
use App\Models\TweetMedia;
use App\Notifications\Tweets\TweetRepliedTo;
use App\Tweets\TweetType;
use Illuminate\Http\Request;

class TweetReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum'])->only(['store']);
    }

    public function show(Tweet $tweet)
    {
        return new TweetCollection($tweet->replies);
    }

    public function store(Tweet $tweet, Request $request)
    {
        $reply = $request->user()->tweets()->create(array_merge($request->only('body'), [
            'type' => TweetType::TWEET,
            'parent_id' => $tweet->id
        ]));

        foreach ($request->media as $id) {
            $reply->media()->save(TweetMedia::find($id));
        }

        if ($request->user()->id !== $tweet->user_id) {
            $tweet->user->notify(new TweetRepliedTo($request->user(), $reply));
        }

        broadcast(new TweetRepliesWereUpdated($tweet));
    }
}
