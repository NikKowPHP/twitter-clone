<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Retweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // Create a new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],

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

}