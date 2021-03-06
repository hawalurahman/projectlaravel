<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('index');
});

Route::get('/timeline', [MemberController::class, 'dashboard']);
Route::get('/home', function(){return view('landing');});


use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class);

Route::resource('users', UserController::class);
