<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets')}}/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<style>
  body{
    background-image: url(assets/csscus/images/background-dep-vector.jpg);
    background-size: 100%;
   
  }
  .form-floating {
    width: 30%;
    margin: auto;
    padding: 10px 0;
  }

  .tex {
    margin: auto;
    width: 10%;
  }
  .error{
    color: red;
  }
</style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <div class="text-center">

<main class="form-signin">
  <form method="post">
    <!-- <img class="mb-4" src="" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal" style="color: #fff;">ĐĂNG NHẬP</h1>
@csrf
    <div class="form-floating">
      <label class="" for="" style="color: #fff;">Email</label>
      <input type="email" name="email" class="form-control" id="" placeholder="name@gmail.com">
      
    </div>
    <div class="form-floating">
      <label for="" style="color: #fff;">Password</label>
      <input type="password" name="password" class="form-control" id="" placeholder="Password">
      
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" style="color: #fff;"> Remember me/
        <a href="{{route('dangky')}}">Đăng Ký</a>
      </label>
    </div>
    <button class=" btn btn-lg btn-primary tex" type="submit">Đăng Nhập</button>


  </form>
</main>



</div>
</body>
</html>