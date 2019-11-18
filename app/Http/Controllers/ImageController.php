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
        if ($request->file('file')) {
                $product=(Product::latest('id', 'desc')->first())->id;
                $file = $request->file('file');
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $fileName);
                $imagepath = "/images/{$fileName}";


            $image = new Image([
                    'imagepath' => $imagepath,]);
                $image->save();
                $image->products()->attach($product);

        }

    }

}
