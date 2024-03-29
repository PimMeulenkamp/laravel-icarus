<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ShoppingSession;

class ContinueOrder extends Component
{
    protected $listeners = ['itemAdded' => 'render'];

    public function render()
    {
        $shoppingSession = auth()->user()->shoppingSession;
        if ($shoppingSession == null) {
            $shoppingSession = ShoppingSession::create([
                'user_id' => auth()->user()->id
            ]);
        }

        $products = $shoppingSession->cartItems->map(function ($item) {
            return $item->product;
        });

        $totalQuantity = $products->groupBy('name')->map(function ($item) {
            return $item->sum('id');
        });


        $items = [];
        $count = 0;
        if ($shoppingSession) {
            $items = $shoppingSession->cartItems;
        }
        foreach ($items as $item) {
            $count += $item->quantity;
        }

        return view('livewire.continue-order', [
            'itemsCount' => $count,
            'cartItems' => $totalQuantity,
        ]);
    }
}
