<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        $products = Product::get();
        return view('pages.home', compact('products'));
    }

    public function shop() {
        return view('pages.shop');
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
        $product = Product::where('code', $product)->first();
        return view('pages.product', compact('product'));
    }
}
