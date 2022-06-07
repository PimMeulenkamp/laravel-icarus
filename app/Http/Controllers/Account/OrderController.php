<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use App\Models\ShoppingSession;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('account.order.details');
    }

    public function store(OrderRequest $orderRequest) {
        $validated = $orderRequest->validated();
        $price = 0;

        foreach(auth()->user()->shoppingSession->cartItems as $cartItem) {
            $price += $cartItem->product->price * $cartItem->quantity;
        }

        $order = Order::create([
            'city' => $validated['city'],
            'street' => $validated['street'],
            'zipcode' => $validated['zipcode'],
            'street_number' => $validated['street_number'],
            'order_status_id' => OrderStatus::$PROCESSING,
            'user_id' => auth()->user()->id,
            'price' => $price,
        ]);

        foreach(auth()->user()->shoppingSession->cartItems as $cartItem) {
            OrderItem::create([
               'quantity' => $cartItem->quantity,
               'order_id' => $order->id,
               'product_id' => $cartItem->product->id
            ]);
            $price += $cartItem->product->price * $cartItem->quantity;
        }

        auth()->user()->shoppingSession->delete();

        return redirect()->route('account.index');
    }

    public function show(Order $order)
    {
        return view('account.order.show', [
           'order' => $order,
        ]);
    }
}
