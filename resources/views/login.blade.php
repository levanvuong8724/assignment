<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Đăng nhập</h2>
        @if (session('message'))
            <p class="text-danger">{{session('message')}}</p>
        @endif
      
        <form action="{{route('postLogin')}}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
              @error('email')
                  <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
              @error('password')
              <span class="text-danger">{{$message}}</span>
          @enderror
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
         
          </form>
          <hr>
          <div class="dangky">
            <a href="{{route('dangky')}}"> <button type="submit" class="btn btn-primary">Đăng ký</button></a>
          </div>
          
         

    </div>


    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>