@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ asset('css/main.css')}}" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>

<div class='loginContainer'>
        <h1>Log In</h1>
          <form action="/login" method="POST">
          @csrf
            <div> 
              <label for="email"><p>Email</p> 
                <input type="email" name="email" id="email">
              </label>
            </div>
            <div> 
              <label for="password"><p>Password</p> 
                <input type="password" name="password" id="password">
              </label>
            </div>
            <br /> 
              <input type="submit" value="Login">
          </form>
      <img src="{{asset ('media/illust-login.avif')}}" alt='login' />
    </div>



</body>
</html>

@endsection