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
        $count = 0;
        if ($shoppingSession) {
            $items = $shoppingSession->cartItems;
        }
        foreach ($items as $item) {
            $count += $item->quantity;
        }
        return view('livewire.shopping-cart', [
            'itemsCount' => $count,
        ]);
    }
}
