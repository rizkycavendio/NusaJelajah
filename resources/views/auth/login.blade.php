@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/img/gambar_nusajelajah.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Log In</h3>
              <p class="mb-4">Login dengan akun yang sudah didaftarkan.</p>
            </div>
            <form action="{{ route('login') }}" method="post" id="loginForm">
              @csrf
              <div class="form-group first">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
        
              <div class="d-flex mb-5 align-items-center justify-content-between">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                    <div class="control__indicator"></div>
                </label>
                @if (Route::has('password.request'))
                    <span class="ml-auto">
                        <a href="{{ route('password.request') }}" class="forgot-pass" id="forgotPass">Forgot Password</a>
                    </span> 
                @endif
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
