<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        $cat = Categories::all();
        return view('dashboard.categories.list', ['cat'=>$cat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cat = new Categories;
        $validatedData = $request->validate([
            'categories_name' => 'required|max:255',
        ]);
        $name = $request->input('categories_name');
        $slug = str_slug($name);
        $cat->name = $name;
        $cat->slug = $slug;
        $cat->save();
        return redirect('/dashboard/categories')->with('status', 'Add categories successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cat = Categories::where('slug', $id)->get();
        return view('dashboard.categories.edit', ['cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'categories_name' => 'required|max:255',
        ]);
        $name = $request->input('categories_name');
        $cat = Categories::where('slug', $id)->firstOrFail();
        $cat->name = $name;
        $cat->save();
        return redirect('/dashboard/categories')->with('status', 'Update successfully ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $cat = Categories::where('slug', $slug)->delete();
        return redirect('/dashboard/categories')->with(['status'=>'Delete Successfully !']);
    }
}
