<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('assets')}}/csscus/fontawesome/css/all.css">
  <link rel="stylesheet" href="{{url('assets')}}/css/bootstrap.min.css">
  <title>Document</title>

  <style>
  body{
    background-image: url(assets/csscus/images/background-dep-vector.jpg);
    background-size: 100%;
   
  }
    .form {
        width: 30%;
        margin: auto;
        padding: 10px 0;
    }

    .tex {
        margin: auto;
        width: 10%;
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
        <h1 class="h3 mb-3 fw-normal" style="color: #fff;">ĐĂNG KÝ</h1>
        @csrf
        <div class="form">
          <label class="" for="" style="color: #fff;">name</label>
          <input type="name" name="name" class="form-control" id="" placeholder="name">

        </div>

        <div class="form">
          <label class="" for="" style="color: #fff;">Email</label>
          <input type="email" name="email" class="form-control" id="" placeholder="name@gmail.com">

        </div>

        <div class="form">
          <label class="" for="" style="color: #fff;">Password</label>
          <input type="password" name="password" class="form-control" id="" placeholder="Password">

        </div>



        <button class=" btn btn-lg btn-primary tex" type="submit">đăng ký</button>

      </form>
    </main>



  </div>

</body>

</html>