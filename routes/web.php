<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
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
	Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');

Route::group(['controller' => BookController::class, 'middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('create', 'create')->name('books.create');
    Route::post('', 'store')->name('books.store');
    Route::get('{book}/edit', 'edit')->name('books.edit');
    Route::put('{book}/update', 'update')->name('books.update');
    Route::delete('{book}', 'destroy')->name('books.destroy');
});

Route::prefix('/dashboard/authors')->middleware(['auth'])->group(function () {
    Route::get('/', [AuthorController::class, "index"])->name('authors.index');
    Route::view('/create', 'admin.author.create')->name('authors.create');
    Route::post('/store', [AuthorController::class, "store"])->name('authors.store');
});
