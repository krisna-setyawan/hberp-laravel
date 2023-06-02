<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Users\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'prevent-back-history'], function () {

    Route::get('/', [Login::class, 'index'])->name('login')->middleware('guest');
    Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [Login::class, 'authenticate']);

    Route::get('/register', [Register::class, 'index'])->name('sign-up')->middleware('guest');
    Route::post('/register', [Register::class, 'store']);

    Route::post('/logout', [Login::class, 'logout']);

    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('user', [User::class, 'index'])->name('user')->middleware('auth');
});
