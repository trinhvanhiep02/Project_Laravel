@extends('custumer.master')
@section('main1')

<style>
    .inpu {
        width: 50%;
        border: 0.5px solid #D4D4CD;
        position: absolute;
        right: 200px;
    }

    .input-group {
        margin: auto;
        text-align: center;

    }

    .containe {
        padding: 50px 0;
    }
</style>

<form method="post">
    @if(!Auth::check())
    <div style="background-color: #F2796F;">
        <strong>Vui Lòng Đăng Nhập Trước khi ĐẶT Hàng<a href="{{route('login_kh')}}?page=checkout">Đăng Nhập</a></strong>
    </div>

@else
    <div class="container containe">
        @csrf

      
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span id="basic-addon1">Họ Tên: </span>
            </div>
            <input class="inpu" type="text" class="form-control" name="name" aria-label="Username" aria-describedby="basic-addon1" value="{{Auth::user()->name}}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span id="basic-addon1">Email: </span>
            </div>
            <input class="inpu" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{Auth::user()->email}}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span id="basic-addon1">SĐT: </span>
            </div>
            <input class="inpu" type="text" class="form-control" aria-label="Username" name="phone" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span id="basic-addon1">ĐỊA CHỈ NHẬN HÀNG: </span>
            </div>
            <input class="inpu" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="address">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span>GHI CHÚ:</span>
            </div>
            <textarea name="note" class=" inpu" aria-label="With textarea"></textarea>
        </div>
        <input type="text" name="total" value="{{$cart->total_price()}}">
    </div>
    <div style="margin: auto;"><button class="btn btn-danger" style="text-align: center;" type="submit">ĐẶT</button></div>

</form>


@endif


@stop