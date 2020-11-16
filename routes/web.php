<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesController;
use \App\Http\Controllers\FollowsController;
use \App\Http\Controllers\ExploreController;
use \App\Http\Controllers\TweetLikesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::post('/tweets', [TweetsController::class, 'store']);
    Route::post('/tweets/{tweet}/like', [TweetLikesController::class, 'store']);
    Route::delete('/tweets/{tweet}/like', [TweetLikesController::class, 'destroy']);

    Route::get('/dashboard', [TweetsController::class, 'index'])
        ->name('dashboard');

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store']);

    Route::get('/explore', [ExploreController::class, 'index']);
});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');
