<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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

Route::view('/', 'auth.login')->middleware('guest')->name('login.index');
Route::view('/signup', 'auth.signup')->middleware('guest')->name('signup.index');

Route::controller(AuthController::class)->group(function () {
	Route::post('/signup', 'signup')->middleware('guest')->name('signup');
    Route::post('/', 'login')->middleware('guest')->name('login');
});

Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');

Route::group(['controller' => BookController::class, 'middleware' => 'auth', 'prefix' => 'dashboard'], function () {
	Route::delete('{book}', 'destroy')->name('books.destroy');
    Route::get('create', 'create')->name('books.create');
    Route::post('', 'store')->name('books.store');
});
