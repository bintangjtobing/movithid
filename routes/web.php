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
    return view('homepage.index');
});
Route::get('ads', function () {
    return view('homepage.ads');
});
Route::get('box-office', function () {
    return view('homepage.boxoffice');
});
Route::get('about-us', function () {
    return view('homepage.about');
});
Route::get('career', function () {
    return view('homepage.career');
});
Route::get('privacy', function () {
    return view('homepage.privacy');
});
Route::get('terms', function () {
    return view('homepage.terms');
});
Route::get('help', function () {
    return view('homepage.help');
});
Route::get('partners', function () {
    return view('homepage.partners');
});
Route::get('investor-relations', function () {
    return view('homepage.investor');
});

// Halaman Authorizations
Route::get('sign-in', function () {
    return view('homepage.signin');
});
Route::get('sign-up', function () {
    return view('homepage.register');
});

// On Demands
Route::get('demands', function () {
    return view('demands.welcome');
});
