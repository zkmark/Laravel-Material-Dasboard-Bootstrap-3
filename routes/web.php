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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Comment on production
Route::get('/examples', function () {
	if (Auth::check()) {
		return view('examples/home');
	}
	else{
		return redirect('login');
	}
    
});
Route::get('/examples/user-profile', function () {
    return view('examples/user-profile');
});
Route::get('/examples/table-list', function () {
    return view('examples/table-list');
});
Route::get('/examples/typography', function () {
    return view('examples/typography');
});
Route::get('/examples/icons', function () {
    return view('examples/icons');
});
Route::get('/examples/maps', function () {
    return view('examples/maps');
});
Route::get('/examples/notifications', function () {
    return view('examples/notifications');
});
Route::get('/examples/upgrade', function () {
    return view('examples/upgrade');
});
Route::get('/examples/charts', function () {
    return view('examples/charts');
});
//End Comment on production