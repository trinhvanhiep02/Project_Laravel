<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function addcart(Request $req, Cart $cart)
    {
        // dd($req->all());
        $product = Product::find($req->id);
        $cart->add($product, $req->quantity, $req->attr);
        return redirect()->route('cart');
    }

    public function showcart(Cart $cart)
    {
        // dd($cart);
        //$cart = $cart -> content();
        return view('custumer.page.Showcart', compact('cart'));
    }
    public function update(Request $req, Cart $cart)
    {
        $req = $req->except('_token');
        $cart->update($req);
        return redirect()->back();
    }

    public function delete_cart($key, Cart $cart)
    {
        $cart->delete($key);
        return redirect()->back();
    }

    public function checkout()
    {
        return view('custumer.page.Checkout');
    }

    public function post_checkout(Request $req, Order $order, Cart $cart, OrderDetail $OrderDetail)
    {
        $order = $order->add($req, $cart);
        //dd($req->all());
        if ($order) {
            $OrderDetail->add($order, $cart);
            Mail::to($req->email)->send(new OrderShipped());
            $cart->destroy();
        }
        return redirect()->route('shop');
    }






    public function order(){
        $order = Order::all();
        return view('Admin.page.Donhang',compact('order'));
    }

    public function orderdetail($id,Order $order,OrderDetail $orderDetail,Product $product){
        $order = Order::find($id); 
        $detail = orderdetail::where('order_id',$id)->get();

        
        return view('Admin.page.Chitietdonhang',compact('order','detail',$order));
    }
}
