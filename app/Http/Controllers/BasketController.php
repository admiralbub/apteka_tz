<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\BasketService\BasketServiceInterface;
class BasketController extends Controller
{
    public function __construct(private readonly BasketServiceInterface $basketService)
    {
    }
    public function __invoke() {
        $baskets = $this->basketService->showBasket();
        $totalBasket = $this->basketService->getTotalBasket();
        $countBasket = $this->basketService->getCountProduct();
        return view('basket',['baskets'=>$baskets,'totalBasket'=>$totalBasket,'countBasket'=>$countBasket]);
    }
    public function addToBasket(Request $request) {
        $this->basketService->addToBasket($request->productId,$request->quantity);
        return response()->json(['message' => 'Товар додан до кошика']);
    }
    public function deleteProductInBasket(Request $request) {
        $this->basketService->deleteProductInBasket($request->productId);
        
        return response()->json(['message' => 'Товар видалений до кошика']);
    }   
    public function countBasket() {
        $count = $this->basketService->getCountProduct();
        return response()->json(['count' => $count]);
    }
    public function changeQuantityProd(Request $request) {
        if ($request->quantity < 1) {
            return response()->json(['error' => 'Кількість має бути більшою за нуль'], 400);
        }
        $this->basketService->changeQuantityProduct($request->id,$request->quantity);
    }
}
