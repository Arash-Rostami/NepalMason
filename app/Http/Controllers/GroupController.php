<?php

namespace App\Http\Controllers;

use App\Group;
use App\Attribute;
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
}
