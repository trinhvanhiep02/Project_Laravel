@extends('custumer.master')
@section('main1')
<style>
*{
  margin: 0;
}
  .times {
    text-decoration: none;
    color: #000;
    font-weight: 15px;
    font-size: 25px;
   
  }
  .times:hover{
    color: red;

  }
  .btn-danger:hover{
    background-color: #f4f4f4;
    color: #000;
    border: 1px solid #f4f4f4;

  }
  .btn-info:hover{
    background-color: #f4f4f4;
    color: #000;
    border: 1px solid #f4f4f4;
  }
</style>
<div style="border-bottom: 1px solid #f1f1f1;">
  

    
      <ul class="list-unstyled" style="align-items: center; justify-content: center;">
        <form action="{{route('update')}}" method="post">
          @csrf
          @foreach($cart->content() as $key => $value)
          <input type="hidden" name="key[]" value="{{$key}}">
          <div class="" style="display: flex;">
            <div class="media" style="display: flex; padding: 30px 40px;margin: auto; border-bottom: 1px  solid #f1f1f1;">
              <img src="{{url('upload')}}/{{$value['image']}}" style="width: 20%;" class="mr-3" alt="...">
              <div class="media-body" style="padding: 15px;">
                <h5 class="mt-0">{{$value['name']}}</h5>
                <span> Giá Sp:{{number_format($value['price'])}} VND</span> </br>
                <span>Tổng:{{number_format($value['quantity'] * $value['price'])}} VND</span>
                <div class="form-group" style="display: flex;">
                  <label for="">Số lượng: </label>
                  <input style="width: 70px;" name="quantity[]" type="number" value="{{$value['quantity']}}" class="form-control" min="1" name="quantity">
                </div>
              </div>
            <a class=" times "  href="{{route('delete',$key)}}">&times;</a>
            </div>
            <!-- <a href="" class=" times "><i class="fas fa-times-circle"></i></a> -->
            
          </div>
          @endforeach
          <div style=" justify-content: space-between; display: flex;">
          <a href="{{route('checkout')}}" class="btn btn-danger" >ĐẶT</a>
          <button class="btn btn-info" type="submit">Cập nhật</button>
          </div>
        </form>
      </ul>
   
  <div style="display: flex; justify-content: space-between; background-color: #f4f4f4;">
    <h1>Tổng:</h1>
    <h1> {{number_format($cart->total_price())}}VND</h1>

  </div>
</div>






@stop