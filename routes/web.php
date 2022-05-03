<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;

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
})->name('test');

Route::get('/home', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Route::get('/home1', function () {
    return view('welcome');
})->middleware('verified')->name('home1');

Route::get('/home2', function () {
    return view('welcome');
})->middleware(['verified', 'password.confirm'])->name('home2');

Route::get('/profile', function () {
    $user = Auth::user();
    return view('user.profile', compact('user'));
})->middleware('auth')->name('profile');

Route::get('/profile/edit', function () {
    $user = Auth::user();
    return view('user.profile-edit', compact('user'));
})->middleware('auth')->name('profile.edit');

Route::get('/profile/password', function () {
    return view('user.profile-password');
})->middleware('auth')->name('profile.password');

Route::delete('/user', function () {
    $user = User::find(Auth::user()->id);

    Auth::logout();
    if ($user->delete()) {
        return redirect('login')->with('status', 'Your account has been deleted!');
    }
})->middleware('auth', 'password.confirm')->name('profile.delete');
