<?php namespace App\Http\Controllers\Main;

use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller {

    private $storage;
    private $projectRepo;

    public function __construct(Storage $storage, ProjectRepository $projectRepository)
    {
        $this->storage = $storage;
        $this->projectRepo = $projectRepository;
    }

	public function index()
	{
        return view('main.project.index')->with([
            'projects' => $this->projectRepo->all()
        ]);
	}

}
