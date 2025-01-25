<?php

declare(strict_types=1);

namespace App\Contracts\Services\CategoryService;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LogicException;

interface CategoryServiceInterface
{

    public function allCategoryList();

    public function categoryShow(int $id);
    public function categoryProduct(Category $category);
}