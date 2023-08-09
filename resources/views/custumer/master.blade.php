<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIAH SHOP</title>
    <link rel="stylesheet" href="{{url('assets')}}/csscus/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/home.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/about.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/shop.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/contact.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/services.css">
    <link rel="stylesheet" href="{{url('assets')}}/csscus/css.css">

</head>
<style>


   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.dialog {
    /* position: fixed; */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden;
    opacity: 0;
    transition: opacity linear 0.2s;
}

.overlay-close {
    position: absolute;
    width: 100%;
    height: 100%;
    cursor: default;
}

.dialog:target {
    visibility: visible;
    opacity: 1;
}


.overlay {
    background-color: rgba(0, 0, 0, 0.3);
}

.dialog-body {
    max-width: 400px;
    position: absolute;
    padding: 16px;
    background-color: #fff;
    left: 1339px;
    top: 57px;
}

.dialog-close-btn {
    position: absolute;
    top: 2px;
    right: 6px;
    text-decoration: none;
    color: #333;
}
</style>

<body>
    <!-- đầu -->
    <div class="nav__menu">
        <!-- <div class="head ">
        <div class="head__1 "><i class="fab fa-facebook-f"></i>      <i class="fab fa-twitter"></i>  <i class="fab fa-instagram"></i>  <i class="fab fa-youtube"></i></div>
        <div class="head__2 ">
          <div class="dropdown">
            <a class="btn btn__size  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              USD
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown">
            <a class="btn btn__size  dropdown-toggle" style="outline: none;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ENG
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div class="dropdown">
            <a class="btn btn__size  dropdown-toggle" href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sign in
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
      </div>
      </div> -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{url('assets')}}/csscus/images/logobo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0"> -->
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> -->
        <!-- <div class="navbar-nav navbar-hotro">
                        <li><i class="fas fa-search"></i></li>
                        <li><i class="far fa-heart"></i></li>
                        <li><i class="fas fa-shopping-cart"></i></li>
                        <li><span>$0.00</span></li>
                    </div>
                </form>
            </div>
        </nav> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('assets')}}/csscus/images/logobo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                    <a class="nav-link" href="{{route('about')}}">About</a>
                    <a class="nav-link" href="{{route('shop')}}">Shop</a>
                    <a class="nav-link" href="">Blog</a>
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </div>
                <div class="navbar-nav navbar-hotro">
                    <li><i class="fas fa-search"></i></li>
                    <li><a style="text-decoration: none; color: #333;" href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i></a>({{$cart->total_quantity()}})</li>
                    <li>
                    @if(!Auth::check())
                        <a class="dialog-btn" style="text-decoration: none; color: #333;" href="{{route('login_kh')}}"><i class="fas fa-user"></i></a>
                        @else
                        <a class="dialog-btn" style="text-decoration: none; color: #333;" href="#my-dialog"><i class="fas fa-user"></i></a>
                        <div class="dialog overlay" id="my-dialog">
                            <a href="#" class="overlay-close"></a>

                            <div class="dialog-body">
                                <!-- <a class="dialog-close-btn" href="#">&times;</a> -->
                                <p>{{Auth::user()->name}}</p>
                                <a style="text-decoration: none; color: #333;" href="{{route('log_out')}}">log out</a>

                            </div>
                        </div>
                        @endif
                    </li>

                </div>
            </div>
        </nav>
    </div>
    @yield('main1')
    <div class="foot">
        <div class="foot-1">
            <div class="container container-1">
                <div class="row">
                    <div class="col">
                        <img src="{{url('assets')}}/csscus/images/logobo.png" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-6">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" placeholder="Your email">
                            <button class="btn btn-1 my-2 my-sm-0"><i class="far fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <div class="col">
                        <img src="{{url('assets')}}/csscus/images/icon.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="list-style: none;">
                    <div class="col">
                        <h4>Contact info</h4>
                        <li>Address:2186 S Archer Ave. Chicago, IL60616,US</li>
                        <li>Phone: + 1 312-808-1999</li>
                        <li>Email:Beatycosmetics@gmail.com</li>
                        <li>Opentime:8.00am-11.00pm</li>
                    </div>
                    <div class="col">
                        <h4>Account</h4>
                        <li>My account</li>
                        <li>Wishlist</li>
                        <li>Cart</li>
                        <li>Shop</li>
                        <li>Checkout</li>
                    </div>
                    <div class="col">
                        <h4>Infomation</h4>
                        <li>About</li>
                        <li>Careers</li>
                        <li>Delivery information</li>
                        <li>Privacy Policy</li>
                        <li>Terms & Con dition</li>
                    </div>
                    <div class="col">
                        <h4>Payment methodss</h4>
                        <span>Loerm ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis</span>
                        <div class="atm">
                            <li>
                                <a href=""><img src="{{url('assets')}/csscus/images/pay1.png" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('assets')}/csscus/images/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('assets')}/csscus/images/atm1.png" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{url('assets')}/csscus/images/atm2.png" alt=""></a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class=" container-3">
        <li><i class="far fa-copyright">Copyright 2020 Beauty</i></li>
        <li>
            <p>Privacy | Terms & Conditions | Site Map</p>
        </li>
    </div>
</body>
<script src="/jquery/jquery-3.5.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="home.js"></script>

</html>