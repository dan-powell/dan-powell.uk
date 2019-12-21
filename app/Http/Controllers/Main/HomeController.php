<?php namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

use App\Repositories\ProjectRepository;

class HomeController extends Controller {


    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepo = $projectRepository;
    }

	public function show()
	{
        return view('main.home.home')->with('project', $this->projectRepo->all()->first());
    }

}
