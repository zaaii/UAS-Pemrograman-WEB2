<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//          USER                 //

Route::get('/home', [MovieController::class, 'showhome']);

// fitur profile dapat diakses jika user sudah login
Route::get('/profile', function () {
    return view('pages.profile');
})->middleware('auth');

// fitur about dapat diakses jika user sudah/belum login
Route::get('/about', function () {
    return view('pages.about');
});

// fitur forgot password tidak bisa di akses dalam mode sudah login
Route::get('/password/reset', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::get('/genre', function () {
    return view('pages.genre');
})->middleware('auth');

Route::get('/live', function () {
    return view('pages.live');
})->middleware('auth');

Route::get('/contacts', function () {
    return view('pages.contact');
})->middleware('auth');

Route::get('/detail', function () {
    return view('pages.detail');
})->middleware('auth');

//              ADMIN               //
Route::resource('/movie', \App\Http\Controllers\MovieController::class);
Route::get('admin', [MovieController::class, 'showadmin'])->middleware('role:admin');
Route::post('add', [MovieController::class, 'store'])->middleware('role:admin');

Route::resource('/user', \App\Http\Controllers\UserController::class);
Route::get('users', [UserController::class, 'index'])->middleware('role:admin');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->middleware('role:admin');