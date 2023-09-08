<?php

namespace App\Http\Controllers\Dsp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class RouteController extends Controller
{
    public function index()
    {
        $pathToIndex =  base_path() . '/dsp/dist/index.html'; // Update with the actual path

        // Check if the index.html file exists
        if (File::exists($pathToIndex)) {
            $content = File::get($pathToIndex);
            return Response::make($content, 200)
                ->header('Content-Type', 'text/html');
        } else {
            // Handle the case where the index.html file is not found
            abort(404);
        }
    }
}
