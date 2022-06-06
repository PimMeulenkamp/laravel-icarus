<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    protected $listeners = ['itemAdded' => 'render'];

    public function render()
    {
        $shoppingSession = auth()->user()->shoppingSession;
        $items = [];
        if ($shoppingSession) {
            $items = $shoppingSession->items;
        }
        return view('livewire.shopping-cart', [
            'itemsCount' => count($items),
            'items' => $items
        ]);
    }
}
