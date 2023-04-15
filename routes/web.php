<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;

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

// Show Welcome page
Route::get('/welcome', [TweetController::class, 'welcome'])->middleware('guest');
// create  new user
Route::post('/users', [UserController::class, 'store']);

// Show home page
Route::get('/home', [TweetController::class, 'index'])->middleware('auth');

// redirect to home/welcome page 
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    }
    return redirect('/welcome');
});