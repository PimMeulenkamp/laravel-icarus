<div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <button wire:click="add" class="btn btn-lg btn-primary">Koop</button>
        </div>
    </div>
</div>
