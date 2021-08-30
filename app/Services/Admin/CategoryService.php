<?php

namespace App\Services\Admin;

use App\Repositories\Admin\CategoryRepository;

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
        return $this->categoryRepository->store($request);
    }

    public function update($request, $category)
    {
        return $this->categoryRepository->update($request, $category);
    }

    public function destroy($category)
    {
        return $this->categoryRepository->destroy($category);
    }
}