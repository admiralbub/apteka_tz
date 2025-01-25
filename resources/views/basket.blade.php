<x-layouts.app  
    :title="'Кошик'"
    :descriptions="'Кошик'"
    :keywords="'Кошик'">

    <h1 class="fs-4">
        Кошик
    </h1>
    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назва товаров</th>
                    <th scope="col">Ціна</th>
                    <th scope="col">Кількість</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($baskets as $basket)
                    <tr>
                        <th scope="row">{{$basket->id}}</th>
                        <td>{{$basket->products->name}}</td>
                        <td >
                            <span class="fs-5 pt-2">{{$basket->products->price}}</span>
                        </td>
                        <td style="width:150px">
                            
                            <input class="form-control change-quantity" data-id="{{$basket->id}}"  type="number" value="{{$basket->quantity}}" >

                        </td>
                        <td>
                            <button type="button" data-id="{{$basket->id}}" class="btn btn-danger delete-basket" >Видалити</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center fs-4 mt-3 fw-bold">
            <p>{{$countBasket}} товарів на загальну суму :
            <br>
            до покупок
            <br>
            <span>{{$totalBasket}}</span> грн</span>
        </div>
    </div>
</x-layouts.app>