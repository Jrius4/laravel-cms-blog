@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>NBITECH</b>ADMIN</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
  
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocu>
          <span class="fa fa-envelope form-control-feedback"></span>
          @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          <span class="fa fa-lock form-control-feedback"></span>

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong class="text-danger">{{ $errors->first('password') }}</strong>
          </span>
      @endif
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{__('Sign In')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
      <br>
      @if (Route::has('password.request'))
      <a  href="{{ route('password.request') }}">{{ __('i, Forgot My Password') }}</a>
      @endif
      
      <br>
  
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
@endsection
