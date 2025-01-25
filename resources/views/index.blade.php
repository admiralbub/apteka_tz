
<x-layouts.app  
    :title="'Головна'"
    :descriptions="'Головна'"
    :keywords="'Головна'">

    <div class="row">
        <!-- Sidebar -->
        <x-aside></x-aside>

        <!-- Product Grid -->
        <section class="col-md-9">
            <div class="row g-4">
                @if($products)
                    @foreach($products as $product)
                        <x-products.product :product="$product"></x-products.product>
                    @endforeach
                    <!-- Duplicate Product Cards as needed -->
                    {{ $products->links('pagination::bootstrap-4') }}
                @endif
            </div>
        </section>
    </div>
  
    
</x-layouts.app>