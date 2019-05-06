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

// Main website
Route::domain(config('app.domain'))->group(function () {

    Route::get('/', [
        'as' => 'home',
        'uses' => 'Main\HomeController@show'
    ]);

    Route::get('sitemap', [
        'as' => 'sitemap',
        'uses' => 'SitemapController@show'
    ]);

    Route::get('sitemap.xml', [
        'as' => 'sitemap.xml',
        'uses' => 'SitemapController@xml'
    ]);

    Route::get('portfolio', [
        'as' => 'portfolio.index',
        'uses' => 'Main\PortfolioController@index'
    ]);

    Route::get('portfolio/{slug}', [
        'as' => 'portfolio.show',
        'uses' => 'Main\PortfolioController@show'
    ]);

    Route::get('projects', [
        'as' => 'projects.index',
        'uses' => 'Main\ProjectController@index'
    ]);

    // Pages (must be placed last)
    Route::get('{slug}', [
        'as' => 'page',
        'uses' => 'Main\PageController@show'
    ]);

});

// Projects are on sub-domains
Route::domain('{project}.' . config('app.domain'))->name('project.')->group(function () {

    Route::get('/', ['as' => 'home', 'uses' => 'Project\ProjectController@show']);


    // TODO implement individual sitemaps for projects
    // Route::get('sitemap', ['as' => 'sitemap', 'uses' => 'SitemapController@show']);
    // Route::get('sitemap.xml', ['as' => 'sitemap.xml', 'uses' => 'SitemapController@xml']);

    Route::get(config('images.route') . '/{path}', 'ImageController@project')->where('path', '.*');

    Route::get('assets/{path}', 'Project\ProjectController@asset')->where('path', '.*');

    // Project Pages (must be placed last)
    Route::get('/{slug}', ['as' => 'page', 'uses' => 'Project\ProjectController@page']);

});

// Images (works on any domain)
Route::get(config('images.route') . '/{path}', 'ImageController@show')->where('path', '.*');
