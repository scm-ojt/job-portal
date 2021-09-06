<?php

namespace App\Services\Admin;

use App\Models\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Support\Facades\Storage;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return $this->categoryRepository->index();
    }

    public function store($request)
    {
        $category = new Category;
        if($request->hasFile('image')){
            $image = $request->file('image'); 
            $imageName = $image->getClientOriginalName();
            $request->file('image')->storeAs('public/category-images',$imageName);
            $category->image = $imageName;
        }
        $category->name = $request->name;

        return $this->categoryRepository->store($category);
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
        return $this->categoryRepository->update($category);
    }

    public function destroy($category)
    {
        return $this->categoryRepository->destroy($category);
    }
}