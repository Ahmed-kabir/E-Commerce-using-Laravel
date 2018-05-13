<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function order(Request $request){
        $order=new Order();
        $order->name=$request->name;
        $order->email=$request->email;
        $order->address=$request->address;
        $order->number=$request->number;
        $order->payment_type=$request->payment_type;
        $order->save();
        //return redirect('/')->with('message','Your order given successfully');
        return view('cart.thank');
        
    }
}
