@extends('layouts.app')

@section('content')
<title>Register | NicRobotics</title>
<style>
    .formBox{
    margin-top: 4.5rem;
}
</style>
<div class="container formBox p-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registration') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="floatingInput" placeholder="Enter Username" name="username"
                                    value="{{ old('username') }}"  autocomplete="username">
                                <label for="floatingInput">Username</label>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="floatingInput" placeholder="name@example.com" name="email"
                                    value="{{ old('email') }}"  autocomplete="email">
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password"  autocomplete="new-password" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password_confirmation"  autocomplete="new-password"
                                    name="password" autocomplete="new-password" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Confirm password</label>
                            </div>

                            <div class="form-group inputSubLogin">
                                    <input type="submit" class="form-control registerBtn" value="Register">
                                    <a class="a-reg" href="/login">Already have an account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
