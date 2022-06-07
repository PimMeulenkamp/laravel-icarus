<div class="card h-100 shadow-lg">
    <div class="card-body bg-brand-blue text-white">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        @if(auth()->check())
            <button wire:click="add" class="btn btn-white"><i class="fa-solid fa-plus me-2 fa-sm"></i> Voeg toe</button>
        @else
            <a href="{{route('login')}}" class="btn btn-white">Inloggen om te kunnen bestellen</a>
        @endif
    </div>
</div>
