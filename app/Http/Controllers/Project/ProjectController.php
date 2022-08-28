<?php namespace App\Http\Controllers\Project;

use Response;
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

    public function home($project)
	{
        $config = config('projects.' . $project);
        if(!isset($config)) {
            abort('404');
        }
        if(isset($config['view'])) {
            return view($config['view'])->with([
                'sidebar' => config('projects.' . $project . '.sidebar')
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function page($project, $page)
	{
        $routes = config('projects.' . $project . '.routes');
        if(!isset($routes)) {
            abort('404');
        }
        if(isset($routes[$page]['view'])) {
            return view($routes[$page]['view'])->with([
                'sidebar' => config('projects.' . $project . '.routes.' . $page . '.sidebar')
            ]);
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

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

}
