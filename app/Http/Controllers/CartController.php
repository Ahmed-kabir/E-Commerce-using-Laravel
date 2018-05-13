<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request){
        //dd($request->all());
        $productid=$request->productId;
        $productbyid= Product::where('id',$productid)->first();
        
        Cart::add([
            'id'=>$productid,
            'name'=>$productbyid->product_name,
            'price'=>$productbyid->product_price,
            'image'=>$productbyid->product_image,
            'qty'=>$request->qty
        ]);
        return redirect('/cart/show');
    }
    public function showCart(){
        $cartproduct=Cart::Content();
        return view('cart.viewcart',['cartprodutcts'=>$cartproduct]);
    }
    public function updateCart(Request $request){
        dd($request->all());
        //Cart::update($request->qty,$request->rowId);
       //return back()->with('message','cart updated successfully');
    }
    public function deleteCart($rowId){
        Cart::remove($rowId);
        return back();
    }
    public function checkOut(){
        return view('cart.checkout');
    }
}
