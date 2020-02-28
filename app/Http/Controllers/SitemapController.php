<?php namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;

class SitemapController extends Controller {

    private $pages;
    private $projectRepo;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->pages = collect(config('content.pages.items'));
        $this->projectRepo = $projectRepository;
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
	public function xmlindex()
	{
    	$view = view('sitemap.xmlindex')->with([
            'projects' => $this->projectRepo->all()
        ]);
        return response($view, '200')->header('Content-Type', 'text/xml');
    }

    /**
    *   Return the sitemap in XML for crawlers
	*
	*/
	public function xml()
	{
    	$view = view('sitemap.xml')->with([
            'pages' => $this->pages
        ]);
        return response($view, '200')->header('Content-Type', 'text/xml');
    }


    public function xmlproject($project)
	{
        $config = config('projects.' . $project);
        $view = view('sitemap.xmlproject')->with([
            'config' => $config,
            'project' => $project,
            'routes' => (isset($config['routes']) && count($config['routes'])) ? $config['routes'] : null
        ]);
        return response($view, '200')->header('Content-Type', 'text/xml');
    }

}
