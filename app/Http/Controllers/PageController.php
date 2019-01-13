<?php namespace App\Http\Controllers;

class PageController extends Controller {

    public function __construct()
    {

    }

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
