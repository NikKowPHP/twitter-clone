<?php

namespace App\Http\Controllers;

use App\Models\Retweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RetweetController extends Controller
{
    
    public function store(Request $request)
    {
        $tweet_id = $request->route('tweet');
        $user_id = Auth::user()->id;
        $formFields = [
            'tweet_id' => $tweet_id,
            'user_id' => $user_id
        ];
        if(Retweet::create($formFields)) {
            return redirect()->back();
        }

    }
    public function destroy(Retweet $retweet) 
    {
        $retweet->delete();
        return redirect()->back();
    }
}
