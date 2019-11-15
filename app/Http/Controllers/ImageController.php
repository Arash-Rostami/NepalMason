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
                $file = $request->file('file');
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move(public_path('images'), $fileName);
                $imagepath = "/images/{$fileName}";
                function image_path($imagepath){return $imagepath;}

            $image = new Image([
                    'imagepath' => $imagepath,]);
                $image->save();

        }
        $imagepat= image_path($imagepath);
        if ($request->product) {
             //   $product = DB::table('images')->last();
                $image = DB::table('images')->where('imagepath',
                    '==', $imagepat)->first();
                //$product->images()->save($image);

        }
    }
}
