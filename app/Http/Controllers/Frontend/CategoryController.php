<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\CategoryService;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function show($id)
    {
        $category = $this->categoryService->show($id);
        $jobs = $this->categoryService->jobs($category);
        return view('frontend.category-detail',compact('category','jobs'));
    }
    
}
