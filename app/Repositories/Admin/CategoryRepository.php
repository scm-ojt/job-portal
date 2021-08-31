<?php

namespace App\Repositories\Admin;

use App\Models\Category;

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
        $category->save();

        return $category;
    }

    public function update($request, $category)
    {
        $category->name = $request->name;
        $category->update();

        return $category;
    }

    public function destroy($category)
    {
        return $category->delete();
    }
}