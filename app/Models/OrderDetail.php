<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','product_id','price','quantity'];

    public function add($order,$cart){
        foreach($cart->content() as $value){
            $OrderDetail = OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$value['id'],
                'price'=>$value['price'],
                'quantity'=>$value['quantity']
            ]);
        }
        return $OrderDetail;
    }

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function orders(){
        $order = OrderDetail::all();
        return $order;
    }

    public function product(){
        return $this->belongsTo(product::class,'product_id','id');
    }
}
