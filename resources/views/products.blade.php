<x-layout-default>
    <div class="mh-60 d-flex flex-column">
        <div class="my-4 container">
            <div class="bg-white rounded shadow-lg p-4 me-n2">
                <h1 class="fw-bold">Actie producten</h1>
                <p><i class="fa-solid fa-circle-info"></i> In elke zak zitten 3 krentenbollen, alle opbrengst gaat naar
                    de krentenbollen actie van badminton vereniging Icarus.</p>
            </div>
        </div>
        <div class="container">
            <div class="row mb-3 mb-md-5 mb-lg-7">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4 h-100">
                        @livewire('product', ['product' => $product])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        @auth()
            <div class="mt-4">
                @livewire('continue-order')
            </div>
        @endauth
    </div>

</x-layout-default>
