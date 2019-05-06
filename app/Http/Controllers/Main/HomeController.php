<?php namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

	public function show()
	{
        return view('main.page.home');
    }

}
