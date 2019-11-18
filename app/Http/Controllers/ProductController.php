<?php

namespace App\Http\Controllers;

use App\Attributeitem;
use App\Brand;
use App\Category;
use App\Discount;
use App\Group;
use App\Attribute;
use App\Product;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product =DB::table('products')->latest('id')->get();
        $category = Category::all();
        $group = Group::all();
        $attribute = Attribute::all();
        $attributem = Attributeitem::all();
        $size = Size::all();
        $brand = Brand::all();
        $discount = Discount::all();

        return view('admin.product')
            ->with('product', $product)
            ->with('category', $category)
            ->with('attribute', $attribute)
            ->with('group', $group)
            ->with('attributem', $attributem)
            ->with('size', $size)
            ->with('brand', $brand)
            ->with('discount', $discount);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $product = new Product([
                'name' => $request->name,
                'description' => $request->desc,
                'price' => $request->price,
                'attribute_id' => $request->attribute,
                'discount_id' => $request->discount,
                'size_id' => $request->size,
                'brand_id' => $request->brand,
                'attributeitem_id' => $request->attr,
                'category_id' => $request->category,
            ]);
            $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
