<?php

declare(strict_types=1);

namespace App\Services\CategoryService;

use App\Contracts\Services\CategoryService\CategoryServiceInterface;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LogicException;

class CategoryService implements CategoryServiceInterface
{
    public function __construct(private readonly Category $category)
    {
    }

    public function allCategoryList()
    {
        return $this->category->whereNull('category_id')->OrderBy('id','DESC')->get();
    }

    public function categoryShow(int $id) {
        return $this->category->newQuery()
            ->findOrFail($id);
    }
    public function categoryProduct(Category $category) {
        $product_ids = $category->products()
            ->get()
            ->pluck('id');

        foreach ($category->children as $child) {
            $product_ids = $product_ids->merge(
                $child->products()
                            
                ->pluck('products.id')  // Specify the table name here
                ->values()

            );
    
            foreach ($child->childs as $third) {
                $product_ids = $product_ids->merge(
                    $third->products() 
                        ->get()
                        ->pluck('id')
                        ->values()
                );
            }
        }
        $products = Product::whereIn('id', $product_ids)->paginate(12);
        return $products;
    }
}