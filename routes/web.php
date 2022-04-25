<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

Auth::routes(['verify' => true]);
Route::get('/user_profile', [ProfileController::class, 'view_profile'])->name('user.profile');
Route::post('/profile_update', [ProfileController::class, 'update_profile'])->name('user.profile.update');

Route::get('/home', [HomeController::class, 'index'])->name('home');

//admin route
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => '\App\Http\Controllers', 'middleware' => ['is_admin']], function () {
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');
});


//Google login
Route::group(['prefix' => 'google', 'as' => 'google.', 'namespace' => '\App\Http\Controllers'], function () {
    Route::get('login', 'GoogleController@loginWithGoogle')->name('login');
    Route::any('callback', 'GoogleController@callbackFromGoogle')->name('callback');
});

// Facebook login
Route::group(['prefix' => 'facebook', 'as' => 'facebook.', 'namespace' => '\App\Http\Controllers'], function () {
    Route::get('login', [FacebookController::class, 'loginWithFacebook'])->name('login');
    Route::any('callback', [FacebookController::class, 'callbackWithFacebook'])->name('callback');
});
