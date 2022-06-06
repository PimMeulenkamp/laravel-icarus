<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index()
    {
        $items = auth()->user()->shoppingSession->cartItems;

        return view('account.cart.index',[
            'items' => $items
        ]);
    }
}
