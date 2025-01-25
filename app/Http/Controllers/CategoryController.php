<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\CategoryService\CategoryServiceInterface;
class CategoryController extends Controller
{
    public function __construct(private readonly CategoryServiceInterface $categoryService)
    {
    }
    public function categoryProductList($id) {
        $category = $this->categoryService->categoryShow($id);
        if (!$category) {
            abort(404);
        }
        $products = $this->categoryService->categoryProduct($category);
        return view('category',['category'=>$category,'products'=>$products]);
    }
}
