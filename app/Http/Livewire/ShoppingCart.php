<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    protected $listeners = ['itemAdded' => 'render'];

    public function render()
    {
        $items = auth()->user()->shoppingSession->cartItems;
        return view('livewire.shopping-cart', [
            'itemsCount' => count($items ?? []),
            'items' => $items
        ]);
    }
}
