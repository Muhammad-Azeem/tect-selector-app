@extends('layouts.master.master-public')
@section('header')
    <style>
        body
        {
            background: white !important;
            background-image: url('/assets/media/bg/bg-3.jpg') !important;

        }
    </style>
    <link href="{{asset('assets/css/pages/login/login-3.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container" style="margin:auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="kt-login__logo" style="display:flex;justify-content:center">
                        <img src="{{asset('/images/logo.png')}} " alt="logo"  style="width: 40%">
                        <br>

                    </div>
                    <div class="card-header" style="margin-bottom: 20px;margin-top: 20px;text-align:center;font-size:large;background: white; border-bottom: none">
                        <h3 class="kt-login__title" style="color:#595d6e;font-size: 1.5rem; font-weight: 500">Reset Password </h3>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" style="background:rgba(235,237,242,.4)"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                    <input id="password" style="background:rgba(235,237,242,.4)" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" style="background:rgba(235,237,242,.4)" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="justify-content:center">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
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
