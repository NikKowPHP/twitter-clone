<?php

namespace App\Http\Controllers;

use Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    // Show welcome page
    public function welcome() {
        return view('users.initial');
    }
    // Show index page
    public function index() {
        return view('users.index', [
            'tweets' => Tweet::all()
        ]);
    }
}
