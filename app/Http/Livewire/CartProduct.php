<?php

namespace App\Http\Livewire;

use App\Models\CartItem;
use Livewire\Component;

class CartProduct extends Component
{
    public int $cartId;
    public \App\Models\Product $product;
    public int $quantity;
    public int $totalPrice;

    public function mount(CartItem $cartItem)
    {
        $this->cartId = $cartItem->id;
        $this->product = $cartItem->product;
        $this->quantity = $cartItem->quantity;
    }

    public function add()
    {
        $cartItem = CartItem::find($this->cartId);
        $cartItem->quantity++;
        $cartItem->save();
        $this->quantity = $cartItem->quantity;
        $this->totalPrice = $this->product->price * $this->quantity;
        $this->emit('itemAdded');
    }

    public function remove()
    {
        $cartItem = CartItem::find($this->cartId);
        if ($this->quantity == 1) {
            $cartItem->delete();
            return;
        }
        $cartItem->quantity--;
        $cartItem->save();
        $this->quantity = $cartItem->quantity;
        $this->totalPrice = $this->product->price * $this->quantity;
        $this->emit('itemAdded');
    }

    public function render()
    {
        return view('livewire.cart-product');
    }
}
