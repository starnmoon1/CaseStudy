<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('products.cart', compact('categories'));

    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');
        // if cart is empty then this the first product

        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success','Product added to cart successfully!');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('success','Product added to cart successfully!');
        }

        //if item note exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name"=>$product->name,
            "quantity"=>1,
            "price"=>$product->price,
            "photo"=>$product->photo
        ];

        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart successfully!');
    }
}
