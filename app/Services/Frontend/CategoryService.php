<?php

namespace App\Services\Frontend;

use App\Repositories\Frontend\CategoryRepository;

class CategoryService{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }    
    public function show($id)
    {
        return $this->categoryRepository->show($id);
    }
    public function jobs($category)
    {
        return $this->categoryRepository->jobs($category);
    }
}