<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\ProductService\ProductServiceInterface;
class ShowProductController extends Controller
{
    public function __construct(private readonly ProductServiceInterface $productService)
    {
    }
    public function __invoke($id) {
        $product = $this->productService->showProduct($id);
        return view('show',['product'=>$product]);
    }
}
