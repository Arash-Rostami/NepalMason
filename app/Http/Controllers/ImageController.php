<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function addImage(Request $request)
    {
        $file= $request->file('file');
        $fileName= uniqid().$file->getClientOriginalName();

        $file->move(public_path('images'),$fileName);
        $product = Product::find(1);


       $image = new Image([
          'imagepath' => "/images/{$fileName}",]);
      // $image->save();
      $image->products()->attach(1);



    }
}
