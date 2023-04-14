<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function welcome() {
        return view('users.initial');
    }
}
