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
Route::get('sign-in', 'LoginController@signin')->name('signin');
Route::get('sign-up', 'LoginController@signup');

// Auth Manual Controller
Route::post('/create-account/{tokens}', 'LoginController@create_account');
Route::post('/reset-account', 'LoginController@resetAccount');
Route::get('/verification-user/{enc_id}/{tokens}', 'LoginController@verification');
Route::get('/reset-account/{enc_id}/{tokens}', 'LoginController@getAcc');
Route::get('/logout/{id}/{tokens}', 'AuthController@logout');
Route::post('/get-verification/{tokens}', 'AuthController@validateLogin');
// On Demands

Route::group(['middleware' => ['auth']], function () {

    Route::get('dash', function () {
        return view('dashboard.content.index');
    });
    Route::get('/demands', 'DemandsController@index');


    // VIEW SECTION
    Route::get('/user-management', 'ContentController@user');
    Route::get('/client', 'ContentController@client');
    Route::get('/ads-database', 'ContentController@ads');
    Route::get('/box-office-database', 'ContentController@boxoffice');

    // POST SECTION
    Route::post('/update-data/{id}', 'ContentController@updateuser');
    Route::get('/delete-data-user/{id}', 'ContentController@deleteuser');
    Route::post('/add-user', 'ContentController@adduser');

    Route::post('/add-client', 'ContentController@addclient');
    Route::post('/add-places', 'ContentController@addplaces');
});
