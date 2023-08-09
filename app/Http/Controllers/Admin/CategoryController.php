<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Request\AddRequest;
use App\Http\Requests\Request\Editrequest;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('Admin.page.Category.Category',compact('category'));
    }
    public function create(AddRequest $req ){
        $category = Category::create($req->all());
        if ($category) {
            return redirect()->back()->with('thongbao','Thêm mới Thành Công');
        }else{
            return redirect()->back()->with('err','Thêm mới không Thành Công');
        }
    }
    public function edit($id){
        $category = Category::all();
        $cate = Category::find($id);
        return view('Admin.page.Category.edit',compact('category','cate'));
    }
    public function update($id ,Editrequest $req){
        $category = Category::find($id)->update($req->all());
        if ($category) {
            return redirect()->back()->with('thongbao','update Thành Công');
        }else{
            return redirect()->back()->with('err','update không Thành Công');
        }
    }
    public function delete(Request $req, $id){
        $sv = Category::find($id)->delete($req->all());
        if ($sv) {
            return redirect()->route('Category');
            
        }else{
            echo "thất bại";
        }
    }
}
