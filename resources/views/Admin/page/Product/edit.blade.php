@extends('Admin.master')
@section('main')
<div class="container">
<H1 style="text-align: center;">Sửa Sản Phẩm</H1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input type="text" class="form-control" name="name" id="" value="{{$pro->name}}">
        </div>
        @error('name')
        <span style="color: red;">{{$message }}</span>
        @enderror


        <div class="row">
            <div class="form-group col-md-6">
                <label for="">price</label>
                <input type="text" class="form-control" name="price" id="" value="{{$pro->price}}">
            </div>
            @error('price')
            <span style="color: red;">{{$message }}</span>
            @enderror


            <div class="form-group col-md-6">
                <label for="">sale_price</label>
                <input type="text" class="form-control" name="sale_price" id="" value="{{$pro->sale_price}}">
            </div>
        </div>


        <div class="form-group">
            <label for="">Category_id: </label>
            <select name="category_id" id="" >
                <option value="{{$pro->category_id}}">chọn danh mục</option>
                @foreach($category as $cate)
                <option value="{{$cate->name}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-6">
                <label for="">Xuất Sứ:</label>
                <input type="text" class="form-control" name="nsx" value="{{$pro->nsx}}" id="">
            </div>
        </div>


        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">description</label>
            <textarea value="{{$pro->description}}" class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>


        <div class="" style="text-align: center; margin-top: 20px; ">
            <button class="btn btn-primary" style="width: 100%;" type="submit">ADD</button>
        </div>
    </form>
</div>

@stop