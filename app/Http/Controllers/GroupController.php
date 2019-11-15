<?php

namespace App\Http\Controllers;

use App\Attributeitem;
use App\Group;
use App\Attribute;
use App\Size;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function store(Request $request)
    {
        $group = new Group([
            'name' => $request->name,
            'category_id' => $request->id,]);
        $group->save();
    }

    public function addAtrribute(Request $request)
    {
        $attribute = new Attribute([
            'name' => $request->name,
            'group_id' => $request->id,]);
        $attribute->save();
    }

    public function addAttributeitem(Request $request)
    {
        $attributeitem = new Attributeitem([
            'name' => $request->name,
            'attribute_id' => $request->id,]);
        $attributeitem->save();
    }

    public function addSize(Request $request)
    {
        $size = new Size([
            'size' => $request->name,
            'group_id' => $request->id,]);
        $size->save();
    }
}
