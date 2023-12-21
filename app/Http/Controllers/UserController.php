<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tweet;
use App\Models\Retweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // Create a new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:1'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:1'],

        ]);

        //Hash
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //login
        auth()->login($user);
        return redirect('/home')->with('message', 'Welcome to your personalized home page');

    }
    public function has_retweeted(int $tweet_id)
    {
        $user = Auth::user();
        return  $user->retweets()->where('tweet_id', $tweet_id)->exists();
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect()->route('users.home');
        }
        return back()->withErrors(['email' => 'invalid credentials']);
    }
    public function logout(Request $request)
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/welcome');
    }

    //Show user profile
    public function profile(Request $request)
    {
        $user = User::find($request->route()->parameter('user'));
        $tweets = Tweet::where('user_id', $user->id)->with('user')->get();
        $channels = User::excludeAuth()->get();
        $retweets = $user->getRetweetedTweets();
        return view('users.profile', ['user' => $user, 'tweets' => $tweets, 'channels' => $channels, 'retweets' => $retweets]);
    }

}
