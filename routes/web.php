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

Route::get('/', 'WelcomeController@index')->name('index');
Route::put('/', ['as' => 'welcome.country', 'uses' => 'WelcomeController@saveSessionCountry']);

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => LaravelLocalization::setLocale(), 
			'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localize']],
	function () {
		Route::get(LaravelLocalization::transRoute('routes.home'), 'IndexController@index')->name('home');
		Route::get(LaravelLocalization::transRoute('routes.about'), 'AboutController@index')->name(LaravelLocalization::transRoute('routes.about'));
		Route::get(LaravelLocalization::transRoute('routes.services'), 'ServicesController@index')->name(LaravelLocalization::transRoute('routes.services'));
		Route::get(LaravelLocalization::transRoute('routes.contact'), 'ContactController@index')->name(LaravelLocalization::transRoute('routes.contact'));

		Route::get(LaravelLocalization::transRoute('routes.equipments'), 'EquiposController@index')->name(LaravelLocalization::transRoute('routes.equipments'));
		Route::get(LaravelLocalization::transRoute('routes.equipments-view'), 'EquiposController@show');

		Route::get(LaravelLocalization::transRoute('routes.projects'), 'ObrasController@index')->name(LaravelLocalization::transRoute('routes.projects'));
		Route::get(LaravelLocalization::transRoute('routes.projects-view'), 'ObrasController@show');

		Route::post('/send', 'ContactController@send')->name('email');
});

/*Rutas para el admin*/
Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function () {

	Route::get('/dashboard', 'ControlPanelController@index')->name('dashboard');

	// Obras
	Route::resource('/obras', 'ObrasController');
	Route::post('obras/update', 'ObrasController@update')->name('obras.update');
	Route::get('obras/show/{id}', 'ObrasController@show');
	Route::get('obras/destroy/{id}', 'ObrasController@destroy');

	//Equipos
	Route::resource('/equipos', 'EquiposController');
	Route::post('equipos/update', 'EquiposController@update')->name('equipos.update');
	Route::get('equipos/show/{id}', 'EquiposController@show');
	Route::get('equipos/destroy/{id}', 'EquiposController@destroy');

	Route::get('/equipos/{id}/imagenes', 'EquiposImagesController@index'); 
	Route::post('/equipos/{id}/imagenes', 'EquiposImagesController@store'); 
	Route::delete('/equipos/{id}/imagenes', 'EquiposImagesController@destroy'); 
	Route::get('/equipos/imagenes/{id}/destacar/{image}', 'EquiposImagesController@select'); 

	Route::get('/obras/{id}/imagenes', 'ObrasImagesController@index'); 
	Route::post('/obras/{id}/imagenes', 'ObrasImagesController@store'); 
	Route::delete('/obras/{id}/imagenes', 'ObrasImagesController@destroy'); 
	Route::get('/obras/imagenes/{id}/destacar/{image}', 'ObrasImagesController@select'); 

});