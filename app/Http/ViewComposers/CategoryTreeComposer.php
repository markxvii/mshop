<?php
/**
 * Created by PhpStorm.
 * User: Marc Yin
 * Date: 2019-04-12
 * Time: 19:07
 */

namespace App\Http\ViewComposers;


use App\Services\CategoryService;
use Illuminate\View\View;

class CategoryTreeComposer
{
    protected $categoryService;

    public function __construct(CategoryService $service)
    {
        $this->categoryService=$service;
    }

    public function compose(View $view)
    {
        $view->with('categoryTree', $this->categoryService->getCategoryTree());
    }
}