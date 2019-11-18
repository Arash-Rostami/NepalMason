<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Attributeitem;
use App\Image;
use App\Product;
use App\Size;
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

    public function addChar(Request $request)
    {
        $product_id = $this->getProductId();

        if ($request->size){
            DB::table('products')->where('id', '=' , $product_id)->first()
                ->insert(["size_id" => $request->size]);
//            $size = new Size([
//                'size' => $request->size,
//            ]);
//            $size->save();
//            $size->products()->attach($product_id);
        };

        if ($request->attribute && $request->attr){
            $this->addAnotherAttr($request);
        };




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

    /**
     * @return mixed
     */
    public function getProductId()
    {
        $product_id = (Product::orderBy('id', 'desc')->first())->id;
        return $product_id;
    }

    /**
     * @param Request $request
     * @param $product_id
     */
    public function addAnotherSize(Request $request, $product_id): void
    {
        $size = new Size([
            'size' => $request->size,
        ]);
        $size->save();
        $size->products()->attach($product_id);
    }

    /**
     * @param Request $request
     */
    public function addAnotherAttr(Request $request): void
    {
        $product_id = (Product::orderBy('id', 'desc')->first())->id;
        $attribute = new Attribute([
            'name' => $request->attribute,
        ]);
        $attribute->save();

        $attributeitem = new Attributeitem([
            'name' => $request->attr,
            'attribute_id' => $request->attribute,

        ]);
        $attributeitem->save();

        $attribute->products()->attach($product_id);
        $attributeitem->products()->attach($product_id);
    }

    /**
     * @param Request $request
     * @return array
     */


}
