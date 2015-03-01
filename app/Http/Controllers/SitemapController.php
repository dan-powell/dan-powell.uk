<?php namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Page;

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
                'title' => 'Skills',
            	'route' => 'static.skills',
            	'last_modified' => '2015-02-18'
        	],
            [
                'title' => 'Privacy',
            	'route' => 'static.privacy',
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
        return view('system.sitemap')->with(['pages' => $this->pages]);
	}


    /**
    *   Return the sitemap in XML for crawlers
	*
	*/

	public function xml()
	{
    	$view = view('system.sitemap_xml')->with(['pages' => $this->pages]);
        return response($view, '200')->header('Content-Type', 'text/xml');
    }


}
