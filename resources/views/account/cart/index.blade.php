<x-layout-default>
    <div class="container">
        <h3 class="fw-bold">Winkelwagentje</h3>
        <div class="d-flex justify-content-between">
            <a href="{{url()->previous()}}" class="border d-flex back flex-row align-items-center mb-1">
                <i class="fa-solid fa-chevron-left"></i><span class="ms-2">{{ 'Terug' }}</span>
            </a>
            <a href="{{url()->previous()}}" class="border d-flex back flex-row align-items-center mb-1">
                <i class="fa-solid fa-chevron-right"></i><span class="ms-2">{{ 'Naar bestellen' }}</span>
            </a>
        </div>
        @foreach($items as $item)
            @livewire('cart-product', ['cartItem' => $item])
        @endforeach
    </div>
</x-layout-default>
