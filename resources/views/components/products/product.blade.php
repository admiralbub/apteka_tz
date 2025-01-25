<!-- Product Card -->
<div class="col-md-4">
    <div class="card">
        <img src="{{asset($product->img)}}" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}} грн.</p>
            <button class="add-to-cart btn btn-primary" data-product-id="{{$product->id}}" data-quantity="1">Додати до кошика</button>
        </div>
    </div>
</div>