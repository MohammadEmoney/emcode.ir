<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageService $image) {
        $this->image = $image;
    }

    public function destroy(Image $image)
    {
        $this->image->delete($image);
        return response()->json(['success' => true]);
    }

    public function update(Image $image)
    {
        Image::where('imageable_id' , $image->imageable_id)->update(['feature_image' => false]);
        $response = $image->update(['feature_image' => true]);
        return response()->json(['success' => true]);
    }
}
