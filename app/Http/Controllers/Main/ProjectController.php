<?php namespace App\Http\Controllers\Main;

use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller {

    public function __construct(private readonly Storage $storage, private readonly ProjectRepository $projectRepo)
    {
    }

	public function index()
	{
        return view('main.project.index')->with([
            'projects' => $this->projectRepo->all()
        ]);
	}

}
