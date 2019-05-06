<?php namespace App\Http\Controllers\Project;

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
            'projects' => $this->projectRepo->all(),
            'tags' => $this->projectRepo->tags()
        ]);
	}

    public function show($slug)
	{
        $item = $this->projectRepo->find($slug);
        if(isset($item['view'])) {
            return view($item['view'])->with([]);
        } else {
            abort('404');
        }
    }

    public function page($project, $page)
	{
        $items = config('content.projects.items');
        if(isset($items[$project]['view'])) {
            if(isset($items[$project]['items'][$page]['view'])) {
                return view($items[$project]['items'][$page]['view']);
            } else {
                abort('404');
            }
        } else {
            abort('404');
        }
    }

    public function asset($project, $filename)
	{

        $filesystem = $this->storage::disk('project_assets');

        $path = $project . '/' . $filename;

        if (!$filesystem->exists($path)) {
            abort(404);
        }

        $file = $filesystem->get($path);
        $type = $filesystem->mimeType($path);

        $response = \Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

}
