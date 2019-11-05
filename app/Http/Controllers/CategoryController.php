<?php

namespace App\Http\Controllers;

use App\ParentCategory;
use App\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = ParentCategory::all();
        $category = Category::all();
        return view('admin.category')
            ->with('parents', $parents)
            ->with('categories', $category);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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

    public function testt()
    {


    }
}
