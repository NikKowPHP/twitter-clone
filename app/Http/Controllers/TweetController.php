<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Tweet;
use App\Models\Retweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    // Show welcome page
    public function welcome() {
        return view('users.initial');
    }
    // Show index page
    public function index() {
        $user = Auth::user();
        $tweets = Tweet::with('user')->get();
        $channels = User::all();
        $retweets = Retweet::with('user')->get();
        return view('users.index', ['user' => $user, 'tweets' => $tweets, 'channels' => $channels, 'retweets' => $retweets]);
        
    }
    public function store(Request $request) 
    {
        $formFields = $request->validate([
            'description' => 'required',
        ]);
        $formFields['title'] = 'nig';
        $formFields['tags'] = 'lationo, lsdfj';

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $formFields['user_id'] = auth()->id();


        if(Tweet::create($formFields)) {
            return redirect()->back()->with('message', 'tweet created successfully');
        }
    }
}
