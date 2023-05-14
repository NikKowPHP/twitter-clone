<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\RetweetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// // Show Welcome page
// Route::get('/welcome', [TweetController::class, 'welcome'])->middleware('guest')->name('users.welcome');
// // create  new user
// Route::post('/users', [UserController::class, 'store']);

// // authenticate user
// Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// //logout
// Route::post('/logout', [UserController::class, 'logout']);

// // Show home page
// Route::get('/home', [TweetController::class, 'index'])->middleware('auth')->name('users.home');
// // Show user profile page
// Route::get('/users/profile/{user}', [UserController::class, 'profile'])->middleware('auth')->name('users.profile');

// //store tweet
// Route::post('/tweets/store', [TweetController::class, 'store'])->middleware('auth');

// //Retweet tweet
// Route::post('/tweets/retweet/{tweet}', [RetweetController::class, 'store'])->middleware('auth');

// //delete retweet 
// Route::delete('/tweets/retweet/{retweet}', [RetweetController::class, 'destroy'])->middleware('auth');

// //store follow 
// Route::post('/users/follow/{user}', [FollowController::class, 'store'])->middleware('auth');
// //destroy follow 
// Route::delete('/users/follow/{follow}', [FollowController::class, 'destroy'])->middleware('auth');

// // redirect to home/welcome page 
// Route::get('/', function () {
//     if (Auth::check()) {
//         return redirect('/home');
//     }
//     return redirect('/welcome');
// });