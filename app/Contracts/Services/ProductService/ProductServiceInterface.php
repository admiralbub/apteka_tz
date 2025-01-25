<?php

declare(strict_types=1);

namespace App\Contracts\Services\ProductService;

use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LogicException;

interface ProductServiceInterface
{

    public function showProductsInIndex();

}