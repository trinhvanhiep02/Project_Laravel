@extends('Admin.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <label for="">Thêm Danh Mục </label>
            @if(Session::get("thongbao"))
            <div class="alert alert-info" role="alert">
                <strong>{{Session::get("thongbao")}}</strong>
            </div>
            @endif
            <form action="" method="post">
            @csrf
                <label for="">name</label>
                <input type="name" name="name" id="" >
                @error('name')
                <span style="color: red;" >{{$message}}</span>
                @enderror
                    <div class="form-group">
                      <label for="">Status</label>
                      <div class="radio">
                      <label for="">
                      <input type="radio" name="status" id="input" value="0" checked="checked">Ẩn
                      </label>

                      <label for="">
                      <input type="radio" name="status" id="input" value="1" >Hiện
                      </label>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($category as $value)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{($value->status == 1)? 'Hiện': 'Ẩn'}}</td>
                        <td>
                        <a href="{{route('edit_category',$value->id)}}"><button class="btn btn-info" ><i  class="fas fa-edit"></i> </button></a>
                        <a href="{{route('delete_category',$value->id)}}"><button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>

</div>


@stop