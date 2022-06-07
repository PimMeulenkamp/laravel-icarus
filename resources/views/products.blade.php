<x-layout-default>
    <div class="my-4 container">
        <h1>Producten</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-6 col-lg-4 h-100">
                    @livewire('product', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</x-layout-default>
