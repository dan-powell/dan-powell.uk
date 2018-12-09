<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;

class ImageController extends Controller
{
    public function show(ImageGetRequest $request, Storage $storage, $path)
    {

        $filesystem = $storage::disk(config('images.storage'));

        $server = ServerFactory::create([
            'response' => new LaravelResponseFactory(app('request')),
            'source' => $filesystem->path('/'),
            'cache' => $filesystem->path('/'),
            'cache_path_prefix' => '.cache',
            'presets' => config('images.presets')
        ]);

        return $server->getImageResponse($path, request()->all());
    }
}
