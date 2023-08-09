@extends('Admin.master')
@section('main')



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">user</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">note</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>
  @foreach($order as $value)
    <tr>
      <th scope="row">{{$loop->index}}</th>
      <td>{{$value->user_id}}</td>
      <td>{{$value->phone}}</td>
      <td>{{$value->address}}</td>
      <td>{{$value->note}}</td>
      <td>{{$value->total}}</td>
      <td>
      <a href="{{route('orderdetail',$value->id)}}">vieww</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop