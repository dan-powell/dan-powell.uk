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

Route::get('/', ['as' => 'home', function ()
{
    return View::make('public.page.home.PageHome');
}]);


Route::get('/skills', ['as' => 'page.skills', function()
{
	return View::make('public.page.skills.pageSkills');
}]);


Route::get('/experience', ['as' => 'page.experience', function()
{
	return View::make('public.page.experience.pageExperience');
}]);


Route::get('/privacy', ['as' => 'page.privacy', function()
{
	return View::make('public.page.privacy.pagePrivacy');
}]);

Route::get('/sitemap', ['as' => 'sitemap', 'uses' => 'SitemapController@show']);
Route::get('/sitemap.xml', ['as' => 'sitemap.xml', 'uses' => 'SitemapController@xml']);

Route::get('/portfolio', ['as' => 'portfolio.index', 'uses' => 'PortfolioController@index']);
Route::get('/portfolio/{slug}', ['as' => 'portfolio.show', 'uses' => 'PortfolioController@show']);


// Images
Route::get(config('images.route') . '/{path}', 'ImageController@show')->where('path', '.*');
