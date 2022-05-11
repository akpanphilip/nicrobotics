@extends('layouts.main')
@section('content')
    <p class="top-p">Account details</p>
    @if (Session::has('userUpdated'))
        <p class="text-success">
            {{ Session::get('userUpdated') }}
        </p>
    @endif
    <form action="{{ route('userUpdate') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Username</label>
                <input type="text" value="{{auth()->user()->username}}" class="form-control @error('username') is-invalid @enderror" name="username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">First name</label>
                <input type="text" value="{{auth()->user()->firstname}}" class="form-control @error('firstname') is-invalid @enderror" name="firstname">
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Last name</label>
                <input type="text" value="{{auth()->user()->lastname}}" class="form-control @error('lastname') is-invalid @enderror" name="lastname">
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Mobile</label>
                <input type="text" value="{{auth()->user()->mobile}}" class="form-control @error('lastname') is-invalid @enderror" name="mobile">
                @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Street address</label>
                <textarea name="address" rows="4" class="form-control @error('address') is-invalid @enderror">
                    {{auth()->user()->address}}
                </textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">City</label>
                <input type="text" value="{{auth()->user()->city}}" class="form-control @error('city') is-invalid @enderror" name="city">
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Country</label>
                <input type="text" value="{{auth()->user()->country}}" class="form-control @error('country') is-invalid @enderror" name="country">
                @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Post code</label>
                <input type="text" value="{{auth()->user()->postcode}}" class="form-control @error('postcode') is-invalid @enderror" name="postcode">
                @error('postcode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 form-group">
                <label for="">Date Of Birth</label>
                <input type="date" value="{{auth()->user()->dob}}" class="form-control @error('dob') is-invalid @enderror" name="dob">
                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="form-control navy">
        </div>
    </form>
@endsection
