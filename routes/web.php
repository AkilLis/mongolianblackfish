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

Route::get('/donate', function() {
	return view('donate');
});

Route::get('/member-ship', function() {
	return view('member-ship');
});

Route::get('/booking/{tour}', 'BookingController@bookTour');

Route::get('/about-us', function() {
	return view('about-us');
});

Route::post('/admin', 'AuthController@adminLogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/admin', function () {
	if(\Auth::check()) {
		return redirect('admin/tour');
	}	
	return view('admin.index');
});

Route::get('/river/get', 'RiverController@getRivers');
Route::get('/river/{river}/tours', 'RiverController@relatedTours');
Route::get('/tour/{tour}', 'TourController@currentNews');
Route::get('/river/{river}', 'RiverController@currentRiver');
//Route::resource('tour', 'TourController');
Route::get('/partner/all', 'PartnerController@all');
Route::get('/members/all', 'AboutController@all');

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
	Route::get('/about/all', 'AboutController@all');
	Route::get('/about/members', 'AboutController@members');
	Route::resource('/about', 'AboutController');
	// Route::get('/country/all', 'CountryController@all');
	// Route::get('/country/check', 'CountryController@check');
	// Route::get('/country/select', 'CountryController@counties');
	// Route::post('/country/{country}', 'CountryController@update');
	Route::get('/river/all', 'RiverController@all');
	Route::resource('/river', 'RiverController');

	Route::get('/partner/all', 'PartnerController@all');
	//Route::get('/partner/api', 'PartnerController@all');
	Route::resource('/partner', 'PartnerController');
	// Route::post('/upload', 'AdminController@upload');
	// Route::delete('/delete', 'AdminController@delete');
	// Route::get('/school/all', 'SchoolController@all');
	// Route::get('/school/check', 'SchoolController@check');
	// Route::post('/school/{school}', 'SchoolController@update');
	Route::get('/tour/all', 'TourController@all');
	Route::get('/tour/{tour}/gallery/all', 'TourController@allGalleryPhotos');
	Route::get('/tour/{tour}/gallery', 'TourController@gallery');
	Route::post('/tour/{tour}/gallery/store', 'TourController@galleryStore');
	Route::delete('/tour/{tour}/gallery/delete/{photo}', 'TourController@galleryDelete');
	Route::resource('/tour', 'TourController');
	// Route::get('/news/all', 'NewsController@all');
	// Route::post('/news/{news}', 'NewsController@update');
	// Route::resource('/news', 'NewsController');
	// Route::get('/album/all', 'AlbumController@all');
	// Route::get('/album/check', 'AlbumController@check');
	// Route::post('/album/photo', 'AlbumController@uploadPhotos');
	// Route::post('/album/{album}', 'AlbumController@update');
	// Route::resource('/album', 'AlbumController');
	// Route::delete('/album/photo/{photo}', 'AlbumController@deletePhoto');
});