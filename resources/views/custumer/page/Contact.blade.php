@extends('custumer.master')
@section('main1')
<div class="card-324">
        <div class="card__324">
            <h3>Contact</h3>
            <div class="car-100">
                <li><a href="home.html">Home</a></li>/
                <li><a href="" style="color: #f38989;">Contact</a></li>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <H1>Contact info</H1>
                <div class="media">
                    <img src="{{url('assets')}}/csscus/images/vitri.png" class="align-self-center mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Address</h5>
                        <p class="mb-0">286 S Archer Ave, Chicago,IL60616</p>
                    </div>
                </div>
                <div class="media">
                    <img src="{{url('assets')}}/csscus/images/tainghe.png" class="align-self-center mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Phone</h5>
                        <p class="mb-0">+1 312-808-1999 | +1 233-688-8999</p>
                    </div>
                </div>
                <div class="media">
                    <img src="{{url('assets')}}/csscus/images/emai.png" class="align-self-center mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Email</h5>
                        <p class="mb-0">Bocphetso1@gmail.com</p>
                    </div>
                </div>
                <div class="media">
                    <img src="{{url('assets')}}/csscus/images/dongho.png" class="align-self-center mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Opentime</h5>
                        <p class="mb-0">Sun-Sat: 8.00am-9.00pm</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <H1>Get in touch</H1>
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput"></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"></label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Messenger" rows="3"></textarea>
                    </div>
                </form>
                <button class="send">SEND MESSAGE</button>
            </div>
        </div>
    </div>
    <!-- kết -->
    <div class="ket">
        <img src="{{url('assets')}}/csscus/images/keet.png" class="img-fluid" alt="Responsive image">
    </div>
@stop