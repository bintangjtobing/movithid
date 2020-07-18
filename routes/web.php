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


use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    //echo Hash::make('bintangjtobing');
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
// halaman menuju demands
Route::get('sign-in', 'LoginController@signin')->name('signin');
Route::get('sign-up', 'LoginController@signup');

// menuju administrator dash
Route::post('/administrator/{tokens}','AuthController@validateadministrator');
Route::get('administrator','LoginController@administrator');

// Auth Manual Controller
Route::post('/create-account/{tokens}', 'LoginController@create_account');
Route::post('/reset-account', 'LoginController@resetAccount');
Route::get('/verification-user/{enc_id}/{tokens}', 'LoginController@verification');
Route::get('/reset-account/{enc_id}/{tokens}', 'LoginController@getAcc');
Route::get('/logout/{id}/{tokens}', 'AuthController@logout');
Route::post('/get-verification/{tokens}', 'AuthController@validateLogin');
// On Demands

Route::group(['middleware' => ['islogin']], function () {


    Route::get('/demands', 'DemandsController@index');


});
Route::group(['middleware'=>['isadmin']],function(){
    Route::get('dash', function () {
        return view('dashboard.content.index');
    });
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
    Route::get('/delete-client/{id}', 'ContentController@deleteclient');
    Route::post('/update-clients/{id}', 'ContentController@updateclients');
    Route::post('/add-places', 'ContentController@addplaces');
    Route::post('/update-places/{id}', 'ContentController@updateplaces');
    Route::get('/delete-places/{id}', 'ContentController@deleteplaces');

    Route::post('/add-ads-video', 'ContentController@adsvideoadd');
    Route::get('/delete-ads/{id}', 'ContentController@deleteads');
    Route::post('/add-box-office', 'ContentController@boxofficeadd');
    Route::get('/delete-film/{id}', 'ContentController@deleteboxoffice');
});
