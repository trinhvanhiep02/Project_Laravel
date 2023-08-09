<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Images;
use App\Models\Category;
use App\Http\Requests\Request\Edit_pro_request;
use App\Http\Requests\Request\Add_pro_request;
use App\Models\Order;

class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate(10);
        return view('Admin.page.Product.Product',compact('product'));
    }


    public function add(){
        $category = Category::all();
        return view('Admin.page.Product.add_pro',compact('category'));
        
    }
    public function post(Add_pro_request $req){
       // dd($req ->all());
        if ($req->file('file')) {
            $file = $req->file('file');
            $file_name = $file->getClientOriginalName();
    
            $file->move(public_path('upload/'),$file_name);
        }
        $req->merge(['image'=>$file_name]);
        $product = Product::create($req->all());
       //images
       if ($req->file('files')) {
           foreach($req->file('files')as $files){
               $file_name = $files->getClientOriginalName();
               $files->move(public_path('upload/'),$file_name);
                Images::create([
                    'image' => $file_name,
                    'product_id'=>$product->id,
                ]);
           }
       }
       return redirect()->route('product');
        
    }
    public function edit($id){
        $product = Product::all();
        $category = Category::all();
        $pro = Product::find($id);
        return view('Admin.page.Product.edit',compact('product','pro','category'));
    }
    public function update($id ,Edit_pro_request $req){
        
        $product = Product::find($id)->update($req->all());
        if ($product) {
            return redirect()->route('product')->with('thongbao','update Thành Công');
        }else{
            return redirect()->route('product')->with('err','update không Thành Công');
        }
    }
    public function delete(Request $req, $id){
        $product = Product::find($id)->delete($req->all());
        if ($product) {
            return redirect()->route('product');
        }else{
            echo "thất bại";
        }
    }

    public function delete_order(Request $req, $id){
        $product = Order::find($id)->delete($req->all());
        if ($product) {
            return redirect()->route('product');
        }else{
            echo "thất bại";
        }
    }
}


