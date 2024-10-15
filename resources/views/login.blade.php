<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *{
            width: 100%;
        }
        body{
            background:white;
        }
        header{
            height: 100%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header class="row justify-content-center" style="height: 580px;">
        <div class="col-md-6" style="background-image: url('/css/laptop1.webp');background-size: cover;">

        </div>
        <div class="col-md-6 bg-white pt-5" style="height:100%;">
            <h3 class="text-center fw-bold">Login </h3>
            <div class="pt-3">
                <div class="px-5">
                    <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                            <span class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                            <span class="text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-block btn-success">Login</button>                        
                        </div>
                        <div>
                            <p class="text-center">Don't have an account? <a href="{{URL('register')}}">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </header>
  </body>
</html>