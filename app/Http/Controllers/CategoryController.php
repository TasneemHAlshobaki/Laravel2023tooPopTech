<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::select('*')->get(); 
        foreach ($categorys as $category) {
            $Category->image_url = Storage::disk('public')->url($Category->image);
        }
        return view('Home.category',compact('categorys'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Home.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $activity = $request->input('activity');         

        


        $image = $request->file('image');
        $image_name = time()+rand(0, 1000000000000) . '.' . $image->getClientOriginalExtension();
        $path = 'uploads/images/' . $image_name;

        Storage::disk('public')->put($path, file_get_contents($image));



        $category = new Category;
                   
        $category->name = $name;
        $category->activity = $activity;
        $category->image_url = $path;
        $category->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
