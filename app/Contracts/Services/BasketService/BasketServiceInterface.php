<?php

declare(strict_types=1);

namespace App\Contracts\Services\BasketService;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LogicException;

interface BasketServiceInterface
{
    public function showBasket();
    public function getTotalBasket();
    public function getCountProduct();
    public function changeQuantityProduct(int $id, int $quantity) : void;
    public function deleteProductInBasket(int $id): void;
    public function addToBasket(int $productId, int $quantity) : Basket;

  
}