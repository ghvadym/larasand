<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {

    public function index() {
        $orders = Auth::user()->orders()->active()->simplePaginate(10);
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order) {
        if(Auth::user()->orders->contains($order)) {
            return view('auth.orders.show', compact('order'));
        } else {
            return redirect()->route('orders.user.index')->with('warning', 'You haven\'t some orders');
        }
    }
}
