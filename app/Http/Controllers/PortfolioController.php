<?php namespace App\Http\Controllers;

class PortfolioController extends Controller {


    public function __construct()
    {


    }


    /**
    *   Return the sitemap in HTML for users
	*
	*/

	public function index()
	{
        return view('portfolio.index')->with([
            'projects' => collect(array_merge(config('content.portfolio.items'), config('content.projects.items'))),
            'tags' => collect(config('content.portfolio.tags'))
        ]);
	}


    /**
    *   Return the sitemap in XML for crawlers
	*
	*/

	public function show($slug)
	{
        $arr = array_merge(config('content.portfolio.items'), config('content.projects.items'));
        return view($arr[$slug]['view']);
    }


}
