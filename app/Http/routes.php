<?php

use League\Glide\ServerFactory;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@show'));

Route::get('/sitemap', ['as' => 'sitemap', 'uses' => 'SitemapController@show']);
Route::get('/sitemap.xml', ['as' => 'sitemap.xml', 'uses' => 'SitemapController@xml']);


Route::get('/skills', array('as' => 'static.skills', function()
{
	return View::make('static.skills');
}));

Route::get('/privacy', array('as' => 'static.privacy', function()
{
	return View::make('static.privacy');
}));


Route::get('styleguide/{view?}', function($view = null) {
    if ($view == null || View::exists('styleguide.guides.' . $view)) {
        return View::make('styleguide.styleguide', ['view' => $view]);
    } else {
        App::abort('404');
    }
});

// Setup Glide server

$glide = ServerFactory::create([
    'source' => public_path(),
    'cache' => storage_path() . '/framework/cache/images',
    'max_image_size' => 2560*2000,
    //'driver' => 'imagick',
]);


/*
|--------------------------------------------------------------------------
| Admin Area
|--------------------------------------------------------------------------
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
|--------------------------------------------------------------------------
| Image routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('img/{path1}/{path2?}/{path3?}/{path4?}/{path5?}', function($path1, $path2 = '', $path3 = '', $path4 = '', $path5 = '') use ($glide) {

	$path = $path1;
	$extension = substr(strrchr($path1,'.'),1);

	if ($path2 != '') {
		$path .= '/' . $path2;
		$extension = substr(strrchr($path2,'.'),1);
	}

	if ($path3 != '') {
		$path .= '/' . $path3;
		$extension = substr(strrchr($path3,'.'),1);
	}

	if ($path4 != '') {
		$path .= '/' . $path4;
		$extension = substr(strrchr($path4,'.'),1);
	}

	if ($path5 != '') {
		$path .= '/' . $path5;
		$extension = substr(strrchr($path5,'.'),1);
	}


	// Validation
	if (Input::get('w') > 2560 || Input::get('h') > 2000) {
		App::abort('400', 'Image dimension requested exceeds limit');
	}


	$parameters = Input::all();
	$parameters['fm'] = $extension;


	if (File::exists(public_path() . '/' . $path)) {
		$glide->outputImage('/' . $path, $parameters);
	} else {
		App::abort('404', 'File does not exist');
	}

});

