<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','phone','address','note','total','status'];


    public function add($req ,$cart){
        $order =Order::create([
            'user_id'=>Auth::user()->id,
            'phone'=> $req->phone,
            'address'=>$req->address,
            'note'=>$req->note,
            'total'=>$cart->total_price()
        ]);
        return $order;
    }

  public function use(){
      return $this->belongsTo(User::class,'user_id','id');
  }

    public function orderDetail(){

        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function delete_order(){
        $order = Order::where('status',1)->get();
        return $order;
    }
}
