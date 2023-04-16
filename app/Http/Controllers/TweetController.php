<?php

namespace App\Http\Controllers;


use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    // Show welcome page
    public function welcome() {
        return view('users.initial');
    }
    // Show index page
    public function index() {
        $tweets = Tweet::with('user')->get();
        return view('users.index', compact('tweets'));
    }
}
