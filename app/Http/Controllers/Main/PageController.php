<?php namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class PageController extends Controller {

	public function show($slug)
	{
        $pages = config('content.pages.items');
        if(isset($pages[$slug]['view'])) {
            return view($pages[$slug]['view']);
        } else {
            abort('404');
        }
    }

}
