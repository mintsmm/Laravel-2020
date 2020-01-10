@extends('layouts.app')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 offset-md-3">--}}
{{--                <div class="auth-page">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <small class="card-small mb-0 pb-0">LARAVEL</small>--}}
{{--                            <h1 class="card-title login-title mt-0 pt-0">Login</h1>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <form action="">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Email Address</label>--}}
{{--                                    <input type="text" class="form-control">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="alert alert-laravel" role="alert">--}}
{{--                                        <span class="error-title">ERROR</span>--}}
{{--                                        <span class="error-msg">Incorrect Credentials</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Password</label>--}}
{{--                                    <input type="text" class="form-control">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="alert alert-laravel" role="alert">--}}
{{--                                        <span class="error-title">ERROR</span>--}}
{{--                                        <span class="error-msg">Incorrect Credentials</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <button class="btn btn-laravel btn-block">Login</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="quick-links">--}}
{{--                        <a href="#" class="forgot-passwd">Forgot Your Password?</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="{{url('login/github')}}" class="btn btn-primary">Login Using Github</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
