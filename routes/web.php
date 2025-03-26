<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages.home');
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'showUserProfile'])->middleware('auth');
Route::get('/programmers', function (){return view('pages.programmers');});
Route::get('/faq', function (){return view('pages.faq');});
require __DIR__.'/auth.php';
