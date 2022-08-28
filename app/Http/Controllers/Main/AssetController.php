<?php namespace App\Http\Controllers\Main;

use Response;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class AssetController extends Controller {

    public function __construct(private readonly Storage $storage)
    {
    }

    public function asset($filename)
	{

        $filesystem = $this->storage::disk('assets');

        $path = '/' . $filename;

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
