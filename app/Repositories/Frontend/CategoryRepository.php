<?php

namespace App\Repositories\Frontend;
use App\Models\Category;

class CategoryRepository 
{
  public function show($id)
  {
      return Category::findOrFail($id);
  }
  public function jobs($category)
  {
      return $category->jobs()->where('approve_status', 1)->get();
  }

}