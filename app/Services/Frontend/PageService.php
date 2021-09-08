<?php

namespace App\Services\Frontend;

use App\Repositories\Frontend\PageRepository;

class PageService{
    protected $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }
    
    public function jobs()
    {
        return $this->pageRepository->jobs();
    }
    public function companies()
    {
        return $this->pageRepository->companies();
    }
    public function categories(){
        return $this->pageRepository->categories();
    }
}