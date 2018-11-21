<?php

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
    return view('home');
});

// pages controller
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');





// before
Auth::routes();

// after
Auth::routes(['verify' => true]);


// example
Route::get('/home', 'HomeController@index')
    ->name('home')->middleware('verified');

Route::get('/member/profile', function () {
    // verified users only
})->middleware('verified');

Route::get('/demo', function () {
    return view('demo');
});