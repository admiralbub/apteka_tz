<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\ProductService\ProductServiceInterface;
class IndexController extends Controller
{
    public function __construct(private readonly ProductServiceInterface $productService)
    {
    }


    public function __invoke() {
        $products = $this->productService->showProductsInIndex();
        return view('index',['products'=>$products]);
    }
}
