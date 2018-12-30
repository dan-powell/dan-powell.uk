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
    return View::make('home.home');
}]);

// Pages
foreach(config('content.pages.items') as $key => $item) {
    Route::get($key, ['as' => 'page.' . $key, function() use ($item)
    {
    	return View::make($item['view']);
    }]);
}


Route::get('/sitemap', ['as' => 'sitemap', 'uses' => 'SitemapController@show']);
Route::get('/sitemap.xml', ['as' => 'sitemap.xml', 'uses' => 'SitemapController@xml']);

Route::get('/portfolio', ['as' => 'portfolio.index', 'uses' => 'PortfolioController@index']);
Route::get('/portfolio/{slug}', ['as' => 'portfolio.show', 'uses' => 'PortfolioController@show']);


// Images
Route::get(config('images.route') . '/{path}', 'ImageController@show')->where('path', '.*');
