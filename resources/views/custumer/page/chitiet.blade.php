@extends('custumer.master')
@section('main1')
<div class="container" style="padding: 30px 0 ;">
    <div class="row">
        <div class="col-7">
            <div class="item"> <img src="{{url('upload')}}\{{$pro->image}}" alt=""></div>
            <div class="item2" style="padding-top: 15px;">
                @foreach($pro->img_pro as $value)
                <div class="" style="float: left;">
                    <img width="100px" src="{{url('upload')}}\{{$value->image}}" alt="">
                </div>
                @endforeach

            </div>




        </div>
        <div class="col-5">
            <form action="{{route('addcart')}}" method="POST">
                <input type="hidden" name="id" value="{{$pro->id}}">
                @csrf
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    </ol>
                </nav>
                <h1>{{$pro->name}}</h1>
                @if($pro->sale_price>0)
                <p class="giaca" style="display: block;">
                    <span><del>VND {{number_format($pro->price)}}</del></span>
                    <span>VND {{number_format($pro->sale_price)}}</span>
                </p>
                @else
                <p class="giaca" style="display: block;">

                    <span>VND {{number_format($pro->price)}}</span>
                </p>
                @endif
                <div style="display: flex;">
                    <h5>Xuất sứ:</h5>
                    <p>{{$pro->nsx}}</p>
                </div>
                <span style="font-size: 18px;">mô tả: </span style="font-size: 12px;">
                <span>{{$pro->description}}</span>



                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input style="width: 70px;" name="quantity" type="number" value="1" class="form-control" min="1" name="sl">
                </div>

                <button class="btn btn-danger" type="submit">ADD</button>
            </form>
        </div>
    </div>
</div>


@stop