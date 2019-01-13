<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;

class ProjectController extends Controller {

    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

	public function index()
	{
        $items = collect(config('content.projects.items'));
        $tags = collect(config('content.projects.tags'));
        return view('projects.index.index')->with([
            'projects' => $items,
            'tags' => $tags
        ]);
	}

	public function show($project)
	{
        $items = config('content.projects.items');
        if(isset($items[$project]['view'])) {
            return view($items[$project]['view']);
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
