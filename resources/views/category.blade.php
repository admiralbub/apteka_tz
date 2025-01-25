<x-layouts.app  
    :title="$category->name"
    :descriptions="$category->name"
    :keywords="$category->name">

    
    <div class="row">
        <!-- Sidebar -->
        <x-aside></x-aside>

        <!-- Product Grid -->
        <section class="col-md-9">
            <div class="row g-4">
            <h1 class="fs-4">
                {{$category->name}}
            </h1>
            @if($products)
                @foreach($products as $product)
                    <x-products.product :product="$product"></x-products.product>
                @endforeach

            @else
                <p>Немає товарів для данної категорії.</p>
            @endif
            <!-- Duplicate Product Cards as needed -->
            {{ $products->links('pagination::bootstrap-4') }}
                            
            </div>
        </section>
    </div>
</x-layouts.app>