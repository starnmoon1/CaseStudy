<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.admin.list');
    }

    public function detail() {
        return view('products.detail');
    }

    public function checkout()
    {
        return view('products.checkout');
    }

    public function formCart() {
        return view('products.cart');
    }
}
