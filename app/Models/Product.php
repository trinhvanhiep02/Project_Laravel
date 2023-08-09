<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','sale_price','image','nsx','category_id','status','description'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getpro(){
        //$pro = Product::where('status',1)->orderby('created_at','DESC')->limit(1)->get();
         $pro = Product::where('status',1)->orderby('created_at','DESC')->paginate(8);
         //$pro = Product::where('status',1)->get();
        return $pro;
    }
    public function getproshop($id){
        $product = Product::where('category_id',$id)->orderby('created_at','DESC')->paginate(10);
        return $product;
    }
    public function img_pro(){
        return $this->hasMany(Images::class);
    }
}

