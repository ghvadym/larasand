<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }

        return view('pages.basket', compact('order'));
    }

    public function basketAdd($productId, Request $request) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);
        return view('pages.basket', compact('order'));
    }

    public function basketRemove($productId) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            return view('pages.basket', compact('order'));
        }
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return view('pages.basket', compact('order'));
    }
}
