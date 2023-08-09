@extends('Admin.master')
@section('main')

<ul class="list-group" style="width: 40%;">
  <li class="list-group-item active">Thông Tin Khách Hàng</li>
  <li class="list-group-item">Name: {{$order->use->name}}</li>
  <li class="list-group-item">email: {{$order->use->email}}</li>
  <li class="list-group-item">SĐT: {{$order->phone}}</li>
  <li class="list-group-item">ĐC: {{$order->address}}</li>
  <li class="list-group-item">Ghi chú:{{$order->note}}}</li>

</ul>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

<table class="table table-bordered">
  <thead >
    <tr class="bg-success">
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
      <th scope="col">Tổng</th>
    </tr>
  </thead>
  <tbody>
  @foreach($detail as $value)
    <tr>
      <th scope="row">{{$loop->index = 1}}</th>
      <td>{{$value->product->name}}</td>
      <td><img style="width: 250px;" src="{{url('upload')}}/{{$value->product->image}}" alt=""></td>
      <td>{{number_format($value->price)}}</td>
      <td>{{$value->quantity}}</td>
      <td>{{number_format(($value->price)*($value->quantity))}}</td>
      <td>
        <a href="{{route('delete_order',$value->id)}}">xoá</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>


@stop