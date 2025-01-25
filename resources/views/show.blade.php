
<x-layouts.app  
    :title="$product->name"
    :descriptions="$product->name"
    :keywords="$product->name">

    <div class="row">
        <div class="col col-lg-4">
            <img src="{{asset($product->img)}}" alt="">
        </div>
        <div class="col col-lg-8">
            <p class="fw-bold fs-4">
                {{$product->name}}
            </p>
            <p >
                {{$product->description}}
            </p>
            <strong class="fs-4">
                {{$product->price}} грн.
            </strong>
            <div class="d-flex mt-3"> 
                <div class="pt-1 pr-3">
                    <span class="fs-5">Кіл.</span>
                </div>
                <div>
                    <input type="number" class="form-control" value="1" id="quantityShow">
                </div>
                
            </div>
            <div class="mt-3">
                <button type="button" class="btn btn-primary" data-id="{{$product->id}}" id="addProducBasketOne" >Додати до кошика</button>
            </div>
        </div>
    </div>
  
    
</x-layouts.app>