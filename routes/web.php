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

Route::get('/tailor-made', function() {
	return view('tailor-made');
});

Route::get('/member-ship', function() {
	return view('member-ship');
});

Route::post('/admin', 'AuthController@adminLogin');

Route::get('/admin', function () {
	if(\Auth::check()) {
		return redirect('admin/country');
	}	
	return view('admin.index');
});

Route::resource('tour', 'TourController');