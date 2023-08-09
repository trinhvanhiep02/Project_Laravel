@extends('custumer.master')
@section('main1')
<div class="card-324">
        <div class="card__324">
            <h3>Services</h3>
            <div class="car-100">
                <li><a href="home.html">Home</a></li>/
                <li><a href="" style="color: #f38989;">Services</a></li>
            </div>
        </div>
    </div>
    <div class="container body-1">
        <div class="row">
            <div class="col-6">
                <img src="{{url('assets')}}//csscus/images/no2.png" width="100%" alt="">
            </div>
            <div class="col-6 liem">
                <ul>
                    <h1 class="liem-1" style="color: palevioletred;">01<img src="{{url('assets')}}//csscus/images/ngato.png" alt="" width="40px"></h1>
                    <img src="" alt="">
                    <h5>Body treatment</h5>
                    <li>Dolor sit amet, consectetur adipiscing elit , sed do eiusmod tempor incididuntt ut labore et dolore mâng aliqua. Quí pendisse ultrices gravida. Risus commodo viverra lacus vel facilisis.
                    </li>
                    <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, cinsectetur.</li>
                    <li><i class="fas fa-check"></i>adipiscing elit , sed do eiusmod tempar.</li>
                    <li><i class="fas fa-check"></i>incididunt ut labore et dolore manga aliqua.</li>
                    <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                    <button class="botao">READ MORE</button>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6 liem">
                <ul>
                    <h1 class="liem-1" style="color: palevioletred;">02<img src="{{url('assets')}}//csscus/images/ngato.png" alt="" width="40px"></h1>
                    <img src="" alt="">
                    <h5>Professinal makeup</h5>
                    <li>Dolor sit amet, consectetur adipiscing elit , sed do eiusmod tempor incididuntt ut labore et dolore mâng aliqua. Quí pendisse ultrices gravida. Risus commodo viverra lacus vel facilisis.
                    </li>
                    <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, cinsectetur.</li>
                    <li><i class="fas fa-check"></i>adipiscing elit , sed do eiusmod tempar.</li>
                    <li><i class="fas fa-check"></i>incididunt ut labore et dolore manga aliqua.</li>
                    <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                    <button class="botao">READ MORE</button>
                </ul>
            </div>
            <div class="col-6">
                <img src="{{url('assets')}}//csscus/images/no1.png" width="100%" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="{{url('assets')}}//csscus/images/no3.png" width="100%" alt="">
            </div>
            <div class="col-6 liem">
                <ul>
                    <h1 class="liem-1" style="color: palevioletred;">03<img src="{{url('assets')}}//csscus/images/ngato.png" alt="" width="40px"></h1>
                    <img src="" alt="">
                    <h5>Maincure & pedicure</h5>
                    <li>Dolor sit amet, consectetur adipiscing elit , sed do eiusmod tempor incididuntt ut labore et dolore mâng aliqua. Quí pendisse ultrices gravida. Risus commodo viverra lacus vel facilisis.
                    </li>
                    <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, cinsectetur.</li>
                    <li><i class="fas fa-check"></i>adipiscing elit , sed do eiusmod tempar.</li>
                    <li><i class="fas fa-check"></i>incididunt ut labore et dolore manga aliqua.</li>
                    <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                    <button class="botao">READ MORE</button>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6 liem">
                <ul>
                    <h1 class="liem-1" style="color: palevioletred;">04<img src="{{url('assets')}}//csscus/images/ngato.png" alt="" width="40px"></h1>
                    <img src="" alt="">
                    <h5>Maincure & pedicure</h5>
                    <li>Dolor sit amet, consectetur adipiscing elit , sed do eiusmod tempor incididuntt ut labore et dolore mâng aliqua. Quí pendisse ultrices gravida. Risus commodo viverra lacus vel facilisis.
                    </li>
                    <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, cinsectetur.</li>
                    <li><i class="fas fa-check"></i>adipiscing elit , sed do eiusmod tempar.</li>
                    <li><i class="fas fa-check"></i>incididunt ut labore et dolore manga aliqua.</li>
                    <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                    <button class="botao">READ MORE</button>
                </ul>
            </div>
            <div class="col-6">
                <img src="{{url('assets')}}//csscus/images/no4.png" width="100%" alt="">
            </div>
        </div>
    </div>

    <div class="card card-123  text-white">
        <img src="{{url('assets')}}//csscus/images/elit.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <div class="card__input">
                <div class="tieu-1">
                    <h2>Book Service</h2>
                    <img src="{{url('assets')}}//csscus/images/daunga2.png" alt="">
                </div>
                <li><input class="form-control" type="text" placeholder="Your name"></li>
                <li><input class="form-control" type="text" placeholder="Your phone"></li>
                <li><select class="form-control">
                <option>Choose a services</option>
              </select></li>
                <li><select class="form-control">
                <option>Choose a date</option>
              </select></li>
                <div class="botton-1">
                    <button type="button" class="btn" data-toggle="button" aria-pressed="false">
                APPOITMENT
              </button>
                </div>
            </div>
        </div>
    </div>
@stop