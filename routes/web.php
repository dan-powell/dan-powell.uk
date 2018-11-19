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


Route::get('/skills', array('as' => 'page.skills', function()
{
	return View::make('public.page.skills.pageSkills');
}));


Route::get('/experience', array('as' => 'page.experience', function()
{
	return View::make('public.page.experience.pageExperience');
}));


Route::get('/privacy', array('as' => 'page.privacy', function()
{
	return View::make('public.page.privacy.pagePrivacy');
}));
