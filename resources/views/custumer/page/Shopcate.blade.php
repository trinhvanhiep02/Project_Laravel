@extends('custumer.master')
@section('main1')
<div class="card-324">
    <div class="card__324">
        <h3>Shop</h3>
        <div class="car-100">
            <li><a href="home.html">Home</a></li>/
            <li><a href="" style="color: #f38989;">Shop</a></li>
        </div>
    </div>
</div>
<!-- phan1 -->
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col">
            <i class="fas fa-bars" style="font-size: 33px; color: #888585;"></i>
        </div>
        <div class="col-md-auto">
        </div>
        <div class="col col-lg-2">
            <div class="dropdown">
                <a class="btn btn-light  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh Mục
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{route('shop')}}">Tất Cả Sp</a>
                    @foreach($cate as $value)
                    <a class="dropdown-item" href="{{route('shopcate',$value->id)}}">{{$value->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container container-100k">
    <div class="row row_sp">
        <!-- @foreach($pro as $value)
            <div class="card" style="width: 18rem; margin: 20px;">
                <img src="{{url('upload')}}/{{$value->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="span-1">Eyes</span>
                    <p class="card-text">{{$value->name}}</p>
                    <span class="span-2">VND {{$value->price}}</span>
                    <p class="giamgia">-50%</p>
                </div>
            </div>
            @endforeach -->


        <div class="row row_col row-cols-1 row-cols-sm-2 row-cols-md-4">
            @foreach($pro as $value)
            <a class="btn btn-white" style="border: none;" href="{{route('chitiet',$value->id)}}">
                <div class="card" style="width: 18rem ; margin: 10px;height: 400px;">
                    <img style="max-height: 200px;" src="{{url('upload')}}/{{$value->image}}" class="card-img-top"  alt="...">
                    <div class="card-body">
                        <p class="card-text">{{$value->name}}</p>
                        @if($value->sale_price>0)
                        <p class="giaca" style="display: block;">
                            <span><del>VND {{number_format($value->price)}}</del></span>
                            <span>VND {{number_format($value->sale_price)}}</span>
                        </p>
                        @else
                        <p class="giaca" style="display: block;">

                            <span>VND {{number_format($value->price)}}</span>
                        </p>
                        @endif
                        
                    </div>
                    <div style="padding: 0 10px 0 10px;">
                        <div class="" style="display: flex; justify-content: space-between;">
                            <span style="padding-bottom: 1px;" class="home-product-item-like home-product-item-like-liked">
                                <!-- <i style="color: red;" class="home-product-item-like-icon-empty far fa-heart"></i> -->
                                <i style="color: red;" class="fas fa-heart"></i>

                            </span>
                            <div style="padding-bottom: 1px;" class="home-product-item-rating">
                                <i style="color: gold;" class="fas fa-star"></i>
                                <i style="color: gold;" class="fas fa-star"></i>
                                <i style="color: gold;" class="fas fa-star"></i>
                                <i style="color: gold;" class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                        </div>
                        <div class="cate_nsx" style="justify-content: space-between; display: flex;">
                            <span>{{$value->category->name}}</span>
                            <span>{{$value->nsx}}</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="page-1">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <li class="page-item"><a class="page-link" style="background-color: #ff674d;" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="ket">
        <img style="width: 100%;" src="{{url('assets')}}//csscus/images/keet.png" class="img-fluid" alt="Responsive image">
    </div>
    @stop