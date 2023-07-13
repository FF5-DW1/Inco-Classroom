@extends('layouts.main')
@section('content')

    <div class='loginContainer'>
        <form>
          <h1>Log In</h1>
          <div>
            <p>Email</p>
            <input type="text" class='input' />
          </div>
          <div>
            <p>Password</p>
            <input type="password" class='input' />
          </div>
          <br />
          <x-loginbutton />
        </form>
        <img src='{{asset('media/illust-login.avif')}}' alt='login' />
      </div>

@endsection