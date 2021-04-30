<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } else {
            return redirect()->route('home')->with('warning', 'Your basket is empty. Please add to card some products');
        }
        return view('pages.basket', compact('order'));
    }

    public function basketAdd($productId) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }
        $product = Product::find($productId);
        if($product) {
            session()->flash('success', 'Product "'.$product->name.'" has been added to basket successfully!');
        } else {
            session()->flash('warning', 'Error 404');
        }

        return redirect()->route('basket');
    }

    public function basketRemove($productId) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        $product = Product::find($productId);
        if($product) {
            session()->flash('warning', 'Product "'.$product->name.'" has been deleted from basket');
        }

        return redirect()->route('basket');
    }

    public function basketCheckout() {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            return redirect()->route('home');
        }
        $order = Order::find($orderId);
        if(Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }
        return view('pages.checkout', compact('order'));
    }

    public function basketConfirm(Request $request) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            return redirect()->route('home');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);

        if($success) {
            session()->flash('success', 'Your Order #'.$order->id.' has been created successfully!');
        } else {
            session()->flash('warning', 'Error 404');
        }
        return redirect()->route('home');
    }
}
