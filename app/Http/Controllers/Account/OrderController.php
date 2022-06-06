<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function details()
    {
//        $shoppingSession = auth()->user()->shoppingSession;
//        $cartItems = [];
//        if ($shoppingSession != null) {
//            $cartItems = $shoppingSession->cartItems;
//        }
        return view('account.order.details');
    }
}
