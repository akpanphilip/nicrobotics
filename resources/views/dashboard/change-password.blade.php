@extends('layouts.main')
@section('content')
<style>
    label{
        color: #fff;
        font-weight: 500;
    }

    .container-fwd{
        margin-top: 80px;
    }
    input[type=password] {
        border: none;
        background: transparent;
        border-radius: 0;
        border-bottom: 2px solid rgb(209, 207, 207) !important;
    }
    input[type=text]:focus {
        border-top-style: none !important;
        border-left-style: none !important;
        border-right-style: none !important;
        outline: none !important;
    }
    .card-form{
        border: none !important;
        background-color: #111c35;
    }
</style>
<div class="container container-fwd">
    @if(Session::has('changed'))
    <div class="alert alert-success" role="alert">
        {{Session::get('changed')}}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-form">

                <div class="card-body">

                    <form method="POST" action="{{ route('changePassword') }}">

                        @csrf



                        @foreach ($errors->all() as $error)
                            <div class="alert bg-danger text-light">
                                {{ $error }}
                            </div>
                        @endforeach



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Current
                                Password</label>



                            <div class="col-md-6">

                                <input id="password" type="password" class="form-control"
                                    name="current_password" autocomplete="current-password">

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">New
                                Password</label>



                            <div class="col-md-6">

                                <input id="new_password" type="password" class="form-control"
                                    name="new_password" autocomplete="current-password">

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirm
                                Password</label>



                            <div class="col-md-6">

                                <input id="new_confirm_password" type="password" class="form-control"
                                    name="new_confirm_password" autocomplete="current-password">

                            </div>

                        </div>



                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-dark">

                                    Update Password

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection
