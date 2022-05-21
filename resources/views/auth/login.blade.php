@extends('layouts.auth')

@section('title', __('Login') )

@section('content')
<div class="col-lg-6 d-flex align-items-center justify-content-center">
    <div class="auth-form-transparent text-left p-3">
      <div class="brand-logo">
        <img src="{{ asset('panel/images/logo.svg')}}" alt="logo">
      </div>
      <h4>Welcome back!</h4>
      <h6 class="font-weight-light">Happy to see you again!</h6>
      <form class="pt-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail">{{ __('Email Address') }}</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="mdi mdi-account-outline text-primary"></i>
              </span>
            </div>
            <input id="email" type="email" class="form-control form-control-lg border-left-0" placeholder="example@domain.com" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="mdi mdi-lock-outline text-primary"></i>
              </span>
            </div>
            <input type="password" class="form-control form-control-lg border-left-0" id="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
          <div class="form-check">
            <label class="form-check-label text-muted">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              {{ __('Remember Me') }}
            </label>
          </div>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="auth-link text-black">{{ __('Forgot Your Password?') }}</a>
          @endif
        </div>
        <div class="my-3">
          <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Login') }}</button>
        </div>
        {{-- <div class="mb-2 d-flex">
          <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
            <i class="mdi mdi-facebook mr-2"></i>Facebook
          </button>
          <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
            <i class="mdi mdi-google mr-2"></i>Google
          </button>
        </div> --}}
        {{-- <div class="text-center mt-4 font-weight-light">
          Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
        </div> --}}
      </form>
    </div>
  </div>
  <div class="col-lg-6 login-half-bg d-flex flex-row">
    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
  </div>

@endsection
