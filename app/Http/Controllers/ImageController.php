<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;

class ImageController extends Controller
{

    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    // Returns an image from the main image storage disk
    public function show(ImageGetRequest $request, $image)
    {
        return $this->image_response(config('images.storage'), '', $image);
    }

    // Returns an image from the project image storage disk
    public function project(ImageGetRequest $request, $project, $image)
    {
        return $this->image_response('project_images', $project, $image);
    }

    // Returns the image server factory used to process images
    private function create_server($source, $cache) {
        return ServerFactory::create([
            'response' => new LaravelResponseFactory(app('request')),
            'source' => $source,
            'cache' => $cache,
            'cache_path_prefix' => '',
            'presets' => config('images.presets')
        ]);
    }

    // Returns an image from a particular disk & path
    private function image_response($disk, $path, $image) {

        $filesystem = $this->storage::disk($disk);
        $filesystem_cache = $this->storage::disk(config('images.cache'));

        if($filesystem->exists($path . '/' . $image)) {
            $server = $this->create_server($filesystem->path($path), $filesystem_cache->path($disk . '/' . $path));
            return $server->getImageResponse($image, request()->all());
        } else {
            abort('404');
        }

    }
}
