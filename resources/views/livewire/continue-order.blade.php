<div class="w-100 ">
    <hr>
    <div class="row justify-content-between align-items-end ">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Bestelling</li>
                @foreach($cartItems as $name => $quantity)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{$name}}</span>
                        <span class="fw-bold ms-3 badge bg-success rounded-pil">{{$quantity}}x</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
                    <span class="fw-bolder">Totaal</span>
                    <span class="fw-bold badge bg-brand-blue rounded-pil">{{$itemsCount}}x</span>
                </li>
            </ul>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-end justify-content-between h-100 mt-4 mt-md-0">
            {{--            <h3>Ga naar bestellen</h3>--}}
            <a href="{{ route('cart.index') }}" class="btn btn-success btn-lg">
                <i class="fa-solid fa-basket-shopping fa-lg"></i>
                <span class="ml-2">Bestellen</span>
            </a>
        </div>
    </div>

</div>
