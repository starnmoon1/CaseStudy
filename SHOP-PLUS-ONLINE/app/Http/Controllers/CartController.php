<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Category;
use App\Customer;
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
            "image"=>$product->image
        ];

        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function postCheckOut(Request $request, $total,$quantity) {
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();

        $bill = new Bill();
        $bill->customer_id = $customer->id;
        $bill->date_order = date('Y-m-d H:i:s');
        $bill->total = $total;
        $bill->note = $request->note;
        $bill->save();

        foreach(session('cart') as $id => $details)
        {
            $billDetail = new BillDetail;
            $billDetail->bill_id = $bill->id;
            $billDetail->product_id = $id;
            $billDetail->quantity = $details['quantity'];
            $billDetail->price = $details['price'];
            $billDetail->save();
        }

        return view('products.bill', compact('billDetail','bill','customer'))->with('success', 'Stock has been added');;


    }


}

