<?php

declare(strict_types=1);

namespace App\Services\BasketService;

use App\Contracts\Services\BasketService\BasketServiceInterface;
use App\Models\Category;
use App\Models\Product;
use App\Models\Basket;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LogicException;

class BasketService implements BasketServiceInterface
{
    public function __construct(private readonly Basket $basket)
    {
    }
    public function showBasket() {
        return $this->basket->with('products')
            ->when(auth()->check(), function ($query) {
                $query->where('user_id', auth()->id());
            }, function ($query) {
                $query->where('session_id', session()->getid());
            })->get();
    }
    public function deleteProductInBasket(int $id): void {
        $basket = $this->basket->find($id);
        $basket->delete();
    }
    public function getTotalBasket() {
        $_count=0;
        $baskets = $this->basket->with('products')
            ->when(auth()->check(), function ($query) {
                $query->where('user_id', auth()->id());
            }, function ($query) {
                $query->where('session_id', session()->getid());
            })->get();
        foreach($baskets as $basket) {
            $_count+=$basket->products->price*$basket->quantity;
        }
        return $_count;

    }
    public function changeQuantityProduct(int $id, int $quantity) : void {
        
        if (auth()->check()) {
            $this->basket->where('user_id', auth()->id())
                ->where('id', $id)
                ->update(['quantity' => $quantity]);
        } else {
            $this->basket->where('session_id', session()->getid())
                ->where('id', $id)
                ->update(['quantity' => $quantity]);
        }

    }
    public function getCountProduct() {
        $_count=0;
        $baskets = $this->basket->with('products')
            ->when(auth()->check(), function ($query) {
                $query->where('user_id', auth()->id());
            }, function ($query) {
                $query->where('session_id', session()->getid());
            })->get();
        foreach($baskets as $basket) {
            $_count+=$basket->quantity;
        }
        return $_count;
    }
    public function addToBasket(int $productId, int $quantity) : Basket
    {
        $basketData = [
            'product_id' => $productId,
            'quantity' => $quantity,
        ];
        if (auth()->check()) {
            $basketData['user_id'] = auth()->id();
        } else {
            $basketData['session_id'] = session()->getid();
        }

        return $this->basket->updateOrCreate(
            ['product_id' => $productId, 'user_id' => $basketData['user_id'] ?? null, 'session_id' => $basketData['session_id'] ?? null],
            ['quantity' => DB::raw('quantity + ' . $quantity)]
        );
    }
}