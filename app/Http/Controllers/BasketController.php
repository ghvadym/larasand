<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket() {
        $order = (new Basket())->getOrder();
        return view('pages.basket', compact('order'));
    }

    public function basketAdd(Product $product) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::findOrFail($orderId);
        }

        if($order->products->contains($product->id)) {
            $pivotRow = $order->products()->where('product_id', $product->id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($product->id);
        }

        if($product) {
            session()->flash('success', 'Product "'.$product->name.'" has been added to basket successfully!');
        } else {
            session()->flash('warning', 'Error 404');
        }

        return redirect()->route('basket');
    }

    public function basketRemove(Product $product) {
        $orderId = session('orderId');
        $order = Order::findOrFail($orderId);

        if($order->products->contains($product->id)) {
            $pivotRow = $order->products()->where('product_id', $product->id)->first()->pivot;
            if($pivotRow->count < 2) {
                $order->products()->detach($product->id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        if($product) {
            session()->flash('warning', 'Product "'.$product->name.'" has been deleted from basket');
        }

        return redirect()->route('basket');
    }

    public function basketCheckout() {
        $order = (new Basket())->getOrder();
        if(Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }
        return view('pages.checkout', compact('order'));
    }

    public function basketConfirm(Request $request) {
        $basket = new Basket();
        $success = $basket->saveOrder($request->name, $request->phone);

        if($success) {
            session()->flash('success', 'Your Order #'.$basket->getOrder()->id.' has been created successfully!');
        } else {
            session()->flash('warning', 'Error 404');
        }
        return redirect()->route('home');
    }
}
