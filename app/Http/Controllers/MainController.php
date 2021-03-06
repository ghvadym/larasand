<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        $products = Product::take(3)->orderBy('id', 'desc')->get();
        return view('pages.home', compact('products'));
    }

    public function shop(ProductsFilterRequest $request) {
        $productsQuery = Product::with('category');
        if($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }
        foreach (['new', 'hit', 'recommended'] as $label) {
            if($request->has($label)) {
                $productsQuery->$label();
            }
        }

        $products = $productsQuery->simplePaginate(9)->withPath('?' . $request->getQueryString());
        return view('pages.shop', compact('products'));
    }

    public function categories() {
        $categories = Category::get();
        return view('pages.categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('pages.category', compact('category'));
    }

    public function product($category, $product) {
        $product = Product::withTrashed()->where('code', $product)->first();
        return view('pages.product', compact('product'));
    }
}
