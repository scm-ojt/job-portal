<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryRepository 
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return $this->category->paginate(5);
    }

    public function store($request)
    {
        $category = new Category;
        $category->name = $request->name;
        if($request->hasFile('image')){
            $image = $request->file('image'); 
            $imageName = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/category-images',$imageName);
            $category->image = $imageName;
        }
        $category->save();

        return $category;
    }

    public function update($request, $id)
    {
        $category = Category::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('/public/category-images/'.$category->image);
            $image = $request->file('image'); 
            $imageName = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/category-images',$imageName);
            $category->image = $imageName ;
        }
        $category->name = $request->name;
        $category->update();

        return $category;
    }

    public function destroy($category)
    {
        return $category->delete();
    }
}