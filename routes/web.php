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


//              ADMIN               //
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::resource('movie', MovieController::class);