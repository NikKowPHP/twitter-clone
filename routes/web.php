<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

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