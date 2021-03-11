<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        return view('pages.home');
    }

    public function shop() {
        return view('pages.shop');
    }

    public function categories() {
        return view('pages.categories');
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('pages.category', compact('category'));
    }

    public function product() {
        return view('pages.product');
    }
}
