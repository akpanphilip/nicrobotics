@extends('layouts.app')

@section('content')
<title>Login | NicRobotics</title>
<div class="container formBox">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="floatingInput" placeholder="name@example.com" name="email"
                                value="{{ old('email') }}" autocomplete="email">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" autocomplete="new-password" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                        </div>
                        <div class="form-groupmb-0 d-flex flex-column">
                                <input type="submit" class="btn form-control registerBtn" value="Login">
                               <div class="a-btn">
                                   @if (Route::has('password.request'))
                                   <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                            <a class="a-reg" href="/register">Don't have an account?</a>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
