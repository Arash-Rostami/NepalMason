<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function addImage(Request $request)
    {
        list($file, $product) = $this->fileId($request);

        $imagepath = $this->changeName($file);

        $this->saveFile($imagepath, $product);

    }

    /**
     * @param Request $request
     * @return array
     */
    public function fileId(Request $request): array
    {
        $file = $request->file('file');
        $product = (Product::orderBy('id', 'desc')->first())->id;
        return array($file, $product);
    }

    /**
     * @param $file
     * @return string
     */
    public function changeName($file): string
    {
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
        $imagepath = "/images/{$fileName}";
        return $imagepath;
    }

    /**
     * @param string $imagepath
     * @param $product
     */
    public function saveFile(string $imagepath, $product): void
    {
        $image = new Image([
            'imagepath' => $imagepath,]);
        $image->save();
        $image->products()->attach($product);
    }


}
