<div class="row">
    <div class="col">
        <div class="d-flex flex-column">
            <p>{{$product->name}}</p>
            <p>{{$product->description}}</p>
        </div>
    </div>
    <div class="col">
        <button wire:click="add">+</button>
        <span>{{$quantity}}</span>
        <button wire:click="remove">-</button>
    </div>
    <div class="col">
        <p>price: <span>{{sprintf("%.2f", $totalPrice/100)}}</span></p>
    </div>
</div>
