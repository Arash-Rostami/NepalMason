<?php

namespace App\Http\Controllers;

use App\Group;
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
}
