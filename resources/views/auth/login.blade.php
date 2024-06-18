@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_header', __('Login to start your session'))

@section('auth_body')
<form action="{{ route('login') }}" method="post">
    @csrf

    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            placeholder="{{ __('Password') }}" required>
        <div class="input-group-append">
            @error('password')
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">{{ __('Remember Me') }}</label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
        </div>
    </div>
</form>
@endsection

@section('auth_footer')
<p class="mb-1">
    <a href="{{ route('password.request') }}">{{ __('I forgot my password') }}</a>
</p>
<!-- <p class="mb-0">
    <a href="{{ route('register') }}" class="text-center">{{ __('Register a new membership') }}</a>
</p> -->
@endsection
