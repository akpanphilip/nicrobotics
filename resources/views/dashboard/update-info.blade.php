@extends('layouts.main')
@section('content')
    {{-- @if (Session::has('userUpdated'))
        <p class="text-success">
            {{ Session::get('userUpdated') }}
        </p>
    @endif --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="avatar m-3">
                    @if (empty(auth()->user()->avatar))
                    <img class="rounded-circle" src="{{ asset('userImages/138139.png') }}" width="160" height="160" alt="">
                    @else
                    <img class="rounded-circle avatarImg img-thumbnail" src="{{ asset('userImages')}}/{{auth()->user()->avatar}}" width="160" height="160" class="img-fluid" alt="User Image">
                    @endif
                </div>
                @if (session('image_updated'))
                    <div class="alert alert-success" role="alert">
                        {{ session('image_updated') }}
                    </div>
                @endif
                <form action="{{route('updateAvatar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                        <span class="text-danger spanText">
                            @error('image'){{ $message }}@enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update Image" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 col-md-6">
                    @if (session('status_email'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_email') }}
                        </div>
                    @endif
                    <div class="formEmail">
                        <form action="{{route('updateEmail')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
                                <span class="text-danger spanText">
                                    @error('email'){{ $message }}@enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update Email" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
