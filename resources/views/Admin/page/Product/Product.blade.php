@extends('Admin.master')
@section('main')
@if(Session::get("thongbao"))
            <div class="alert alert-info" role="alert">
                <strong>{{Session::get("thongbao")}}</strong>
            </div>
            @endif
<table class="table table-bordered ">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Price</th>
            <th>sale_price</th>
            <th>Image</th>
            <th>Xuất sứ</th>
            <th>Category</th>
            <th>Description</th>
            <th></th>
            


        </tr>
    </thead>
    <tbody>
    @foreach($product as $value)
        <tr>
            <td >{{$loop->index + 1}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->price}}</td>
            <td>{{$value->sale_price}}</td>
            <td><img src="{{url('upload')}}\{{$value->image}}" style="width: 100px;" alt=""></td>
            <td>{{$value->nsx}}</td>
            <td>{{$value->category_id}}</td>
            <td>{{$value->description}}</td>
            <td>
            <a href="{{route('edit_product',$value->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
            <a href="{{route('delete_product',$value->id)}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
            </td>
        </tr>
    @endforeach
    
    </tbody>
</table>
{{$product->links()}}

@stop