<?php

namespace App\Http\Controllers\Custumer;
use App\Models\Product;
use App\Models\Category;
use App\Models\Images;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Cart;

class CustumerController extends Controller
{
    public function index(){
        return view('custumer.page.Home');
    }

    public function Shop(Category $cate, Product $pro){
        $cate = $cate->getcate();
        $pro = $pro->getpro();
        return view('custumer.page.Shop',compact('pro','cate'));
    }

    public function Shopcate(Category $cate,Product $product,$id){
        $cate = $cate->getcate();
        //dd($id);
        $pro = $product->getproshop($id);
        
       // dd($pro_cate);
        return view('custumer.page.Shopcate',compact('pro','cate'));
    }

    public function About(){
        return view('custumer.page.About');
    }

    public function Services(){
        return view('custumer.page.Services');
    }

    public function Contact(){
        return view('custumer.page.Contact');
    }

    public function chitiet($id){
        
        $pro = Product::find($id);
        //$img = Images::find($id);



        return view('custumer.page.chitiet',compact('pro'));
    }


    public function login(){
        return view('custumer.page.Fale.login');
    }

    public function dangky(){
        return view('custumer.page.Fale.register');
    }

    
}
