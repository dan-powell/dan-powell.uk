<?php namespace App\Http\Controllers;

class SitemapController extends Controller {

    private $pages;

    public function __construct()
    {

        $this->pages = collect(config('content.pages.items'));

    }


    /**
    *   Return the sitemap in HTML for users
	*
	*/

	public function show()
	{
        return view('sitemap.show')->with(['pages' => $this->pages]);
	}


    /**
    *   Return the sitemap in XML for crawlers
	*
	*/

	public function xml()
	{
    	$view = view('sitemap.xml')->with(['pages' => $this->pages]);
        return response($view, '200')->header('Content-Type', 'text/xml');
    }


}
