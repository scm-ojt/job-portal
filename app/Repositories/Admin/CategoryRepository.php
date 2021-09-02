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
        return $this->category->orderBy('id', 'DESC')->paginate(10);
    }

    public function store($category)
    {
        return $category->save();
    }

    public function update($category)
    {
        return $category->update();
    }

    public function destroy($category)
    {
       return $category->delete();
    }
}