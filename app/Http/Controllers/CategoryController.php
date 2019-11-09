<?php

namespace App\Http\Controllers;

use App\ParentCategory;
use App\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function index()
    {
        $parents = ParentCategory::all();
        $category = Category::all();
        return view('admin.category')
            ->with('parents', $parents)
            ->with('categories', $category);


    }

    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        if ($name = $request->title) {
            $parentcat = new ParentCategory(['name' => $name]);
            $parentcat->save();
            flashMessage('با موفقیت', "{$name}   ذخیره گردید    ", 'success');

        }

        if ($catname = $request->catname) {
            $id = $request->parentid;
            $category = new Category(['name' => $catname, 'parent_id' => $id]);
            $category->save();
            flashMessage('با موفقیت', "{$catname}  ذخیره گردید  ", 'success');

        }


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $parentCateory = ParentCategory::find($id);
        $parentName = $parentCateory->name;
        $parentCateory->delete();
        flashMessage('با موفقیت', "{$parentName}  حذف گردید  ", 'success');


    }


}
