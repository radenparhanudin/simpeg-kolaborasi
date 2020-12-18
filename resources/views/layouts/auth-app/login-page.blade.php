@extends('layouts.auth-app')
@section('auth-page')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><span class="font-family-playfair">Login</span> <b class="font-family-roboto">SIMP</b>eg</a>
        </div>
        <h4 class="text-center text-navy text-uppercase">{{ config('app.name') }}</h4>
        <div class="login-box-body">
            <p class="login-box-msg"></p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback @error('email') has-error @enderror">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Username atau Email" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback @error('email') text-danger @enderror"></span>
                    @error('email')
                        <span class="help-block"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group has-feedback @error('password') has-error @enderror">
                    <input id="password" type="password" class="form-control" name="password" autocomplete="current-password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback @error('password') text-danger @enderror"></span>
                    @error('password')
                        <span class="help-block"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-8 pt-2">
                        <a href="javascript:void(0)" class="text-navy font-weight-bold">Lupa password</a><br>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn bg-navy btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.auth-app.foot')
</body>
@endsection