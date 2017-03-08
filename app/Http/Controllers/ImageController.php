<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
    /**
     * Show uploader main page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('uploader');
    }

    /**
     * Upload image from request to the server
     *
     * @param Request $request
     * @param ImageManager $imageManager
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request, ImageManager $imageManager)
    {
        $this->validate($request, [
            'image' => 'required|image|max:10000',
        ]);

        $file = $request->file('image');

        $basename = str_random();
        $extension = $file->extension();

        $image = $file->storePubliclyAs('public/images', $basename.'.'.$extension);

        $thumbnailBaseName = "thumb_{$basename}.{$extension}";

        $imageManager->make(storage_path('app/'.$image))
            ->resize(300, 300)
            ->save(storage_path('app/public/images/'.$thumbnailBaseName));

        return response()->json([
            'thumbnail' => asset('storage/images/'.$thumbnailBaseName)
        ]);
    }
}
