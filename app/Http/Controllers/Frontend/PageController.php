<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\PageService;

class PageController extends Controller
{
    private $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index()
    {  
        $jobs = $this->pageService->jobs();
        $companies = $this->pageService->companies();
        $categories = $this->pageService->categories();
        return view('frontend.top-page', compact('jobs','companies','categories'));
    }
    
}
