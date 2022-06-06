<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Product extends Component
{
    public \App\Models\Product $product;

    public function add()
    {
        if (!auth()->user()) {
            $this->redirect(route('register'));
            return;
        }
        $shoppingSession = auth()->user()->shoppingSession;
        if (!$shoppingSession) {
            $shoppingSession = auth()->user()->shoppingSession()->create();
        }
        $shoppingSession->cartItems()->create([
            'product_id' => $this->product->id,
            'quantity' => 1
        ]);

        $this->emit('itemAdded');
    }
    public function render(): Factory|View|Application
    {
        return view('livewire.product', [
            'product' => $this->product,
        ]);
    }
}
