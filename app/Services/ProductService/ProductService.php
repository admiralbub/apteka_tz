<?php

declare(strict_types=1);

namespace App\Services\ProductService;

use App\Contracts\Services\ProductService\ProductServiceInterface;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LogicException;

class ProductService implements ProductServiceInterface
{
    public function __construct(private readonly Product $product)
    {
    }

    public function showProductsInIndex()
    {
        return $this->product->paginate(3);
    }
}