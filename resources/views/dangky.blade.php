<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ky</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Đăng ký</h2>
        @if (session('message'))
            <p class="text-danger">{{session('message')}}</p>
        @endif
      
        <form action="{{route('postDangky')}}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
              </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký tài khoản</button>
           
          </form>
          <hr>
          <a href="{{route('login')}}">Đăng nhập</a>
          
    </div>


    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>