<?php namespace App\Http\Controllers;

use DanPowell\Portfolio\Models\Project;
use DanPowell\Portfolio\Models\Page;

class SitemapController extends Controller {

    private $pages;

    public function __construct()
    {

        $this->pages = new \stdClass();

        // Static Pages
    	$this->pages->static = [
            [
                'title' => 'Home/About',
            	'route' => 'home',
            	'last_modified' => '2015-02-18'
        	],
            [
                'title' => 'Portfolio',
            	'route' => 'projects.index',
            	'last_modified' => '2015-02-18'
        	],
			[
				'title' => 'Experience',
				'route' => 'page.experience',
				'last_modified' => '2015-02-18'
			],
        	[
                'title' => 'Skills',
            	'route' => 'page.skills',
            	'last_modified' => '2015-02-18'
        	],
            [
                'title' => 'Privacy',
            	'route' => 'page.privacy',
            	'last_modified' => '2015-02-18'
        	],
    	];

        // Projects & Project Pages
    	$this->pages->projects = Project::with('pages')->orderBy('created_at', 'DESC')->get();

    }


    /**
    *   Return the sitemap in HTML for users
	*
	*/

	public function show()
	{
        return view('public.sitemap.show.sitemapShow')->with(['pages' => $this->pages]);
	}


    /**
    *   Return the sitemap in XML for crawlers
	*
	*/

	public function xml()
	{
    	$view = view('public.sitemap.xml.sitemapXml')->with(['pages' => $this->pages]);
        return response($view, '200')->header('Content-Type', 'text/xml');
    }


}
